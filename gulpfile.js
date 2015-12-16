var elixir = require('laravel-elixir');

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

    mix.scripts(['../vendor/jquery/dist/jquery.min.js',
                 '../vendor/bootstrap/dist/js/bootstrap.min.js'],
                 'public/assets/js/site.js');
});
