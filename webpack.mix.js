let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 */

mix
    .sourceMaps()
    .autoload({
        jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"],
        'popper.js/dist/umd/popper.js': ['Popper']
    })
    .js('src/js/app.js', 'assets/js/app.js')
    .sass('src/scss/app.scss', 'assets/css/app.css')
    .setPublicPath('public');