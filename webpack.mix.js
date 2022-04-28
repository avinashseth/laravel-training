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

// mix.js('resources/js/app.js', 'public/js')
//     .vue()
//     .sass('resources/sass/app.scss', 'public/css');

// mix.sass('resources/css/app.sass', 'public/css/app.css');

// mix.css(['resources/css/1.css','resources/css/2.css','resources/css/3.css'], 'public/css/app.css');

mix.combine(['resources/css/1.css','resources/css/2.css','resources/css/3.css'], 'public/css/app.css');

// mix.minify(['resources/css/big.css'], 'public/css/app.css');