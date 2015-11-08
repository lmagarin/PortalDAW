/**
* Implementa DeSieteEnSiete que escriba los números del 100 al 0 de 7 en siete.
* @author: Rafa Miranda
* @version: 1.0
*/

function escribirNumero(){
    var numeros = "";
    var lista = document.getElementById("lista");
    for (var num = 100; num >= 0; num -=7) {
        numeros += num + "-";
    }
    lista.innerHTML = numeros;
}

document.getElementById("boton").addEventListener("click", function(){
    escribirNumero();
});