/**
* Implementa NumeroPrimo que pida un número e indique si es primo o no.
* @author: Rafa Miranda
* @version: 1.0
*/

function comprobarPrimo(){
    var numerador = document.getElementById("numero").value;
    var denominador = 2;
    var primo = true;

    while ((primo) && (denominador != numerador)){
        if (numerador % denominador == 0){
            primo = false;
        }
        denominador++;
    }
    mostrarResultado(primo);
}

function mostrarResultado(primo){
    var cadena = "";
    
    if(primo){
        cadena = "El número introducido es primo";
    }
    else {
        cadena = "El número introducido no es primo";
    }
    document.getElementById("resultado").innerHTML = cadena;
}

document.getElementById("comprobar").addEventListener("click", function(){
    comprobarPrimo();
});