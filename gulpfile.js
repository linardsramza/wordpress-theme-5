var gulp  = require('gulp'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  cleanCss = require('gulp-clean-css'),
  rename = require('gulp-rename'),
  postcss = require('gulp-postcss'),
  combineMq = require('gulp-combine-mq');  
  autoprefixer = require('autoprefixer');

gulp.task('build-theme', function() {
  return gulp.src(['assets/scss/*.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(combineMq())
    .pipe(gulp.dest('assets/css/'))    
    .pipe(postcss([ autoprefixer({ browsers: [
      'Chrome >= 35',
      'Firefox >= 38',
      'Edge >= 12',
      'Explorer >= 10',
      'iOS >= 8',
      'Safari >= 8',
      'Android 2.3',
      'Android >= 4',
      'Opera >= 12']})]))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('assets/css/'))  
    .pipe(cleanCss())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('assets/css/'))
});

gulp.task('watch', ['build-theme'], function() {
  gulp.watch(['assets/scss/**/*.scss'], ['build-theme']);
});

gulp.task('default', ['build-theme'], function() {
});