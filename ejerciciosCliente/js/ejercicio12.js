/**
* Implementa CerosYUnos que lea una secuencia de ceros y unos. Mostrará el número
* de ceros de la secuencia. Dejará de leer cuando el usuario introduzca el número 2.
* @author Rafa Miranda
* @version 1.0
*/

function manejador(elEvento) {
    var evento = elEvento || window.event;
    var caracter = evento.charCode || evento.keyCode;
    if(String.fromCharCode(caracter) == "2"){
        crearArray();
    }
}

function crearArray(){
    var numero = document.getElementById("numeros").value;
    var arrayNumeros = numero.split("");
    contarCerosMostrar(arrayNumeros);
}

function contarCerosMostrar(arrayNumeros){
    var resultado = document.getElementById("resultado");
    var cantidad = 0;

    for (var i = 0; i <= arrayNumeros.length-1; i++) {
        if(arrayNumeros[i] == 0){
            cantidad++; 
        }
    }
    resultado.innerHTML = "Has introducido un total de " + cantidad +" ceros";
}

window.onload = function(){
    document.getElementById("numeros").onkeypress = manejador;
}

