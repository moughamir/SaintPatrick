'use strict';

// functions variables
var gulp = require('gulp'),
    watch = require('gulp-watch'),
    sass = require('gulp-sass'),
    ngmin = require('gulp-ngmin'),
    minify = require('gulp-minify'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    sassdoc = require('sassdoc'),
    htmlmin = require('gulp-htmlmin');


// path and options
var sourcec = 'src/sass/**/*.scss',
    sourcej = 'src/js/',
    dist = "assets/",
    sassOptions = {
      errLogToConsole: true,
      outputStyle: 'compressed'
    },
    autoprefixerOptions = {
      browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
    },
    sassdocopt = {
    verbose: true,
    display: {
      access: ['public', 'private'],
      alias: true,
      watermark: true,
    },
    groups: {
      'undefined': 'Ungrouped',
      foo: 'Foo group',
      bar: 'Bar group',
    },
  };

// default task
gulp.task('default', function () {
  gulp.watch(sourcec, ['sass'])
  .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
  });
});

// sass

gulp.task('sass', function () {
  return gulp
    .src(sourcec)
    .pipe(sourcemaps.init())
    .pipe(sass.sync(sassOptions).on('error', sass.logError))
    //.pipe(sourcemaps.write(dist + 'maps/'))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest(dist + 'css/'));
});



// sass doc

gulp.task('sassdoc', function () {
  return gulp
    .src(sourcec)
    .pipe(sassdoc(sassdocopt))
    // Release the pressure back and trigger flowing mode (drain)
    // See: http://sassdoc.com/gulp/#drain-event
    .resume();
});

//ngmin
gulp.task('ngmin', function () {
	return gulp.src(sourcej + 'app.js')
		.pipe(ngmin({dynamic: true}))
		.pipe(gulp.dest('assets/js/'));
});

// compress
gulp.task('compress', function() {
  gulp.src(sourcej + '*.js')
    .pipe(minify({
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-ngmin.js']
    }))
    .pipe(gulp.dest(dist + "js"))
});


gulp.task('minify', function() {
  return gulp.src('*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('dist'))
});