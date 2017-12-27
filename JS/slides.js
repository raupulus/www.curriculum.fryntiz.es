/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

/*
***********************
    Slide Superior
***********************
*/
// Array con las imágenes para pantallas grandes/alta resolución
var imagenesHeadHigh = new Array('./images/1024px/SlideHead1.jpg', './images/1024px/SlideHead2.jpg', './images/1024px/SlideHead3.jpg');
var longitudImagenesHeadHigh = imagenesHeadHigh.length;
//Array con las imágenes para pantallas pequeñas/baja resolución
var imagenesHeadSmall = new Array('./images/600px/SlideHead1.jpg', './images/600px/SlideHead2.jpg', './images/600px/SlideHead3.jpg');
var longitudImagenesHeadSmall = imagenesHeadSmall.length;

/**
 * Elegir tipo de imagen según tamaño de navegador
 */
function selectSlide() {
    var tamañoPantalla = window.outerWidth;
    if (tamañoPantalla > 1000) {
        SlideAutomaticoHigh();
    } else {
        SlideAutomaticoSmall();
    }
}

/**
 * Función para el cambio automático del Slide Show Alta resolución
 * @type {String}
 */
var imagenHeadActual = '1';
function SlideAutomaticoHigh() {
    var imgHead = document.getElementById('imghead');
    if (imagenHeadActual == 3) {
        imagenHeadActual = 0;
    }
    //setTimeout(imgHead.style.opacity = "0.3", 1000);
    imgHead.src = imagenesHeadHigh[imagenHeadActual];
    //setTimeout(imgHead.style.opacity = "0.1", 1000);
    ++imagenHeadActual;
}

/**
 * Función para el cambio automático del Slide Show Baja resolución
 */
function SlideAutomaticoSmall() {
    var imgHead = document.getElementById('imghead');
    if (imagenHeadActual == 3) {
        imagenHeadActual = 0;
    }
    imgHead.src = imagenesHeadSmall[imagenHeadActual];
    ++imagenHeadActual;
}

/**
 * Función para hacer pausa, al estilo "sleep" de otros lenguajes
 * @param  {[type]} milliSeconds [description]
 */
function sleep(milliSeconds) {
    // Obtenemos la fecha en milisegundos desde 1/1/1970
    var startTime = new Date().getTime();
    // Hacemos un bucle hasta que la fecha actual sea superior a la fecha inicial mas los milisegundos indicados
    while (new Date().getTime() < startTime + milliSeconds);
}

/*
***********************
    Slide Lateral
***********************
*/
var ArrayImaganesSitiosWebs = new Array('./images/webs/1.jpg', './images/webs/2.jpg', './images/webs/3.jpg');
var LongitudArrayImaganesSitiosWebs = ArrayImaganesSitiosWebs.length;
var slideWebActual = '0';
var ratonEncima = 'false';  // Añadiendo que al pasar el ratón se pause
function slideWeb() {
    var imgWebs = document.getElementById('imgWebs');
    var descripcionImgWebs = document.getElementById('descripcionImgWebs');
    var cambioDescripcionImgWebs = new Array(
// Descripción 1
        '<h1>www.laguialinux.es</h1><br /><p>Sitio WEB creado por mi donde también colaboro en la creación de contenido (entradas y vídeos) para reflejar temas que vamos aprendiendo y que sean accesibles y de provecho para otras personas que le surgan el mismo problema.</p>',
// Descripción 2
        '<h1>www.nzweb.org</h1><br /><p>Portal web donde centro todos los sitios webs que estoy creando, están en desarrollo o son proyectos en prueba que aún están tomando forma. También concentro algunas plantillas o enlaces hacia dominios una vez ya tomada forma.</p>',
// Descripción 3
        '<h1>www.desdechipiona.nzweb.org</h1><br /><p>Galería fotográfica con imágenes de Chipiona ordenadas por categorías y zonas. Donde soy el creador de la galería fotográfica y además el autor de todas las imágenes que se muestran en ella.</p>'
    );
    var sourcesSitiosWeb = document.getElementById('sourcesSitiosWeb');
    var cambioSourcesSitiosWeb = new Array(
    // Enlace 1
        'http://www.laguialinux.es',
    // Enlace 2
        'http://www.nzweb.org',
    // Enlace 3
        'http://www.desdechipiona.nzweb.org'
    );
    if (slideWebActual == LongitudArrayImaganesSitiosWebs) {
        slideWebActual = 0;
    }
    if (ratonEncima == 'false') {
        imgWebs.src = ArrayImaganesSitiosWebs[slideWebActual];
        descripcionImgWebs.innerHTML = cambioDescripcionImgWebs[slideWebActual];
        sourcesSitiosWeb.href = cambioSourcesSitiosWeb[slideWebActual];
        ++slideWebActual;
    }
}

/**
 * Comprobar si está el ratón sobre el slide
 * @param       {[type]} x [description]
 */
function MouseIsHover (x) {
    if (x == 'true') {
        ratonEncima = 'true';
    } else if (x == 'false') {
        ratonEncima = 'false';
    }
}
