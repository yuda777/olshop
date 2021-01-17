var gulp = require('gulp');
var elixir = require('laravel-elixir');

  // import modul
var gulpMinifyCss = require('gulp-minify-css');
var gulpConcat = require('gulp-concat');
var gulpUglify = require('gulp-uglify');
var gulpHtmlmin = require('gulp-htmlmin');

// task untuk minify

gulp.task('minify-js', async function () {
    gulp
        .src([
            'resources/js/*.js',
            'public/js/app.js'
        ])
        .pipe(gulpConcat('bundle.js'))
        .pipe(gulpUglify())
        .pipe(gulp.dest('public/js'));
});
