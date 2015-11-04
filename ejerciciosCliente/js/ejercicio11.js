/**
* Implementa MediaPositivos que calcule la media de una serie de números positivos,
* introducidos por teclado. Dejará de leer cuando el usuario introduzca el 0.
* @author Rafa Miranda
* @version 1.0
*/

function annadirNumero(){
    var nuevoNumero = document.getElementById("numero").value;
    var numeros = document.getElementById("numeros");
    arrayNumeros = [];
    for (var i = 0; i < arrayNumeros.length; i++) {
        arrayNumeros[i] = nuevoNumero;
    }
    numeros.innerHTML += nuevoNumero + ", "; 
}

function calcularMedia(){
    var textoMedia = document.getElementById("media");
    var media = 0;
    var suma = 0;
    for (var i = 0; i < arrayNumeros.length; i++) {
        suma += arrayNumeros[i];
    }
    media = suma / arrayNumeros.length;
    textoMedia.innerHTML = "La media de los números introducidos es: " + media;
}

window.onload = function(){
    document.getElementById("annadir").onclick = annadirNumero;
    document.getElementById("calcular").onclick = calcularMedia;
}