const Gulp = require('gulp');
const Sass = require('gulp-sass');
const PostCSS = require('gulp-postcss');
const CSSNext = require('postcss-cssnext');
const CleanCSS = require('gulp-clean-css');
const Concat = require('gulp-concat');
// const Purify = require('gulp-purifycss');
//const Pug = require('gulp-pug');
const BrowserSync = require('browser-sync').create();

Gulp.task('sass', () => Gulp.src('./styles_src/**/*.scss')
  .pipe(Sass().on('error', Sass.logError))
  .pipe(PostCSS([ CSSNext() ]))
  .pipe(Concat('main.css'))
  // .pipe(Purify(['./public/**/*.html'], { info: true, rejected: true }))
  .pipe(CleanCSS({ compatibility: 'ie10' }))
  .pipe(Gulp.dest('./styles'))
  .pipe(BrowserSync.stream())
);

// Gulp.task('views', function buildHTML() {
//   return Gulp.src('./src/components/05_pages/**/*.pug')
//     .pipe(Pug())
//     .pipe(Gulp.dest('./public'))
// });

Gulp.task('browser-sync', () => BrowserSync.init({
  proxy: 'http://localhost:8888/omdepex/'
}));

Gulp.task('noop', () => {});

Gulp.task('default', ['sass', 'browser-sync'], () => {
  Gulp.watch('./styles_src/**/*.scss', ['sass']);
  Gulp.watch('./**/*.php', ['noop']).on('change', BrowserSync.reload);
});
