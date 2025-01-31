const gulp = require("gulp");
const browserSync = require("browser-sync").create();
const sass = require("gulp-sass");
sass.compiler = require("sass");
const concat = require("gulp-concat");
const prefix = require("gulp-autoprefixer");
const notify = require("gulp-notify");
const connect = require("gulp-connect-php");

gulp.task("sass", done => {
	gulp
		.src("src/scss/**/*.scss")
		.pipe(sass())
		.pipe(prefix("last 2 versions"))
		.pipe(concat("style.css"))
		.pipe(gulp.dest("./"))
		.pipe(browserSync.stream())
		.pipe(notify("SCSS compiled !"));
	done();
});

gulp.task("browser-sync", done => {
	connect.server({}, () => {
		browserSync.init({
			proxy: "http://localhost/ofup2020",
			open: false
		});
	});
	gulp.watch("src/scss/**/*.scss", gulp.series("sass"));
	gulp.watch("*.php").on("change", browserSync.reload);
	gulp.watch("**/*.php").on("change", browserSync.reload);
	gulp.watch("inc/**/*.html").on("change", browserSync.reload);
	gulp.watch("src/scss/**/*.scss").on("change", browserSync.reload);
	done();
});

gulp.task("serve", gulp.series("sass", "browser-sync"));
