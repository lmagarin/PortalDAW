/**
* Implementa CalculaMedia que pida números hasta que se introduzca uno negativo.
* Entonces, que muestre la media.
* @author Rafa Miranda
* @version 1.0
*/

function annadirNumero(){
    var nuevoNumero = document.getElementById("numero").value;
    var numeros = document.getElementById("numeros");
    var arrayNumeros = [];

    arrayNumeros.push(nuevoNumero);
    numeros.innerHTML += nuevoNumero + ", "; 
    if(nuevoNumero < 0){
        calcularMedia(arrayNumeros);
    }
}

function calcularMedia(arrayNumeros){
    var textoMedia = document.getElementById("media");
    var media = 0;
    var auxMedia = 0;
    for (var i = 0; i < arrayNumeros.length-1; i++) {
        auxMedia += arrayNumeros[i];
    }
    media = auxMedia / arrayNumeros.length-1;
    textoMedia.innerHTML = "La media de los números introducidos es: " + media;
}

window.onload = function(){
    document.getElementById("annadir").onclick = annadirNumero;
}