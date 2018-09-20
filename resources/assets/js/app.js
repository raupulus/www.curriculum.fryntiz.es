/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2018 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 *
 * Web del autor: https://fryntiz.es
 */

require('./bootstrap');
window.Vue = require('vue');

/* Instancia aplicación Vue */
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
