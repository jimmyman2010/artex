var gulp = require('gulp');
var compass = require('gulp-compass');
var minifyCss = require('gulp-minify-css');

gulp.task('default', ['watch', 'compass']);

gulp.task('compass', function() {
    gulp.src('./sass/*.scss')
        .pipe(compass({
            css: 'source/wp-content/themes/artex/css/dev',
            sass: 'sass'
        }))
        .pipe(minifyCss())
        .pipe(gulp.dest('source/wp-content/themes/artex/css'));
});

// Rerun the task when a file changes
gulp.task('watch', function() {
    gulp.watch(['./sass/*.scss'], ['compass']);
});