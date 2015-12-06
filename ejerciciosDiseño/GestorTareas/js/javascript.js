/**
 * Created by rafael on 04/12/2015.
 */
function restaurarColor(cadena1, cadena2){
    document.getElementById("" + cadena1 + "").style.backgroundColor = "";
    document.getElementById("" + cadena2 + "").style.backgroundColor = "";
}

function descripcion1(){
    restaurarColor("tarea2", "tarea3");
    document.getElementById("contenido").style.display = "";
    document.getElementById("mensaje").style.display = "none";
    document.getElementById("tarea1").style.backgroundColor = "#D8D8D8";
    var fechaEntrega = document.getElementById("fecha2");
    var descripcion1 = document.getElementById("enunciado");
    fechaEntrega.innerHTML = "29-11-15";
    descripcion1.innerHTML = "Mediante prototype, agrega los métodos sumar, restar, trasponer y "+
        "multiplicar a la clase ArraysMatematicos. Recuerda que el estado de un array deberían de ser los "+
        "elementos. Recuerda las restricciones y posibilidades de un Array: "+
        "Sobre las dimensines de los arrays implicados (unidimensional, bidimensional...)"+
        "Sobre las longitudes de los arrays implicados (1 en adelante)"+
        "Sobre los contenidos de los arrays implicados (numéricos)"+
        "Podemos rellenar un Array con valores aleatorios o directamente desde teclado."+
        "Una vez creada la clase, demuestra su funcionamiento en una página bien diseñada."+
        "Evita las cajas de texto y hazla lo más dinámica posible.";
}

function descripcion2(){
    restaurarColor("tarea1", "tarea3");
    document.getElementById("contenido").style.display = "";
    document.getElementById("mensaje").style.display = "none";
    document.getElementById("tarea2").style.backgroundColor = "#D8D8D8";
    var fechaEntrega = document.getElementById("fecha2");
    var descripcion1 = document.getElementById("enunciado");
    fechaEntrega.innerHTML = "30-11-15";
    descripcion1.innerHTML = "JavaScript permite el manejo de excepciones desde la versión tercera del Ecma-262. "+
        "Las palabras reservadas son similares a otros lenguajes de programación:"+
        "throw para lanzar la excepcióntry/catch/finally para gestionarlas en el lugar indicado. "+
        "El objeto lanzado en throw debiera ser un objeto con al menos el atributo message, que será el que "+
        "busque el navegador para mostrarlo si la excepción no es capturada. Por eso se usa el objeto Error()."+
        "Implementa Matrices matemáticas mediante excepciones. Utilízalas al menos para controlar las "+
        "dimensiones en las operaciones. Podéis utilizarlas también en el constructor y para la entrada de datos.";
}

function descripcion3(){
    restaurarColor("tarea1", "tarea2");
    document.getElementById("contenido").style.display = "";
    document.getElementById("mensaje").style.display = "none";
    document.getElementById("tarea3").style.backgroundColor = "#D8D8D8";
    var fechaEntrega = document.getElementById("fecha2");
    var descripcion1 = document.getElementById("enunciado");
    fechaEntrega.innerHTML = "03-12-15";
    descripcion1.innerHTML = "Crea una clase Gato, y a partir de ella crea tantos gatos como quiera el usuario. "+
        "Cada gato tendrá un nombre, una fecha de nacimiento, una raza y un peso (1-15). Cada vez que crees "+
        "un objeto gato aparecerá una ventana nueva con una imagen que cambiará en función de su estado "+
        "(comiendo, durmiendo y jugando, que es su estado habitual). El usuario podrá averiguar la edad del "+
        "gato partiendo de un evento. Evita las cajas de texto, no puedes usar ni alert ni prompt, "+
        "hazlo lo más dinámico posible. Utiliza prototype para los métodos.";
}

window.addEventListener("load", function(){
    document.getElementById("contenido").style.display = "none";
    document.getElementById("tarea1").addEventListener("click", descripcion1);
    document.getElementById("tarea2").addEventListener("click", descripcion2);
    document.getElementById("tarea3").addEventListener("click", descripcion3);
});