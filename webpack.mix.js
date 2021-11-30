const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .alias({ '@': 'resources/js' })
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ]);
