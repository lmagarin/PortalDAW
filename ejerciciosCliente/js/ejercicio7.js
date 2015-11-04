/**
* Implementa Decena que solicite un número entre 0 y 10 (9,76876) e indique:
* a. Cuántas cifras tiene (7 cifras)
* b. Lo muestre del revés
* @author Rafa Miranda
* @version 1.0
*/

function calcularCifras(){
    var numero = document.getElementById("numero").value;
    var resultado = document.getElementById("resultado");
    var longitud = numero.length - 1;
    resultado.innerHTML = "El número introducido tiene " + longitud + " cifras.";
    mostrarAlReves(numero, longitud);
}

function mostrarAlReves(numero, longitud){
    var reves = document.getElementById("reves");
    var cadena = "";
    for(var i = longitud; i >= 0; i--)
        cadena += numero[i];
    reves.innerHTML = "La cifra al revés es: " + cadena;
}

window.onload = function(){
    document.getElementById("solucion").onclick = calcularCifras;
}