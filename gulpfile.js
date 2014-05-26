// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var minifyCSS = require('gulp-minify-css');
var livereload = require('gulp-livereload');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// Concatenate & Minify JS
gulp.task('scripts', function() {
  gulp.src('src/js/**/*.js')
	.pipe(concat('all.js'))
	.pipe(gulp.dest('js'))
	.pipe(rename('all.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('js'))
	.pipe(livereload());
});

//Concatenate & Minify css
gulp.task('minify-css', function() {
  gulp.src('src/css/**/*.css')
	.pipe(concat('style.css'))
	.pipe(gulp.dest('css'))
	.pipe(rename('style.min.css'))
    .pipe(minifyCSS(opts))
    .pipe(gulp.dest('css'))
	.pipe(livereload());
});

//Run 
gulp.task('livereload', function() {
  gulp.src('./')
	.pipe(livereload());
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('src/js/**/*.js', ['scripts']);
	gulp.watch('src/css/**/*.css', ['minify-css']);
	gulp.watch('./**/*.php', ['livereload']);
});

// Default Task
gulp.task('default', ['scripts', 'minify-css', 'livereload', 'watch']);