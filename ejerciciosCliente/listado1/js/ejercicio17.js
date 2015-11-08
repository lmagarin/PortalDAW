/**
* Implementa Pirámide que mediante un bucle for visualice una pirámide del siguiente
* tipo:
* 1
* 12
* 123
* 1234
* 12345
* 123456
* 1234567
* 12345678
* 123456789
* 1234567890
* @author Rafa Miranda
* @version 1.0
*/

function construirPiramide(){
    var piramide = document.getElementById("resultado"); 
    var mensaje = "";

    for (var i = 1; i <= 9; i++) {
        for (var j = 1; j <= i; j++) {
            mensaje += j;  
        };
        mensaje += "<br>";
    }
    mensaje += "1234567890";
    piramide.innerHTML = mensaje;
}

document.getElementById("mostrar").addEventListener("click", function(){
    construirPiramide();
});