/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

/**
 * Actualizar contenido según página actual
 * @param  {[type]} seleccion        [description]
 * @param  {[type]} cargarBiblioteca [description]
 */
function rotar(seleccion, cargarBiblioteca) {
    $(document).ready(function() {
                $(seleccion).click(function(){
                    $('#contenidoweb').load(cargarBiblioteca);
                });
        });
}

/**
 * Cambiar id de "BODY" al pulsar menú principal
 * @param  {[type]} x [description]
 */
function cambiarIdBody(x) {
    var selectorBody = document.body;

    if (x == 'paginicio') {
        selectorBody.id = 'paginicio';
    } else if (x == 'pagcv') {
        selectorBody.id = 'pagcv';
    } else if (x == 'pagcvext') {
        selectorBody.id = 'pagcvext';
    } else if (x == 'pagdescargas') {
        selectorBody.id = 'pagdescargas';
    } else if (x == 'pagcontacto') {
        selectorBody.id = 'pagcontacto';
    } else if (x == 'pagmasinfo') {
        selectorBody.id = 'pagmasinfo';
    }
    cerrarMenuSuperior(); // Ejecuta función para cerrar el menú superior
}
