/**
* Implementa MuestraDelUnoAlN que pida un número entero y que muestre la
* secuencia del 1 al número indicado. En caso de no poder generarse la secuencia
* (menor que 1), que lo indique.
* @author Rafa Miranda
* @version 1.0
*/

function mostrar(secuencia){
    var resultado = document.getElementById("resultado");
    resultado.innerHTML = "La secuencia es: " + secuencia;
}

function recorrerSecuencia(){
    var numero = document.getElementById("numero").value;
    var secuencia = "";
    for (var i = numero; i > 0; i--) {
        secuencia += i + ", ";
    }
    mostrar(secuencia);
}

window.onload = function(){
    document.getElementById("mostrar").onclick = recorrerSecuencia;
}