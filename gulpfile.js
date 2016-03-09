'use strict';

// functions variables
var gulp = require('gulp'),
    watch = require('gulp-watch'),
    sass = require('gulp-sass'),
    ngmin = require('gulp-ngmin'),
    minify = require('gulp-minify'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    sassdoc = require('sassdoc');


// path and options
var sourcec = 'src/sass/**/*.scss',
    sourcej = 'src/js/**/*.js',
    dist = "assets/",
    sassOptions = {
      errLogToConsole: true,
      outputStyle: 'compressed'
    },
    autoprefixerOptions = {
      browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
    };

// default task
gulp.task('default', ['sass', 'sass:watch' /*, possible other tasks... */]);
// sass

gulp.task('sass', function () {
  return gulp
    .src(sourcec)
    .pipe(sourcemaps.init())
    .pipe(sass.sync(sassOptions).on('error', sass.logError))
    //.pipe(sourcemaps.write(dist + 'maps/'))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest(dist + 'css/'))
    .pipe(sassdoc())
    // Release the pressure back and trigger flowing mode (drain)
    // See: http://sassdoc.com/gulp/#drain-event
    .resume();
});

gulp.task('sass:watch', function () {
  gulp.watch(sourcec, ['sass'])
  .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
  });
});


//ngmin
gulp.task('default', function () {
	return gulp.src('src/app.js')
		.pipe(ngmin({dynamic: true}))
		.pipe(gulp.dest('assets/js/'));
});
//watch
gulp.task('stream', function () {
    return gulp.src('css/**/*.css')
        .pipe(watch('css/**/*.css'))
        .pipe(gulp.dest('build'));
});

gulp.task('callback', function (cb) {
    watch('css/**/*.css', function () {
        gulp.src('css/**/*.css')
            .pipe(watch('css/**/*.css'))
            .on('end', cb);
    });
});

// compress
gulp.task('compress', function() {
  gulp.src('lib/*.js')
    .pipe(minify({
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    .pipe(gulp.dest('dist'))
});