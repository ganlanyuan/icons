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

  watch: {
    php: '**/*.php',
  },

  edit: {
    src: 'svg-original/**/*.svg',
    color: 'currentColor',
    dest: 'svg',
  },

  svg_sprites: {
    src: 'svg/**/*.svg',
    dest: '',
    name: 'sprites.svg',
  },

  svgmin: {
    src: 'svg/**/*.svg',
    dest: 'svg-min/'
  },

  inject: {
    src: 'svg/**/*.svg',
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

gulp.task("edit", function(){
  gulp.src(config.edit.src)
      .pipe(colorize({
        colors: {
          default: {
            blue: config.edit.color
          },
        },
        replaceColor: function(content, hex) {
          return content.replace(/stroke="#(.*?)"/g, 'stroke="' + hex + '"')
            .replace(/(\d*-fill)/, '')
            .replace(/\d+\s*<\/title>/, '</title>')
            .replace(/(\d*-)/, ' ');
            // .replace(/><\/path>/g, ' vector-effect="non-scaling-stroke"></path>')
            // .replace(/><\/circle>/g, ' vector-effect="non-scaling-stroke"></circle>')
            // .replace(/><\/ellipse>/g, ' vector-effect="non-scaling-stroke"></ellipse>')
            // .replace(/><\/polygon>/g, ' vector-effect="non-scaling-stroke"></polygon>')
            // .replace(/><\/polyline>/g, ' vector-effect="non-scaling-stroke"></polyline>');
        },
        replacePath: function(path, colorKey) {
          return path.replace(/\.svg/, '.svg');
        }
      }))
      .pipe(gulp.dest(config.edit.dest))
      .pipe(browserSync.stream());
});

// Svg Task
gulp.task('min', ['edit'], function () {
  return gulp.src(config.svgmin.src)
    .pipe(svgmin())
    .pipe(gulp.dest(config.svgmin.dest))
    .pipe(browserSync.stream());
});

gulp.task('svg_sprites', function () {
  return gulp.src(config.svg_sprites.src)
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
    .pipe(rename(config.svg_sprites.name))
    .pipe(gulp.dest(config.svg_sprites.dest));
});

gulp.task('inject', ['edit'], function () {
  function fileContents (filepath, file) {
    if (filepath.slice(-4) === '.svg') {
      var filename = filepath.slice(filepath.search(/([^/]*)$/), -4);
      return '<li><svg role="img" title="' + filename + '"><use xlink:href="#' + filename + '" /></svg><div class="icon-name">' + filename + '</div></li>';
    }
  }

  return gulp.src(config.inject.target)
    .pipe(inject(gulp.src(config.inject.src), {
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
  gulp.watch(config.edit.src, ['edit', 'min']);
  gulp.watch(config.svg_sprites.src, ['svg_sprites']);
  gulp.watch(config.watch.php).on('change', browserSync.reload);
  gulp.watch(config.watch.html).on('change', browserSync.reload);
});

// Default Task
gulp.task('default', [
  // 'min', 
  // 'inject', 
  // 'svg2png',
  // 'svg_sprites',
  'browser-sync', 
  'watch',
]);  