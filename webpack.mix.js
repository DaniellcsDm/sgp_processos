const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js') 
   .sass('resources/sass/app.scss', 'public/css') 
   .css('resources/css/argon-dashboard.min.css', 'public/css')
   .css('resources/css/nucleo-icons.css', 'public/css')
   .css('resources/css/nucleo-svg.css', 'public/css')
    .js('resources/js/core/bootstrap.bundle.min.js','public/js')
    .js('resources/js/core/bootstrap.min.js','public/js')
    .js('resources/js/core/popper.min.js','public/js')
    .js('resources/js/argon-dashboard.min.js', 'public/js')
   .version();
   