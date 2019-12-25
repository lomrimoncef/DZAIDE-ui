const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');



mix.styles([
    'public/mdb-pro_4.8.10/css/bootstrap.min.css',
    'public/css/style.css',
    'public/css/responsive/responsive.css',
    'public/mdb-pro_4.8.10/css/mdb.min.css',
    'public/css/menu.css'


], 'public/css/all.css');