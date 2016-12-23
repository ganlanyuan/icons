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
  allSvgs: ['svg/**/*.svg', '!svg/social/currentColor/*.svg'],
  newSvgs: 'svg/new/*.svg',

  watch: {
    php: '**/*.php',
  },

  min: {
    options: {
      plugins: [{
        floatPrecision: 2
      }, {
        convertColors: {
          currentColor: '#000000'
        }
      }]
    },
    dest: 'svg-min/new'
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
  return gulp.src(config.newSvgs)
    .pipe(svgmin(config.min.options))
    .pipe(gulp.dest(config.min.dest))
    .pipe(browserSync.stream());
});

gulp.task('sprites', function () {
  return gulp.src(config.allSvgs)
    .pipe(svgmin(function (file) {
      var prefix = path.basename(file.relative, path.extname(file.relative));
      return {
        plugins: [{
          cleanupIDs: {
            prefix: prefix + '-',
            minify: true
          }
        }],
        // js2svg: { pretty: true }
      }
    }))
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(rename(config.sprites.name))
    .pipe(gulp.dest(config.sprites.dest));
});

gulp.task('inject', function () {
  function fileContents (filepath, file) {
    if (filepath.slice(-4) === '.svg') {
      var filename = filepath.slice(filepath.search(/([^/]*)$/), -4);
      return '<li><svg role="img" title="' + filename + '"><use xlink:href="#' + filename + '" /></svg><input type="text" class="icon-name" id="' + filename + '-copy" value="' + filename + '"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#' + filename + '-copy">Copy</button></li>';
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