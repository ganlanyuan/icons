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
var php = require('gulp-connect-php');
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
var svg2png = require('gulp-svg2png');
var inject = require('gulp-inject');
var browserSync = require('browser-sync').create();
var rename = require('gulp-rename');
var colorize = require('gulp-colorize-svgs');
var mergeStream = require('merge-stream');

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

gulp.task('inject', function () {
  function fileContentsMarkup (filepath, file) {
    if (filepath.slice(-4) === '.svg') {
      var filename = filepath.slice(filepath.search(/([^/]*)$/), -4);
      var foldernameTem = filepath.replace('/svg-min/', '');
      var foldername = foldernameTem.slice(0, foldernameTem.indexOf('/'));
      var clear = (config.clear.indexOf(filename) !== -1)? '<h2>' + foldername + '</h2>' : '';
      return clear + '<div class="item"><svg id="' + filename + '" role="img" title="' + filename + '"><use xlink:href="sprites.svg#' + filename + '" /></svg><input type="text" class="icon-name" id="" value="' + filename + '"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#' + filename + '-copy"></button><textarea name="" id="' + filename + '-copy" cols="30" rows="10"><svg role="img" title="' + filename.replace(/-/g, ' ').replace(/\d/g, '').replace(/(\sfill|\sline)/g, '') + '"><use xlink:href="sprites.svg#' + filename + '" /></svg></textarea></div>';
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
  'inject', 
  // 'sprites',
  // "removeSvgFill",
  'browser-sync', 
  'watch',
]);  