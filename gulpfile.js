var gulp = require('gulp'),
	browserSync = require('browser-sync'),
	sass = require('gulp-sass'),
	csso = require('gulp-csso'),
	autoprefixer = require('gulp-autoprefixer'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	notify = require('gulp-notify'),
	gulpif = require('gulp-if'),
	useref = require('gulp-useref'),
	tiny = require('gulp-tinypng'),
	uncss = require('gulp-uncss'),
	wait = require('gulp-wait'),
	newer = require('gulp-newer');

// BUILD
gulp.task('tiny', function () {
	gulp.src(['img/*.jpg', 'img/*.png'])
		.pipe(newer('dist/img'))
		.pipe(tiny('eKJf273ZwggolXsloo3tDizmOiER9tgr'))
		.pipe(gulp.dest('img'));
});

// WORK
gulp.task('sass', function () {
	return gulp.src('sass/**/*.sass')
		.pipe(wait(500))
		.pipe(sass.sync())
		.on('error', notify.onError({
			message: "<%= error.message %>",
			title: "Sass Error!"
		}))
		.pipe(autoprefixer(['last 2 versions', '> 1%', 'ie 8'], {
			cascade: true
		}))
		.pipe(gulp.dest('css/'))
});

gulp.task('browser-sync', function () {
	browserSync({
		// server: {
		// 	baseDir: 'app'
		// },
		proxy: 'mobiclinic.com.ua',
		notify: false
	});
});

gulp.task('default', ['browser-sync', 'sass'], function () {
	gulp.watch('sass/*.sass', ['sass']);
	gulp.watch('js/**/*.js', browserSync.reload);
	gulp.watch('**/*.php', browserSync.reload);
	gulp.watch('css/*.css', browserSync.reload);
});