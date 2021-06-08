
'use strict';

const browserSync = require('browser-sync').create(),
  reload = browserSync.reload,
  gulp = require('gulp'),
  autoprefixer = require('gulp-autoprefixer'),
  sass = require('gulp-dart-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  csso = require('gulp-csso'),
  pump = require('pump'),
  uglify = require('gulp-uglify'),
  concat = require('gulp-concat'),
  plumber = require('gulp-plumber'),
  scp = require('gulp-scp2'),
  watch = require('gulp-watch');
var i;
// browser-sync task for starting the server.

gulp.task('browserSync-Local', () => {
  //watch files

  browserSync.init({
    logPrefix: "escala-dev",
    open: false,
    // http: true,
    // online: true,
    notify: true,
    injectChanges: true,
    proxy: "localhost/escala-dev/",
    files: ['assets/**'],

  });

});

gulp.task('browserSync-Server', () => {
  //watch file

  browserSync.init({
    logPrefix: "escala-dev",
    open: true,
    https: true,
    online: true,
    notify: true,
    injectChanges: true,
    proxy: "https://goescala.com/",

  serveStatic: ["assets/css"],
    files: "assets/css/escala-devEstilos.css",
    snippetOptions: {
        rule: {
            match: /<\/head>/i,
            fn: function (snippet, match) {
                return '<link rel="stylesheet" type="text/css" href="/escala-devEstilos.css"/>' + snippet + match;
            }
        }
    }

});
});

// C:\xampp2\htdocs\escala-dev\wp-content\themes\oceanwp-child\resources\assets\styles

gulp.task('sass', () => {
  return gulp.src('./resources/assets/styles/**/*.sass')
    .pipe(watch('./resources/assets/styles/**/*.sass'))
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer({
      browsers: ['last 10 versions']
    }))
    .pipe(csso())
    .pipe(gulp.dest('./dist/styles'))
    .pipe(browserSync.stream());
});

gulp.task('sassGeneral', () => {
  return gulp.src('./resources/assets/styles/**/*.sass')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer({
      browsers: ['last 10 versions']
    }))
    .pipe(csso())
    .pipe(gulp.dest('./dist/styles'))
    .pipe(browserSync.stream());
});

gulp.task('js', () => {
  return gulp.src('./resources/assets/scripts/**/*.js')
    .pipe(watch('./resources/assets/scripts/**/*.js'))
    .pipe(plumber(
      //{errorHandler: errorScripts};
      function (error) {
        console.log(error);
        this.emit('end');
      }
    ))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/scripts/'))
});

gulp.task('jsGeneral', (cb) => {
  pump([
    gulp.src('./resources/assets/scripts/**/*.js'),
    concat('funciones.js'),
    uglify(),
    gulp.dest('./dist/scripts/')
  ],
    cb
  );
});

gulp.task('SassJs', gulp.series(gulp.parallel('sass', 'jsGeneral')));


gulp.task('watch', () => {

  gulp.watch("./resources/assets/styles/**/*.sass", gulp.series('sass'));
  gulp.watch("./resources/assets/scripts/**/*.js", gulp.series('js'));

});




gulp.task('online', gulp.series(gulp.parallel('SassJs', 'watch', 'browserSync-Server')));


gulp.task('local', gulp.series(gulp.parallel('SassJs', 'watch', 'browserSync-Local')));



