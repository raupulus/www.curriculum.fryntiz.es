/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2018 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 *
 * Web del autor: https://fryntiz.es
 */

let mix = require('laravel-mix');

mix.js('resources/assets/js/beforeload.js', 'public/js')
   .js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/scripts.js', 'public/js')
   .js('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


//mix.copy('node_modules/foo/bar.css', 'public/css/bar.css');
//mix.copyDirectory('assets/img', 'public/img');

// Deshabilitar Notificaciones
//mix.disableNotifications();

mix.browserSync({
    proxy: '127.0.0.1:8000',
})
