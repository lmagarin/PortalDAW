/**
* MultiplicaImpares que multiplique los 20 primeros números impares y muestre el resultado en pantalla.
* @author Rafa Miranda
* @version 1.0
*/

function mostrar(){
    var secuencia = document.getElementById("secuencia");
    var resultado = document.getElementById("resultado");
    var producto = 1;
    var contador = 0;

    for (var i = 1; contador < 20; i++) {
        if(i%2 == 0){
            producto *= i;
            contador++;
            secuencia.innerHTML += i + ", ";
        }
    }

    resultado.innerHTML = "Resultado: " + producto;
}

document.getElementById("mostrar").addEventListener("click", function(){
    mostrar();
});