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
    .sass('resources/sass/app.scss', 'public/css')
    .sass('public/assets/scss/_footer.scss', 'public/css')
    .sass('public/assets/scss/_general.scss', 'public/css')
    .sass('public/assets/scss/_header.scss', 'public/css')
    .sass('public/assets/scss/_hero.scss', 'public/css')
    .sass('public/assets/scss/_nav.scss', 'public/css')
    .sass('public/assets/scss/_sections.scss', 'public/css')
    .sass('public/assets/scss/_variables.scss', 'public/css')
    .sass('public/assets/scss/_style.scss', 'public/css');
