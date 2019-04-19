var gulp = require('gulp'),
    browserSync = require("browser-sync").create(),
    less = require("gulp-less"),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    pug = require('gulp-pug'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    rename = require("gulp-rename");

gulp.task("server", ['less', 'pug', 'pic', 'fonts', 'js'], function () {
	browserSync.init({
		server: { baseDir: './dist/' }
	});
	gulp.watch('app/**/*.html').on('change', browserSync.reload);
    gulp.watch('app/less/**/*.less', ['less'] );
	gulp.watch('app/pug/**/*', ['pug'] );
	gulp.watch('app/img/**/*', ['pic'] );
	gulp.watch('app/img/**/*', ['fonts'] );
	gulp.watch('app/js/**/*', ['js'] );
});

gulp.task('less', function() {
    return gulp.src('./app/less/style.less')
      .pipe(plumber({
            errorHandler: notify.onError(function(err){
                  return {
                        title: 'Styles',
                        message: err.message
                  }
            })
      }))
      .pipe(less())
      .pipe(autoprefixer({
            browsers: ['last 4 versions'],
            cascade: false
      }))
      .pipe(cleanCSS())
      .pipe(gulp.dest('./dist/css/'))
      .pipe(browserSync.stream());
});

gulp.task('pug', function() {
    return gulp.src('./app/pug/*.pug')
      .pipe(plumber({
            errorHandler: notify.onError(function(err){
                  return {
                        title: 'Pug',
                        message: err.message
                  }
            })
      }))
      .pipe(pug({
            pretty: true
      }))
      .pipe(gulp.dest('./dist'))
      .pipe(browserSync.stream());
});

gulp.task('pic', function() {
    return gulp.src('./app/img/**/*')      
      .pipe(gulp.dest('./dist/img'))
      .pipe(browserSync.stream());
});

gulp.task('fonts', function() {
    return gulp.src('./app/fonts/**/*')      
      .pipe(gulp.dest('./dist/fonts'))
      .pipe(browserSync.stream());
});

gulp.task('js', function() {
    return gulp.src('./app/js/**/*')      
      .pipe(gulp.dest('./dist/js'))
      .pipe(browserSync.stream());
});

gulp.task('default', ['server']);