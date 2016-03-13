// Include gulp
var gulp = require('gulp');

// Include the Plugins
var sass = require('gulp-sass');
var bourbon = require('node-bourbon');
var neat = require('node-neat');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;

gulp.task('browser-sync', function() {
  //initialize browsersync
  browserSync.init({
  //browsersync with a php server
  proxy: "lara.dev",
  notify: false
  });
});

//Move Images
gulp.task('images', function() {
  gulp.src(['assets/img/*.*'])
    .pipe(gulp.dest('build/img/'))
    .pipe(browserSync.reload({stream:true}));
});

//Move Fonts
gulp.task('fonts', function() {
  gulp.src(['assets/fonts/*.*'])
    .pipe(gulp.dest('build/fonts/'))
    .pipe(browserSync.reload({stream:true}));
});

//Move Vendor JS
gulp.task('vendor', function() {
  gulp.src(['assets/js/vendor/*.*'])
    .pipe(gulp.dest('build/js/vendor'))
    .pipe(browserSync.reload({stream:true}));
});

// Compile Sass & Minify CSS
gulp.task('sass', function() {
  gulp.src(['assets/scss/style.scss'])
    .pipe(sass({
        includePaths: require('node-neat').includePaths
     }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(minifycss())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('build/css/'))
    .pipe(browserSync.reload({stream:true}));
});

// Uglify JS
gulp.task('js', function() {
  gulp.src(['assets/js/scripts/*.js'])
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('build/js/'))
    .pipe(browserSync.reload({stream:true}));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/img/*.*', ['images'])
    gulp.watch('assets/fonts/*.*', ['fonts'])
    gulp.watch('assets/scss/*/*.scss', ['sass'])
    gulp.watch('assets/js/scripts/*.js', ['js'])
    gulp.watch('.php').on('change', reload);
});

// Default Task
gulp.task('default', ['sass','js','images','fonts','vendor','browser-sync', 'watch']);
