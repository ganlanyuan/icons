var config = {
  sassLang: 'libsass',
  browserSync: {
    server: {
      baseDir: './'
    },
    open: false,
    notify: false
  },
  allSvgs: ['svg-min/**/*.svg', '!svg-min/social/currentColor/*.svg'],
  newSvgs: ['svg/line/*.svg', 'svg/fill/*.svg'],
  clear: ['appstore', 'amazon', 'bd', 'add-circle-line', 'dislike1-fill'],

  watch: ['*.html', 'assets/**/*.css', 'assets/**/*.js'],

  min: {
    options: {
      plugins: [{
        convertPathData: {
          floatPrecision: 1
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
    dest: 'svg-min'
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

function errorlog (error) {  
  console.error.bind(error);  
  this.emit('end');  
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
    .pipe(gulp.dest('svg-min'))
});

gulp.task('sprites', function () {
  return gulp.src(config.allSvgs)
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(rename(config.sprites.name))
    .pipe(gulp.dest(config.sprites.dest));
});

// Nunjucks Task
gulp.task('html', function() {
  let data = requireUncached('./' + PATHS.templates + 'data.json');
  data.year = new Date().getFullYear();

  let imageCount = 0;
  data.getImageCount = function () { return imageCount += 1; };

  return gulp.src(PATHS.templates + '**/*.njk')
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

var fs = require("fs"),
    path = require("path");

var p = "svg-min/",
    icons = {};
fs.readdir(p, function (err, dirs) {
  if (err) { throw err; }

  dirs.map(function (dir) {
    return path.join(p, dir);
  }).filter(function (dir) {
    return fs.statSync(dir).isDirectory();
  }).forEach(function (dir) {
    var dirName = dir.replace(p, '');
    icons[dirName] = [];
    fs.readdir(dir, function (err, files) {
      if (err) { throw err; }
      files.map(function (file) {
        return path.join(dir, file);
      }).filter(function (file) {
        return fs.statSync(file).isFile();
      }).forEach(function (file) {
        if (path.extname(file) === '.svg') {
          icons[dirName].push(path.basename(file, '.svg'));
          console.log(icons);
        }
      })
    });
  });
});

gulp.task('inject', function () {
  function fileContentsMarkup (filepath, file) {
    if (filepath.slice(-4) === '.svg') {
      var filename = filepath.slice(filepath.search(/([^/]*)$/), -4);
      var foldernameTem = filepath.replace('/svg-min/', '');
      var foldername = foldernameTem.slice(0, foldernameTem.indexOf('/'));
      var clear = (config.clear.indexOf(filename) !== -1)? '<h2>' + foldername + '</h2>' : '';
      return clear + '<div class="item"><div class="item-content"><div class="svg-wrapper"><svg id="' + filename + '" role="img" title="' + filename + '"><use xlink:href="sprites.svg#' + filename + '" /></svg><div class="icon-name">' + filename + '</div></div><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#' + filename + '-copy"></button><textarea name="" id="' + filename + '-copy" cols="30" rows="10"><svg role="img" title="' + filename.replace(/-/g, ' ').replace(/\d/g, '').replace(/(\sfill|\sline)/g, '') + '"><use xlink:href="assets/svg/sprites.svg#' + filename + '" /></svg></textarea></div></div>';
    }
  }

  return gulp.src(config.inject.target)
    .pipe(inject(gulp.src(config.allSvgs), {
      starttag: config.inject.starttagMarkup,
      transform: fileContentsMarkup
    }))
    .pipe(gulp.dest(config.inject.dest))
    .pipe(browserSync.stream());
});

// server
gulp.task('browser-sync', function() {
  browserSync.init(config.browserSync);
});

gulp.task('watch', function () {
  // gulp.watch(config.min.src, ['min']);
  // gulp.watch(config.sprites.src, ['sprites']);
  gulp.watch(config.watch).on('change', browserSync.reload);
});

// Default Task
gulp.task('default', [
  // 'min', 
  // 'html', 
  // 'inject', 
  // 'sprites',
  // "removeSvgFill",
  // 'browser-sync', 
  // 'watch',
]);  