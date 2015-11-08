/**
* Implementa CalculaMedia que pida números hasta que se introduzca uno negativo.
* Entonces, que muestre la media.
* @author Rafa Miranda
* @version 1.0
*/

var arrayNumeros = [];

function annadirNumero(){
    var nuevoNumero = document.getElementById("numero").value;
    var numeros = document.getElementById("numeros");
    if(nuevoNumero < 0){
        calcularMedia();
    }
    else{
        arrayNumeros.push(nuevoNumero);
        numeros.innerHTML += nuevoNumero + ", ";
    }
}

function calcularMedia(){
    var textoMedia = document.getElementById("media");
    var media = 0;
    var suma = 0;
    for (var i = 0; i < arrayNumeros.length; i++) {
        suma += parseInt(arrayNumeros[i]);
    }
    media = suma / arrayNumeros.length;
    textoMedia.innerHTML = "La media de los números introducidos es: " + media;
}

document.getElementById("annadir").addEventListener("click", function(){
    annadirNumero();
});