/**
* Implementa PorLineasDos que visualice los números del 0 al 100 separados por comas.
* Cada múltiplo de 7 o finalizado en 7 ha de comenzar en una línea nueva.
* @author Rafa Miranda
* @version 1.0
*/

function mostrarSecuencia(){
    var resultado = document.getElementById("resultado");
    var secuencia = "";
    
    for (var i = 0; i <= 100; i++) {
        if(!multiploSiete(i) && !finalizaSiete(i)){
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

function finalizaSiete(numero){
    var segundoDigito = numero - Math.floor(numero / 10) * 10;
    
    if(numero > 9 && segundoDigito == 7){
        return true;
    }
    else {
        return false;
    } 
}

document.getElementById("mostrar").addEventListener("click", function(){
    mostrarSecuencia();
});