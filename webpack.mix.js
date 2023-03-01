let mix = require('laravel-mix');

mix.css('resources/css/app.css', 'public/css').setPublicPath('public').
    js('resources/js/app.js', 'public/js');