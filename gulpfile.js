var gulp 					= require('gulp');
var sass 				  = require('gulp-sass');
var	sourcemaps 		= require('gulp-sourcemaps');
var	autoprefixer  = require('gulp-autoprefixer');
var	changed 		  = require('gulp-changed');
var	browserSync   = require('browser-sync').create();
var	header 			  = require('gulp-header');
var	cleanCSS 		  = require('gulp-clean-css');
var	rename 			  = require("gulp-rename");
var	uglify 			  = require('gulp-uglify');
var concat        = require('gulp-concat');
var	cache 			  = require('gulp-cache');
var	imagemin 		  = require('gulp-imagemin');
var	htmlreplace 	= require('gulp-html-replace');
var	del 				  = require('del');
var	runSequence   = require('run-sequence');
var	plumber 			= require('gulp-plumber');
var	pkg 				  = require('./package.json');

// Set the banner content
var banner = ['/**',
		  ' * <%= pkg.name %> - <%= pkg.description %>',
		  ' * @version v<%= pkg.version %>',
		  ' * @link <%= pkg.homepage %>',
		  ' * @license <%= pkg.license %>',
		  ' */',
		  ''].join('\n');

var app = 'app/',
		prod = 'prod/';

var paths = {
	html: {
		staging: app + '**/*.php',
		production: prod
	},
  includes: {
    staging: app + 'includes/**/*',
    production: prod + 'includes/'
  },
  sass: {
    src: app + 'sass/**/*.scss',
    staging: app + 'css/',
    production: prod + 'css/'
  },
  js: {
    src: app + 'js/**/*.js',
    staging: app + 'js/',
    production: prod + 'js/'
  },
  images: {
  	src: app + 'img/**/*.+(png|jpg|jpeg|gif|svg)',
  	production: prod + 'img/'
  },
  fonts: {
  	src: app + 'fonts/**/*',
  	production: prod + 'fonts/'
  },
  vendor: {
  	bootstrap: {
  		src: ['node_modules/bootstrap/dist/**/*',
  					'!**/npm.js',
  					'!**/bootstrap-theme.*',
  					'!**/*.map'],
  		staging: app + 'vendor/bootstrap/'
  	},
  	jquery: {
  		src: ['node_modules/jquery/dist/jquery.js',
  					'node_modules/jquery/dist/jquery.min.js'
  				],
  		staging: app + 'vendor/jquery/'
  	},
  	fontawesome: {
  		src: [
						'node_modules/font-awesome/**',
						'!node_modules/font-awesome/**/*.map',
						'!node_modules/font-awesome/.npmignore',
						'!node_modules/font-awesome/*.txt',
						'!node_modules/font-awesome/*.md',
						'!node_modules/font-awesome/*.json'
					],
  		staging: app + 'vendor/font-awesome/'
  	},
  	staging: app + 'vendor/**/*',
  	production: prod + 'vendor/'
  }
};

gulp.task('clean', function() {
  return del([ 'prod' ]);
});

/*
 * Define our tasks using plain functions
 */

// Sass - Compile Sass files into CSS
gulp.task('sass', function() {
  return gulp.src(paths.sass.src)
  	.pipe(plumber())
  	.pipe(sourcemaps.init())
  	.pipe(changed(paths.sass.staging))
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        // cascade: false // should Autoprefixer use Visual Cascade, if CSS is uncompressed. Default: true
    }))
    .pipe(header(banner, { pkg: pkg }))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.sass.staging));
});

// Minify compiled CSS
gulp.task('minifyCss', ['sass'], function() {
	return gulp.src(paths.sass.staging + 'main.css')
		.pipe(cleanCSS({ compatibility: 'ie8' }))
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest(paths.sass.staging));
});

// Minify JS
gulp.task('minifyJs', function() {
  return gulp.src([paths.js.src, '!app/js/main.min.js'])
    .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(header(banner, { pkg: pkg }))
    .pipe(gulp.dest(paths.js.staging));
});

// Optimize Images
gulp.task('images', function() {
  return gulp.src(paths.images.src)
    .pipe(cache(imagemin()))
    .pipe(gulp.dest(paths.images.production));
});

// Copy fonts to production (dest) folder
gulp.task('fonts', function() {
	return gulp.src(paths.fonts.src)
  .pipe(gulp.dest(paths.fonts.production));
});

// Copying vendor libraries from /node_modules into /vendor
gulp.task('copy', function() {
	gulp.src(paths.vendor.bootstrap.src)
		.pipe(gulp.dest(paths.vendor.bootstrap.staging));

	gulp.src(paths.vendor.jquery.src)
		.pipe(gulp.dest(paths.vendor.jquery.staging));

	gulp.src(paths.vendor.fontawesome.src)
		.pipe(gulp.dest(paths.vendor.fontawesome.staging));
});

// Copying all the files from app to prod
gulp.task('buildProduction', function() {
	gulp.src(paths.sass.staging + '**/*')
		.pipe(gulp.dest(paths.sass.production));

	gulp.src(paths.js.staging + 'main.min.js')
		.pipe(gulp.dest(paths.js.production));

	gulp.src(paths.vendor.staging)
		.pipe(gulp.dest(paths.vendor.production));

	gulp.src(paths.html.staging)
		.pipe(htmlreplace({
        'css': 'css/main.min.css',
        'js': 'js/main.min.js'
    }))
		.pipe(gulp.dest(paths.html.production));
});

// Configure the browserSync task
gulp.task('browserSync', function() {
	browserSync.init({
    proxy: 'localhost/cloudpeaklaw/app',
    port: 8080
	})
});

// Dev task with browserSync
gulp.task('dev', ['sass', 'browserSync'], function() {
  gulp.watch(paths.sass.src, ['sass']).on('change', browserSync.reload);
  gulp.watch(paths.js.src).on('change', browserSync.reload);
  gulp.watch(paths.html.staging).on('change', browserSync.reload);
});


// * Define default task that can be called by just running `gulp` from cli
gulp.task('default', function() {
	runSequence('clean', ['sass', 'minifyCss', 'minifyJs', 'copy'], 'images', 'fonts', 'buildProduction');
});