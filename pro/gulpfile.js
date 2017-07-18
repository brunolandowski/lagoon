var gulp = require('gulp');
var plumber = require('gulp-plumber');
var watch = require('gulp-watch');
var less = require('gulp-less');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('less', function() {
    return gulp.src('static/less/*.less')
        .pipe(plumber())
        .pipe(less())
        .pipe(gulp.dest('static/css'))
        .pipe(reload({stream: true}));
});

gulp.task('browser-sync', function(){
  browserSync.init({
    proxy: 'http://localhost:8888/lagoon---integration-master/pro/',
    port: '5000'
  });
});


// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('static/less/*.less', ['less']);
});

// Default Task
gulp.task('default', ['less', 'watch', 'browser-sync']);