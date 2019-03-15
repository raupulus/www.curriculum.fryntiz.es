/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2018 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 *
 * Web del autor: https://fryntiz.es
 */

const mix = require('laravel-mix');

mix.js('resources/assets/js/beforeload.js', 'public/js')
   .js('resources/assets/js/afterload.js', 'public/js')
   .js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/header.js', 'public/js')
   .js('resources/assets/js/footer.js', 'public/js')
   .js('resources/assets/js/functions.js', 'public/js')
   .js('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 'public/js')
   .js('node_modules/desandro-matches-selector/matches-selector.js', 'public/js')
   .js('node_modules/ev-emitter/ev-emitter.js', 'public/js')
   .js('node_modules/fizzy-ui-utils/utils.js', 'public/js')
   .js('node_modules/flexslider/jquery.flexslider.js', 'public/js')
   .js('node_modules/get-size/get-size.js', 'public/js')
   .js('node_modules/images-loaded/dist/index.js', 'public/js/images-loaded.js')
   .js('node_modules/images-loaded/dist/index.es.js', 'public/js/images-loaded.es.js')
   .js('node_modules/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js', 'public/js')
   .js('node_modules/magnific-popup/dist/jquery.magnific-popup.js', 'public/js')
   .js('node_modules/owl-carousel/owl-carousel/owl.carousel.js', 'public/js')
   .js('node_modules/jquery.simple-text-rotator/jquery.simple-text-rotator.js', 'public/js')
   .js('node_modules/skrollr/dist/skrollr.min.js', 'public/js')
   .js('node_modules/outlayer/outlayer.js', 'public/js')
   .js('node_modules/outlayer/item.js', 'public/js/outlayer-item.js')
    .js('node_modules/masonry.js/masonry.js', 'public/js')
   .js('node_modules/wowjs/dist/wow.js', 'public/js')
   .js('node_modules/prettify/prettify.js', 'public/js')
   .js('node_modules/smoothscroll-for-websites/SmoothScroll.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .autoload({
        jQuery: 'jquery',
        $: 'jquery',
        jquery: 'jquery',
        Popper: 'popper.js'
    });

/*
mix.js('resources/assets/js/beforeload.js', 'public/js')
.webpackConfig({
    plugins:[
        new webpack.ProvidePlugin({
            $:'jquery',
            jQuery:'jquery',
            'window.jQuery':'jquery',
            Popper:'popper.js'
        })
    ]
});
*/


//mix.copy('node_modules/foo/bar.css', 'public/css/bar.css');
//mix.copyDirectory('assets/img', 'public/img');

// Deshabilitar Notificaciones
//mix.disableNotifications();

/* Activar Browser Sync para depurar y sincronizar Navegadores/Equipos */
mix.browserSync({
    proxy: '127.0.0.1:8000'
});
