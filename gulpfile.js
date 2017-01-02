var config = {
  sassLang: 'libsass',
  server: {
    base: '.',
    hostname: '0.0.0.0',
    keepalive: true,
    stdio: 'ignore',
  },
  browserSync: {
    proxy: '0.0.0.0:8000',
    open: true,
    notify: false
  },
  allSvgs: ['svg-min/**/*.svg', '!svg-min/social/currentColor/*.svg'],
  newSvgs: ['svg/line/*.svg', 'svg/fill/*.svg'],
  clear: ['appstore', 'amazon', 'bd', 'add-circle-line', 'dislike1-fill'],

  watch: {
    php: '**/*.php',
  },

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
    target: './index.php',
    starttag: '<!-- inject:svg -->',
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

gulp.task('sprites', function () {
  return gulp.src(config.allSvgs)
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(rename(config.sprites.name))
    .pipe(gulp.dest(config.sprites.dest));
});

gulp.task('inject', function () {
  function fileContents (filepath, file) {
    if (filepath.slice(-4) === '.svg') {
      var filename = filepath.slice(filepath.search(/([^/]*)$/), -4);
      var foldernameTem = filepath.replace('/svg-min/', '');
      var foldername = foldernameTem.slice(0, foldernameTem.indexOf('/'));
      var clear = (config.clear.indexOf(filename) !== -1)? '<br><h2>' + foldername + '</h2>' : '';
      return clear + '<div class="item"><svg role="img" title="' + filename + '" id="' + filename + '"><use xlink:href="#' + filename + '" /></svg><input type="text" class="icon-name" id="' + filename + '-copy" value="' + filename + '"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#' + filename + '-copy">Copy</button></div>';
    }
  }

  return gulp.src(config.inject.target)
    .pipe(inject(gulp.src(config.allSvgs), {
      starttag: config.inject.starttag,
      transform: fileContents
    }))
    .pipe(gulp.dest(config.inject.dest))
    .pipe(browserSync.stream());
});

// server
gulp.task('server', function () {
  php.server(config.server);
});
gulp.task('browser-sync', ['server'], function() {
  browserSync.init(config.browserSync);
});

gulp.task('watch', function () {
  // gulp.watch(config.min.src, ['min']);
  // gulp.watch(config.sprites.src, ['sprites']);
  gulp.watch(config.watch.php).on('change', browserSync.reload);
  gulp.watch(config.watch.html).on('change', browserSync.reload);
});

// Default Task
gulp.task('default', [
  // 'min', 
  // 'inject', 
  // 'sprites',
  'browser-sync', 
  'watch',
]);  