const mix = require('laravel-mix');
const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin')

module.exports = {
        plugins: [
            new VuetifyLoaderPlugin()
        ],
    }
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
    .sass('resources/sass/main.scss', 'public/assets/css/main.css')
    .sass('resources/sass/main_profile.scss', 'public/assets/css/main_profile.css')
    .js('resources/js/updateScore.js', 'public/js');