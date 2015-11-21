/**
* Pinta en la ventana el formulario a través del que se recogerán los datos a partir de los
* que se hacen todo el resto de operaciones.
*/
function seccionFormulario(){
    var encabezadoPadre = opener.document.getElementById("encabezadoPadre");
    var formulario = document.getElementById("formulario");
    
    encabezadoPadre.innerHTML = "Tarea del Tema 3";
    formulario.innerHTML = "Introduzca Nombre y Apellidos&nbsp;<input type='text' id='nombreApellidos'/><br/><br/>" +
                            "Introduzca dia de nacimiento&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' id='dia'/><br/><br/>" +
                            "Introduzca mes de nacimiento&nbsp;&nbsp;<input type='text' id='mes'/><br/><br/>" +
                            "Introduzca año de nacimiento&nbsp;&nbsp;&nbsp;<input type='text' id='anno'/><br/><br/>" +
                            "<input type='button' id='enviar' value='Enviar'/><br/>";
    document.getElementById("enviar").onclick = pintarInfo;
}

/**
* Pinta en la ventana la sección de resultados en base a los datos recogidos desde el formulario y
* las funciones necesarias implementadas en este archivo.
*/
function pintarInfo(){
    var infoFormulario = opener.document.getElementById("infoFormulario");
    var nombreApellidos = document.getElementById("nombreApellidos").value;

    infoFormulario.innerHTML = "Buenos dias " +  nombreApellidos + "</br>" +
                        "Tu nombre tiene " + nombreApellidos.length + " caracteres, incluidos espacios.</br>" +
                        "La primera letra E de tu nombre está en la posición: " + nombreApellidos.indexOf("e") + "</br>" +
                        "La última letra E de tu nombre está en la posición: " + nombreApellidos.lastIndexOf("e") + "</br>" +
                        "Tu nombre menos las 3 primeras letras es: " + nombreApellidos.substring(3) + "</br>" +
                        "Tu nombre todo en mayúsculas es: " + nombreApellidos.toUpperCase() + "</br>" +
                        "Tu edad es: " + calcularEdad() + "</br>" +
                        "Naciste un feliz : " + dia + " de " + mes + " del año " + anno + ". " +
                                "No te acuerdas, pero era " + diaSemana() + " y " + bisiesto() + " bisiesto</br>" +
                        "El coseno de 90 es: " + Math.cos(Math.PI/2) + "</br>" +
                        "El número mayor de (65, 22, 69, 99, 12) es: " + numeroMayor() + "</br>" +
                        "Ejemplo de número al azar entre 1 y 10: " + Math.floor((Math.random() * 10) + 1) + "</br>";
}

/**
* Calcula y devuelve la edad a partir de los datos año, mes y dia recogidos por formulario.
*/
function calcularEdad(){
    anno = document.getElementById("anno").value;
    mes = document.getElementById("mes").value;
    dia = document.getElementById("dia").value;

    fecha = new Date(anno, mes-1, dia); //porque el mes de enero es 0 y diciembre 11.
    var hoy = new Date();
    var edad = parseInt((hoy - fecha)/365/24/60/60/1000);
    return edad;
}

/**
* Calcula y devuelve el día de la semana de una fecha dada. Devuelve el día de la semana rescatándolo desde un array.
*/
function diaSemana(){
    var diaSemana = new Array("domingo","lunes","martes","miércoles","jueves","viernes","sábado");
    return diaSemana[fecha.getDay()];
}

/**
* Calcula y devuelve si el año es bisiesto o no.
*/
function bisiesto(){
    if(((anno % 4 == 0) && (anno % 100 != 0)) || (anno % 400 == 0)){
        return "SI";
    }
    else {
        return "NO";
    }
}

/**
* Calcula y devuelve el número mayor de los dados en el enunciado.
*/
function numeroMayor(){
    var array = [65, 22, 69, 99, 12];
    array.sort(function(a, b){return b-a});
    return array[0];
}

/**
* Manejador de la aplicación que lanza el método abrirNuevaVentana() cuando el window se ha cargado completamente.
*/
window.addEventListener("load", function(){
    seccionFormulario();
});
