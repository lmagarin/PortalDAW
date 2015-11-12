/**
* Primera función en lanzarse, y que abre dos ventanas hijas, una que resume información acerca del
* navegador usado y de URL y protocolo, y la segunda con una URL concreta dada en el enunciado.
*/

var nuevaVentana;

function abrirNuevaVentana(){
    nuevaVentana = window.open("", "Nueva Ventana", "toolbar=yes, scrollbars=yes,"+
        "resizable=yes, top=100, left=200, width=700, height=500");
    nuevaVentana.document.write("<html><head><title></title><script type='text/javascript' src='js/nuevaVentana.js'></script>"+
        "<link rel='stylesheet' type='text/css' href='css/tareatema3.css'>" +
        "</head><body><h1>Nueva Ventana</h1><h2>URL completa: " + location.href + "</h2>"+
        "<h2>Protocolo: " + location.protocol + "</h2><h2>Nombre en código del navegador: " 
        + navigator.appCodeName + "</h2><h2>JAVA disponible?: " + javaEnabled() + "</h2>" +
        "<form id='formulario' action='#'></form></body></html>");
    window.open("http://www.iesgrancapitan.org/portal/", "", "width=800, height=600");
    nuevaVentana.document.close();
}

/**
* Analiza y devuelve si Java está disponible y activo en el navegador donde se lanza la aplicación.
*/
function javaEnabled(){
    if(navigator.javaEnabled()){
        return "Java SI disponible en esta ventana";
    }
    else {
        return "Java NO disponible en esta ventana";
    }
}

/**
* Manejador de la aplicación que lanza el método abrirNuevaVentana() cuando el window se ha cargado completamente.
*/
window.addEventListener("load", function(){
    abrirNuevaVentana();
});
