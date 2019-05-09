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

/*mix.scripts([

    'resources/assets/js/popper.js',
    'resources/assets/js/bootstrap.js',
    ],'public/js/app.js').version()
*/
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');


/*

let mix = require('laravel-mix');
*/
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
 /*
mix.scripts([
    'resources/assets/js/jquery.js',
    'resources/assets/js/popper.js',
    'resources/assets/js/bootstrap.js',
    ],'public/js/app.js').version();
mix.sass('resources/sass/app.scss', 'public/css').version();

*/