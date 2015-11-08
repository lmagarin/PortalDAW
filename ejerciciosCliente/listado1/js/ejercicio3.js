/**
* Implementa MultiplosDeCinco que pida 7 números e indique si alguno es múltiplo de 5.
* @author: Rafa Miranda
* @version: 1.0
*/

function crearArray(){
    var elementos = document.getElementsByClassName("numeros");
    console.log(elementos);
    var numeros = [];
    for (var i = 0; i < elementos.length; i++) {
        if (typeof elementos[i].value !== "undefined") {
            numeros.push(elementos[i].value);
        }
    }
    console.log(numeros);
    recorrerArrayComprobar(numeros); 
}

function recorrerArrayComprobar(numeros){
    var cadena = "";
    var resultados = document.getElementById("resultados");
    for (var i = 0; i < numeros.length; i++) {
        if(numeros[i]%5 == 0){
            cadena += "&nbsp;&nbsp;Múltiplo&nbsp;&nbsp;-";
        }
        else {
            cadena += "&nbsp;&nbsp;No Múltiplo&nbsp;&nbsp;-";
        }
        resultados.innerHTML = cadena;
    }
}

document.getElementById("enviar").addEventListener("click", function(){
    crearArray();
});