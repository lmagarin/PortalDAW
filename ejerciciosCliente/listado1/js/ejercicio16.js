/**
* Implementa Pirámide que mediante un bucle for visualice una pirámide del siguiente
* tipo:
* 1
* 22
* 333
* 4444
* 55555
* 666666
* 7777777
* 88888888
* 999999999
* 0000000000
* @author Rafa Miranda
* @version 1.0
*/

function construirPiramide(){
    var piramide = document.getElementById("resultado"); 
    var mensaje = "";

    for (var i = 1; i <= 9; i++) {
        for (var j = 1; j <= i; j++) {
            mensaje += i;  
        };
        mensaje += "<br>";
    }
    mensaje += "0000000000";
    piramide.innerHTML = mensaje;
}

document.getElementById("mostrar").addEventListener("click", function(){
    construirPiramide();
});
