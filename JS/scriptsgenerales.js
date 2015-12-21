//Array con las imágenes para pantallas grandes/alta resolución
var imagenesHeadHigh = new Array("./images/1024px/SlideHead1.jpg", "./images/1024px/SlideHead2.jpg", "./images/1024px/SlideHead3.jpg");
var longitudImagenesHeadHigh = imagenesHeadHigh.length;

//Array con las imágenes para pantallas pequeñas/baja resolución
var imagenesHeadSmall = new Array("./images/600px/SlideHead1.jpg", "./images/600px/SlideHead2.jpg", "./images/600px/SlideHead3.jpg");
var longitudImagenesHeadSmall = imagenesHeadSmall.length;

//Elegir tipo de imagen según tamaño de navegador
function selectSlide() {
	var tamañoPantalla = window.outerWidth;
	if (tamañoPantalla > 1024) {
		SlideAutomaticoHigh();
	} else {
		SlideAutomaticoSmall();
	}
	//alert(tamañoPantalla);
}
//Función para el cambio automático del Slide Show Alta resolución
var imagenHeadActual = "1";
function SlideAutomaticoHigh() {
	var imgHead = document.getElementById("imghead");
	if (imagenHeadActual == 3) {
				imagenHeadActual = 0;
			}
	imgHead.src = imagenesHeadHigh[imagenHeadActual];
	++imagenHeadActual;
	//alert("X tiene valor " + x + "Y tiene valor " + y);
}
//Función para el cambio automático del Slide Show Baja resolución
function SlideAutomaticoSmall() {
	var imgHead = document.getElementById("imghead");
	if (imagenHeadActual == 3) {
				imagenHeadActual = 0;
			}
	imgHead.src = imagenesHeadSmall[imagenHeadActual];
	++imagenHeadActual;
	//alert("X tiene valor " + x + "Y tiene valor " + y);
}

//Función para hacer pausa, al estilo "sleep" de otros lenguajes
function sleep(milliSeconds) {
	// Obtenemos la fecha en milisegundos desde 1/1/1970
	var startTime = new Date().getTime();
	// Hacemos un bucle hasta que la fecha actual sea superior a la fecha inicial mas los milisegundos indicados
	while (new Date().getTime() < startTime + milliSeconds);
}

//Sección lateral Derecha para Sitios Webs
var ArrayImaganesSitiosWebs = new Array("./images/webs/1.jpg", "./images/webs/2.jpg", "./images/webs/3.jpg");
var LongitudArrayImaganesSitiosWebs = ArrayImaganesSitiosWebs.length;
var slideWebActual = "0";
function slideWeb() {
	var imgWebs = document.getElementById("imgWebs");
	var descripcionImgWebs = document.getElementById("descripcionImgWebs");
	var cambioDescripcionImgWebs = new Array(
//Descripción 1
		"<H1>Página web 1</H1><BR/><P>Descripción de la página web 1</P>",
//Descripción 2
		"<H1>Página web 2</H1><BR/><P>Descripción de la página web 2</P>",
//Descripción 3
		"<H1>Página web 3</H1><BR/><P>Descripción de la página web 3</P>"
	);
	var sourcesSitiosWeb = document.getElementById("sourcesSitiosWeb");
	var cambioSourcesSitiosWeb = new Array(
	//Enlace 1
		"#",
	//Enlace 2
		"#",
	//Enlace 3
		"#"
	);

	if (slideWebActual == LongitudArrayImaganesSitiosWebs) {
				slideWebActual = 0;
			}
	imgWebs.src = ArrayImaganesSitiosWebs[slideWebActual];
	descripcionImgWebs.innerHTML = cambioDescripcionImgWebs[slideWebActual];
	sourcesSitiosWeb.href = cambioSourcesSitiosWeb[slideWebActual];
	++slideWebActual;
	//alert(cambioDescripcionImgWebs[slideWebActual]);
}
