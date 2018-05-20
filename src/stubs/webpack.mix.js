const mix = require('laravel-mix')

require('laravel-mix-tailwind')
require('laravel-mix-purgecss')

mix.js('resources/assets/js/app.js', 'js')
    .sass('resources/assets/sass/app.sass', 'css')
    .tailwind()
    .purgeCss()
