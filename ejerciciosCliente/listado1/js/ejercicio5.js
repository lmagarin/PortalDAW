/**
* Implementa NumerosPrimosEnSecuencia que pida un número e indique cuántos números
* primos existen entre el 1 y dicho número.
* @author: Rafa Miranda
* @version: 1.0
*/

function contarPrimos(){
    var numerador = document.getElementById("numero").value;
    var denominador = 2;
    var primo = true;
    var cantidad = 0;

    for(numerador; numerador >= 1; numerador--){
        for (denominador; denominador <= (numerador/2); denominador++) {
            if (numerador % denominador == 0){
                primo = false;
            }
            else {
                primo = true;
                cantidad++;
            }
        }
    }
    mostrarResultado(cantidad);
}

function mostrarResultado(cantidad){
    var cadena = "Entre tu número y el número 1 hay " + cantidad + " números primos";
    document.getElementById("resultado").innerHTML = cadena;
}

document.getElementById("comprobar").addEventListener("click", function(){
    contarPrimos();
});