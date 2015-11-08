/**
* Implementa ProductoPotencias que calcule y visualice el producto de las potencias de 2 entre 0 y 10.
* @author Rafa Miranda
* @version 1.0
*/

function mostrarResultado(){
    var productoPotencias = 1;
    var resultado = document.getElementById("resultado");

    for (var i = 0; i <= 10; i++) {
        productoPotencias *= Math.pow(2,i);
    }
    resultado.innerHTML = "El producto de las potencias de 2 entre 0 y 10 es " + productoPotencias;
}

document.getElementById("mostrar").addEventListener("click", function(){
    mostrarResultado();
});