const gulp 				  = require('gulp'),
			sass 				  = require('gulp-sass'),
			sourcemaps 		= require('gulp-sourcemaps'),
			autoprefixer  = require('gulp-autoprefixer'),
			changed 		  = require('gulp-changed'),
			browserSync   = require('browser-sync').create(),
			header 			  = require('gulp-header'),
			cleanCSS 		  = require('gulp-clean-css'),
			rename 			  = require("gulp-rename"),
			uglify 			  = require('gulp-uglify'),
			cache 			  = require('gulp-cache'),
			imagemin 		  = require('gulp-imagemin'),
			htmlreplace 	= require('gulp-html-replace'),
			del 				  = require('del'),
			runSequence   = require('run-sequence'),
			plumber 			= require('gulp-plumber'),
			pkg 				  = require('./package.json');

// Set the banner content
var banner = ['/**',
  ' * <%= pkg.name %> - <%= pkg.description %>',
  ' * @version v<%= pkg.version %>',
  ' * @link <%= pkg.homepage %>',
  ' * @license <%= pkg.license %>',
  ' */',
  ''].join('\n');

// Sass - Compile Sass files into CSS
gulp.task('sass', function () {
	return gulp.src('./app/sass/**/*.scss')
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(changed('./app/css/'))
		.pipe(sass({ outputStyle: 'expanded' }))
		.pipe(autoprefixer({
            browsers: ['last 2 versions'],
            // cascade: false // should Autoprefixer use Visual Cascade, if CSS is uncompressed. Default: true
        }))
		.pipe(header(banner, { pkg: pkg }))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./app/css/'))
});

// Minify compiled CSS
gulp.task('minify-css', ['sass'], function() {
	return gulp.src('./app/css/main.css')
		.pipe(cleanCSS({ compatibility: 'ie8' }))
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('./app/css'))
});

// Minify JS
gulp.task('minify-js', function() {
	return gulp.src('./app/js/main.js')
		.pipe(uglify())
		.pipe(header(banner, { pkg: pkg }))
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('./app/js'))
});

gulp.task('images', function(){
  return gulp.src('./app/img/**/*.+(png|jpg|gif|svg)')
  .pipe(cache(imagemin()))
  .pipe(gulp.dest('./dest/img'))
});

gulp.task('fonts', function() {
  return gulp.src('./app/fonts/**/*')
  .pipe(gulp.dest('./dest/fonts'))
});

gulp.task('clean:dest', function() {
  return del.sync('dest');
});

// Copy vendor libraries from /node_modules into /vendor
gulp.task('copy-vendor-libs', function() {
	gulp.src(['node_modules/bootstrap/dist/**/*', '!**/npm.js', '!**/bootstrap-theme.*', '!**/*.map'])
		.pipe(gulp.dest('./app/vendor/bootstrap'))

	gulp.src(['node_modules/jquery/dist/jquery.js', 'node_modules/jquery/dist/jquery.min.js'])
		.pipe(gulp.dest('./app/vendor/jquery'))

	gulp.src([
			'node_modules/font-awesome/**',
			'!node_modules/font-awesome/**/*.map',
			'!node_modules/font-awesome/.npmignore',
			'!node_modules/font-awesome/*.txt',
			'!node_modules/font-awesome/*.md',
			'!node_modules/font-awesome/*.json'
		])
		.pipe(gulp.dest('./app/vendor/font-awesome'))
});

gulp.task('copy-dest', function() {
	gulp.src('./app/css/**/*')
		.pipe(gulp.dest('./dest/css'))

	gulp.src(['./app/js/*.js', '!./app/js/main.js'])
		.pipe(gulp.dest('./dest/js'))

	gulp.src('./app/vendor/**/*')
		.pipe(gulp.dest('./dest/vendor'))

	gulp.src('./app/**/*.html')
		.pipe(htmlreplace({
        'css': 'css/main.min.css',
    }))
		.pipe(gulp.dest('./dest'))
});

// Build the production files in dest folder
gulp.task('default', function () {
	runSequence('clean:dest', ['sass', 'minify-css', 'minify-js', 'copy-vendor-libs'], 'copy-dest', 'images', 'fonts')
});

// Configure the browserSync task
gulp.task('browserSync', function() {
	browserSync.init({
		server: {
			baseDir: './app'
		},
	})
})

// Dev task with browserSync
gulp.task('dev', ['sass', 'minify-css', 'minify-js', 'browserSync'], function() {
	gulp.watch('./app/sass/**/*.scss', ['sass']).on('change', browserSync.reload);
	gulp.watch('./app/css/**/*.css', ['minify-css']).on('change', browserSync.reload);
	gulp.watch('./app/js/**/*.js', ['minify-js']).on('change', browserSync.reload);
	// Reloads the browser whenever HTML files change
	gulp.watch('./app/**/*.html').on('change', browserSync.reload);
});