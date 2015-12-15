var elixir = require('laravel-elixir');
//     gulp   = require('gulp'),
//     less   = require('gulp-less'),
//     concat = require('gulp-concat'),
//     insert = require('gulp-insert');
//     replace = require('gulp-replace');

// gulp.task('process-less', function(){
//   gulp.src(['src/less/_import.less'])
//     .pipe(less())
//     .pipe(concat('site.css'))
//     .pipe(gulp.dest('assets/css'));
// });

// gulp.task('process-scripts', function(){
//   gulp.src(['src/vendor/jquery/dist/jquery.min.js',
//             'src/vendor/bootstrap/dist/js/bootstrap.min.js',
//             'src/js/*.js'])
//     .pipe(concat('site.js'))
//     .pipe(gulp.dest('assets/js'))
// });

// gulp.task('watch', function(){
//   gulp.watch(['src/less/*.less',
//               'src/vendor/jquery/dist/jquery.min.js',
//               'src/vendor/bootstrap/dist/js/bootstrap.min.js',
//               'src/js/*.js'],
//               ['process-less'])
// });


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('_import.less', 'public/assets/css/site.css');
});
