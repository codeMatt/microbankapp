// webpack.mix.js

const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
    .vue({
        version: 3,
    })
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        tailwindcss('tailwind.config.js')
    ]);
