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
   .postCss('resources/css/main.css', 'public/css', [
        require('tailwindcss'),
   ]);

mix.scripts([
    'public/js/photoswipe/initialize.js',
    'public/js/kakao.min.js',
    'resources/js/map.js',
    'resources/js/main.js',
], 'public/js/all.js');

mix.copy('node_modules/photoswipe/dist/photoswipe.min.js', 'public/js/photoswipe/photoswipe.min.js');
mix.copy('node_modules/photoswipe/dist/photoswipe-ui-default.min.js', 'public/js/photoswipe/photoswipe-ui-default.min.js');
mix.copy('node_modules/photoswipe/dist/photoswipe.css', 'public/css/photoswipe/photoswipe.css');
mix.copy('node_modules/photoswipe/dist/default-skin/default-skin.css', 'public/css/photoswipe/default-skin.css');