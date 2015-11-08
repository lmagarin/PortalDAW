/**
* Implementa ComprobacionHora que solicite los segundos, minutos y hora e indique si
* es correcta. Si lo fuera, ha de mostrar la hora un segundo después.
* @author Rafa Miranda
* @version 1.0
*/

function comprobarHora(){
    var hora = parseInt(document.getElementById("hora").value);
    var minuto = parseInt(document.getElementById("minuto").value);
    var segundo = parseInt(document.getElementById("segundo").value);
    var resultado = document.getElementById("resultado");
    var siguiente = document.getElementById("siguiente");
    var cadenaResultado = "";
    var cadenaSiguiente = "";

    if(hora > 23 || minuto >60 || segundo >60){
        cadenaResultado = "Hora incorrecta, revise los datos introducidos";
    }
    else{
        cadenaResultado = "Hora correcta.";
    }
    resultado.innerHTML = cadenaResultado;
    siguiente.innerHTML = mostrarSiguienteSegundo(hora, minuto, segundo);
    
}

function mostrarSiguienteSegundo(hora, minuto, segundo){
    if(hora > 23 || minuto >60 || segundo >60){
        return cadenaSiguiente = "";
    }
    if(segundo == 60){
        return cadenaSiguiente = "El siguiente segundo es: 1";
    }
    else {
        return cadenaSiguiente = "El siguiente segundo es: " + (segundo+1);
    }
}

document.getElementById("correcta").addEventListener("click", function(){
    comprobarHora();
});