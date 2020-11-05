const { gulp, src, dest, watch, series, parallel } = require('gulp'),
	env = require('node-env-file'),
	plumber = require("gulp-plumber"),
	sass = require('gulp-sass'),
	cleancss = require('gulp-clean-css'),
	autoprefixer = require('gulp-autoprefixer'),
	wait = require('gulp-wait'),
	notify = require('gulp-notify');

env('.env');

const paths = {
	"url": "localhost:" + process.env.PORT_NUM,
	"css": "./src/wp-content/themes/" + process.env.THEME_NAME + "/assets/css/",
	"scss": "./src/wp-content/themes/" + process.env.THEME_NAME + "/assets/scss/**/*.scss"
}

//Sass
// gulp.task('sass', function () {
function scssTask(){
	return src(paths.scss)
		.pipe(plumber())
		.pipe(wait(500))
		.pipe(sass({ outputStyle: 'expanded' }))
		.pipe(cleancss({ debug: true }, function (details) {
			console.log(details.name + ': ' + details.stats.originalSize + ' > ' + + details.stats.minifiedSize);
		}))
		.pipe(autoprefixer({
			browsers: ["last 2 versions", "ie >= 9", "Android >= 4", "ios_saf >= 8"],
			cascade: false
		}))
		.pipe(dest(paths.css))
		.pipe(notify("Sass Compile Success!"));
}
// });


// gulp.task('default', ['sass'], function () {
function watchTask() {
	watch([paths.scss], parallel(scssTask));  
	// watch(paths.scss, ['sass']);
}
// });

exports.default = series(
    parallel(scssTask), 
    watchTask
);
