var gulp = require('gulp');
var bs = require('browser-sync').create();
var reload = bs.reload;
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var csslint = require('gulp-csslint');
var autoPrefixer = require('gulp-autoprefixer');
var cssComb = require('gulp-csscomb');
var cmq = require('gulp-merge-media-queries');
var cleanCss = require('gulp-clean-css');
var jshint = require('gulp-jshint');
var browserify = require('gulp-browserify');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var notify = require('gulp-notify');


let onError = function(err) {
    if(err) {
        gulp.task(watch)
        .pipe(wait(1000))
    }
	//gutil.beep()
	//gutil.log(gutil.colors.red("ERR ::"), err.toString())
	//this.emit("end")
	}
/* paths */
var scssSrc = 'src/scss/**/*.scss';
var cssDistPath = 'dist/css';
var jsSrc = 'src/js/**/*.js';
var jsDistPath = 'dist/js';
var htmlSrc = '*.php';
var syncPath = '/___greyWizard/index.php';

gulp.task('sync', function () {
    bs.init({
        //port: 8080,
        //open: 'extrernal',
        host: 'grey',
        proxy: 'grey'
    })
    bs.reload
});

gulp.task('sass', function () {
    return gulp.src([scssSrc])
        .pipe(plumber({
            handleError: onError
        }))
        .pipe(sass({
            errLogToConsole: true,
            outputStype: "compressed"
        }).on("error", sass.logError))
        .pipe(autoPrefixer({
            browsers: ["> 3%"],
            cascade: false
        }))
        .pipe(concat('main.css'))
        .pipe(gulp.dest(cssDistPath))
        // .pipe(cmq())
        // .pipe(cssComb())
        .pipe(cleanCss())
        .pipe(gulp.dest(cssDistPath))
        //.pipe(bs.stream())
        .pipe(notify('CSS Done!'))
});
gulp.task('js', function () {
    return gulp.src(['src/js/vendor/*.js', 'src/js/*.js'])
        .pipe(plumber({
            handleError: onError
        }))
        .pipe(concat('main.js'))
        //.pipe(jshint())
        //.pipe(jshint.reporter('default'))
        //.pipe(browserify())
        //.pipe(gulp.dest(jsDistPath))
        //.pipe(uglify())
        .pipe(gulp.dest(jsDistPath))
        //.pipe(bs.stream())
        .pipe(notify('JS Done!'))
});

// gulp.task('html', function () {
//     return gulp.src([htmlSrc])
//         .pipe(bs.stream())
//         .pipe(notify('HTML Done!'))
// });

gulp.task('default', ['js', 'sass']);

gulp.task('watch', function () {
    gulp.watch(jsSrc, ['js'])//.on('change', bs.reload);
    gulp.watch(scssSrc, ['sass'])//.on('change', bs.reload);
});