// REQUIRE GULP
var gulp = require('gulp');

// REQUIRING GULP PLUGINS
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var useref = require('gulp-useref');
// var cssnano = require('gulp-cssnano');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');
var runSequence = require('run-sequence');
var autoprefixer = require('gulp-autoprefixer');


// GULP WATCH
gulp.task('watch', ['browserSync'], function(){
  gulp.watch('./dev-scss/**/*.sass', ['sass']);
  gulp.watch('./dev-js/**/*.js', browserSync.reload);
  gulp.watch('./index.php', browserSync.reload);
  gulp.watch('./**/*.php', browserSync.reload);
});

// GULP DEFAULT
gulp.task('default', function (callback) {
  runSequence(['browserSync', 'sass', 'watch'],
    callback
  );
});

// GULP BUILD
gulp.task('build', function (callback) {
  runSequence('clean:dist',
    ['sass', 'useref', 'img', 'fonts'],
    callback
  );
});

// GULP TASKS
//  img optimizer
gulp.task('img', function(){
  return gulp.src('/dev-images/**/*.+(png|jpg|jpeg|gif|svg)')
  .pipe(cache(imagemin({interlaced: true})))
  .pipe(gulp.dest('/images/'));
});

// sass compiling
gulp.task('sass', function(){
  return gulp.src('./dev-scss/style.scss')
    .pipe(sass())
    .pipe(autoprefixer({
			   browsers: ['last 20 versions'],
			   cascade: false
		  }))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.reload({stream: true}));
});

// GULP SECOND LEVEL TASK
// coping fonts to dist
gulp.task('fonts', function() {
  return gulp.src('/dev-fonts/**/*')
    .pipe(gulp.dest('/fonts'));
});

// browser-sync
gulp.task('browserSync', function() {
  browserSync.init(null, {
      proxy: 'http://localhost:8888/wordlift-web'
  });
});

// useref
gulp.task('useref', function(){
  return gulp.src('*.html')
    .pipe(useref())
    .pipe(gulpIf('*.js', uglify()))
    .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('./'));
});

// cleaning dist
gulp.task('clean:dist', function() {
  return del.sync('dist');
});
