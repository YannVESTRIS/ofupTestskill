const gulp = require("gulp");
const sass = require("gulp-sass");
const concat = require("gulp-concat");
const prefix = require("gulp-autoprefixer");
const notify = require("gulp-notify");
const connect = require("gulp-connect-php");
const browserSync = require("browser-sync").create();

sass.compiler = require("sass");

gulp.task("sass", done => {
	gulp
		.src("src/scss/**/*.scss")
		.pipe(sass())
		.pipe(prefix("last 2 versions"))
		.pipe(concat("style.css"))
		.pipe(gulp.dest("./"))
		.pipe(notify("SCSS compiled !"));
	done();
});

const reload = done => {
	browserSync.reload();
	done();
};

gulp.task("browser-sync", done => {
	connect.server({}, () => {
		browserSync.init({
			proxy: "http://localhost/ofup2020",
			open: false
		});
	});
	gulp.watch("**/*.php", reload);
	gulp.watch("inc/**/*.html", reload);
	gulp.watch("src/scss/**/*.scss", reload);
	done();
});

gulp.task(
	"watch",
	gulp.series("sass", "browser-sync", done => {
		gulp.watch("src/scss/**/*.scss", gulp.series("sass"));
		done();
	})
);
