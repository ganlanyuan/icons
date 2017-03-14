var gulp = require('gulp');
var libsass = require('gulp-sass');
var rubysass = require('gulp-ruby-sass');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var svgstore = require('gulp-svgstore');
var cheerio = require('gulp-cheerio');
var path = require('path');
var svgmin = require('gulp-svgmin');
var inject = require('gulp-inject');
var browserSync = require('browser-sync').create();
var rename = require('gulp-rename');
var mergeStream = require('merge-stream');
var nunjucks = require('gulp-nunjucks');
var htmltidy = require('gulp-htmltidy');
var fs = require("fs");
var path = require("path");

var config = {
  sassLang: 'libsass',
  browserSync: {
    server: {
      baseDir: './'
    },
    open: false,
    notify: false
  },
  allSvgs: ['min/**/*.svg', '!min/social/currentColor/*.svg'],
  newSvgs: ['svg/**/*.svg'],
  watch: ['*.html', 'assets/**/*.css', 'assets/**/*.js'],

  min: {
    options: {
      plugins: [{
        convertPathData: {
          floatPrecision: 2
        }
      }, {
        mergePaths: false
      }, {
        convertColors: {
          currentColor: '#000000'
        }
      }]
    },
    base: 'svg',
    dest: 'min'
  },

  sprites: {
    dest: '',
    name: 'sprites.svg',
  },

  inject: {
    target: './index.html',
    starttagMarkup: '<!-- inject:markup -->',
    dest: './'
  },

};

function errorlog (error) {  
  console.error.bind(error);  
  this.emit('end');  
}  

function requireUncached( $module ) {
  delete require.cache[require.resolve( $module )];
  return require( $module );
}

// Svg Task
gulp.task('min', function () {
  return gulp.src(config.newSvgs, {base: config.min.base})
    .pipe(svgmin(config.min.options))
    .pipe(gulp.dest(config.min.dest))
    .pipe(browserSync.stream());
});

gulp.task('removeSvgFill', function () {
  return gulp.src(config.allSvgs)
    .pipe(cheerio(function ($, file) {
      $('svg[fill]').each(function() {
        var fillColor = $(this).attr('fill');
        $(this).html('<g fill="' + fillColor + '">' + $(this).html() + '</g>');
        $(this).removeAttr('fill');
      });
    }))
    .pipe(gulp.dest('min'))
});

gulp.task('sprites', ['min'], function () {
  return gulp.src(config.allSvgs)
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(rename(config.sprites.name))
    .pipe(gulp.dest(config.sprites.dest));
});

// dir to json
gulp.task('dirToJson', function () {
  var p = "min/",
      icons = {svgs: {}};

  fs.readdir(p, function (err, dirs) {
    if (err) { throw err; }

    dirs.map(function (dir) {
      return path.join(p, dir);
    }).filter(function (dir) {
      return fs.statSync(dir).isDirectory();
    }).forEach(function (dir) {
      var dirName = dir.replace(p, '').replace(/\s/g, '-');
      icons.svgs[dirName] = [];

      fs.readdir(dir, function (err, files) {
        if (err) { throw err; }

        files.map(function (file) {
          return path.join(dir, file);
        }).filter(function (file) {
          return fs.statSync(file).isFile();
        }).forEach(function (file) {
          if (path.extname(file) === '.svg') {
            icons.svgs[dirName].push(path.basename(file, '.svg'));
          }

          var str = JSON.stringify(icons, null, 2);
          fs.writeFile('svgdir.json', str, function (err) {
            if (err) { return console.log(err); }
          })
        });
      });
    });
  });
});

// Nunjucks Task
gulp.task('html', function() {
  let data = requireUncached('./svgdir.json');

  return gulp.src('*.njk')
    .pipe(nunjucks.compile(data), {
      watch: true,
      noCache: true,
    })
    .pipe(rename(function (path) { path.extname = ".html"; }))
    .pipe(htmltidy({
      doctype: 'html5',
      wrap: 0,
      hideComments: true,
      indent: true,
      'indent-attributes': false,
      'drop-empty-elements': false,
      'force-output': true
    }))
    .pipe(gulp.dest('.'));
});

// server
gulp.task('server', function() {
  browserSync.init(config.browserSync);
});

gulp.task('watch', function () {
  // gulp.watch(config.min.src, ['min']);
  // gulp.watch(config.sprites.src, ['sprites']);
  gulp.watch('*.njk', ['html']);
  gulp.watch(config.watch).on('change', browserSync.reload);
});

// Default Task
gulp.task('default', [
  // "removeSvgFill",
  // 'sprites',
  // 'dirToJson',
  'html', 
  'server', 
  'watch',
]);  