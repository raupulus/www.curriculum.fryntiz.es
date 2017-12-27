/*
***********************
     MENÚ SUPERIOR
***********************
*/
var estadoMenu = false;

/**
 * Al pulsar sobre la barra superior muestra el menú
 */
function activarMenuSuperior () {
    var menu = document.getElementById('ulMenuMINI');
    menu.style.display = 'block';
    estadoMenu = true;
}

/**
 * Cuando se pulsa fuera del menú se cierra este
 */
function cerrarMenuSuperior () {
    var menu = document.getElementById("ulMenuMINI");
    if (estadoMenu == true) {
        menu.style.display = 'none';
        estadoMenu = false;
    }
}
