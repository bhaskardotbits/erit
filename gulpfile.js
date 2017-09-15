const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {
    mix
    .sass('app.scss')

    .webpack('app.js')

    .copy(
        'font-awesome',
        'public/font-awesome')

    .copy(
        'fonts',
        'public/fonts')

    .copy(
        'images',
        'public/images')

    .styles([
        'style.css',
        'animate.css',
        'colors.css'
    ], 'public/css/style.css');

});
