/*
------------------------------------------------
Menú Superior
------------------------------------------------
*/
var EstadoMenu = "false";
//Activar Menú superior
function activarMenuSuperior () {
	var menu = document.getElementById("ulMenuMINI");
	menu.style.display = "block";
	EstadoMenu = "true";
}
//Cerrar el Menú superior al pulsar fuera de este
function cerrarMenuSuperior () {
	var menu = document.getElementById("ulMenuMINI");
	if (EstadoMenu == "true") {
		menu.style.display = "none";
		EstadoMenu = "false";
	}
}
