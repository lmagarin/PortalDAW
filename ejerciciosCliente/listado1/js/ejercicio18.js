/**
* Implementa PorLineas que visualice los números del 0 al 100 separados por comas.
* Cada múltiplo de 7 ha de comenzar en una línea nueva.
* @author Rafa Miranda
* @version 1.0
*/

function mostrarSecuencia(){
    var resultado = document.getElementById("resultado");
    var secuencia = "";
    
    for (var i = 0; i <= 100; i++) {
        if(!multiploSiete(i)){
            secuencia += i + ", ";
        }
        else{
            secuencia += "</br>" + i + ", ";
        }
    }
    resultado.innerHTML = secuencia;
}

function multiploSiete(numero){
    if(numero%7 == 0){
        return true;
    }
    else {
        return false;
    }
}

document.getElementById("mostrar").addEventListener("click", function(){
    mostrarSecuencia();
});