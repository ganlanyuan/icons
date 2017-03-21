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

var svgFolder = "min/",
    svgDir = {svgs: {}};
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

gulp.task('sprites', ['min'], function () {
  return gulp.src(config.allSvgs)
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(rename(config.sprites.name))
    .pipe(gulp.dest(config.sprites.dest));
});

// Nunjucks Task
gulp.task('html', function() {
  // get svgDir
  var dirMin = fs.readdirSync(svgFolder);
  dirMin.map(function (dir) {
    return path.join(svgFolder, dir);
  }).filter(function (dir) {
    return fs.statSync(dir).isDirectory();
  }).forEach(function (dir) {
    var dirName = dir.replace('min/', '').replace(/\s/g, '-');
    svgDir.svgs[dirName] = [];

    var files = fs.readdirSync(dir);
    files.map(function (file) {
      return path.join(dir, file);
    }).filter(function (file) {
      return fs.statSync(file).isFile();
    }).forEach(function (file) {
      if (path.extname(file) === '.svg') {
        svgDir.svgs[dirName].push(path.basename(file, '.svg'));
      }
    });
  });

  return gulp.src('*.njk')
    .pipe(nunjucks.compile(svgDir, {
      watch: true,
      noCache: true,
    }))
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
  // 'sprites',
  'html', 
  'server', 
  'watch',
]);  