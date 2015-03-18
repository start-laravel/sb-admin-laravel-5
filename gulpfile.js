var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    mix.copy('bower_components/jquery/dist/jquery.js', 'resources/js/jquery.js');
    mix.copy('bower_components/Chart.js/Chart.js', 'resources/js/Chart.js');
    mix.copy('bower_components/metisMenu/dist/metisMenu.js', 'resources/js/metisMenu.js');
    mix.copy('bower_components/bootstrap/dist/js/bootstrap.js', 'resources/js/bootstrap.js');
    mix.copy('bower_components/font-awesome/css/font-awesome.css', 'resources/css/font-awesome.css');
    mix.copy('bower_components/bootstrap/dist/css/bootstrap.css', 'resources/css/bootstrap.css');
    mix.copy('bower_components/bootstrap/dist/fonts', 'public/assets/fonts');
   	mix.copy('bower_components/font-awesome/fonts', 'public/assets/fonts');
   	mix.styles([
        "bootstrap.css",
        "font-awesome.css",
        "sb-admin-2.css",
        "timeline.css"
    ], 'public/assets/stylesheets/styles.css');
    mix.scripts([
        "jquery.js",
        "bootstrap.js",
        "Chart.js",
        "metisMenu.js",
        "sb-admin-2.js",
        "frontend.js"
    ], 'public/assets/scripts/frontend.js');
});


