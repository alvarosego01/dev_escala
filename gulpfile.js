
'use strict';

const browserSync = require('browser-sync').create(),
    reload = browserSync.reload,
    gulp = require('gulp'),
    // autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-dart-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    csso = require('gulp-csso'),
    pump = require('pump'),
    uglify = require('gulp-uglify'),
    plumber = require('gulp-plumber'),
    autoprefixer = require('autoprefixer'),
    postcss = require('gulp-postcss'),
        cached = require("gulp-cached"),
    watch = require('gulp-watch');

// var project = ts.createProject('tsconfig.json');


var i;
// browser-sync task for starting the server.

gulp.task('browserSync-Local', () => {
    //watch files

    browserSync.init({
        logPrefix: "escala",
        open: false,
        // http: true,
        // online: true,
        notify: true,
        injectChanges: true,
        proxy: "localhost/escala/",
        files: ['dist/styles/**'],
        port: 3025,
        serveStatic: ["assets/css"],
        files: "assets/css/escalaEstilos.css",
        snippetOptions: {
            rule: {
                match: /<\/head>/i,
                fn: function (snippet, match) {
                    return '<link rel="stylesheet" type="text/css" href="/escalaEstilos.css"/>' + snippet + match;
                }
            }
        }

    });

});

gulp.task('browserSync-Server', () => {
    //watch file

    browserSync.init({
        logPrefix: "escala",
        open: true,
        https: true,
        online: true,
        notify: true,
        injectChanges: true,
        proxy: "https://escala.com/",

        serveStatic: ["dist/styles"],
        files: "dist/styles/global.css",
        snippetOptions: {
            rule: {
                match: /<\/head>/i,
                fn: function (snippet, match) {
                    return '<link rel="stylesheet" type="text/css" href="/escalaEstilos.css"/>' + snippet + match;
                }
            }
        }

    });
});

// C:\xampp2\htdocs\escala\wp-content\themes\oceanwp-child\resources\assets\styles


gulp.task('sass', () => {
    return gulp.src('./resources/assets/styles/*.sass')
        .pipe(watch('./resources/assets/styles/**/*.sass'))
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(postcss([autoprefixer()]))
        .pipe(csso())
        .pipe(gulp.dest('./dist/styles'))
        .pipe(browserSync.stream());
});

gulp.task('sassGeneral', () => {
    return gulp.src('./resources/assets/styles/**/*.sass')
        .pipe(cached("sass_compile"))
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(postcss([autoprefixer()]))
        .pipe(csso())
        .pipe(gulp.dest('./dist/styles'))
        .pipe(browserSync.stream());
});

gulp.task('js', () => {
    return gulp.src('./resources/assets/scripts/**/*.js')
        .pipe(watch('./resources/assets/scripts/**/*.js'))
        .pipe(plumber(
            // {errorHandler: errorScripts},
            function (error) {
                console.log(error);
                this.emit('end');
            }
        ))
        .pipe(uglify())
        .pipe(gulp.dest('./dist/scripts/'))
        .pipe(browserSync.stream());
});



// gulp.task('compile-ts',  () => {
//     return gulp.src('./resources/assets/scripts/**/*.ts')
//         .pipe(project())
//         .pipe(gulp.dest('./dist/scripts/'))
//         .pipe(browserSync.stream());
// });

// gulp.task('build-gulp', function () {
//     gulp.watch('./resources/assets/scripts/**/*.ts', gulp.series(gulp.parallel('compile-ts')));
// })


// gulp.task('compile-init', gulp.series(gulp.parallel('sassGeneral', 'js', 'compile-ts' )));
gulp.task('compile-init', gulp.series(gulp.parallel('sassGeneral', 'js' )));
gulp.task('watch', () => {

  gulp.watch("./resources/assets/styles/**/*.sass", gulp.series('sassGeneral'));

//   gulp.watch("./resources/assets/scripts/**/*.ts", gulp.series('compile-ts'));

  gulp.watch("./resources/assets/scripts/**/*.js", gulp.series('js'));

});

gulp.task('local', gulp.series(gulp.parallel(
    'compile-init',
    'watch',
    'browserSync-Local'
)));

