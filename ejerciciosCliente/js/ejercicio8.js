/**
* Implementa ComprobacionFecha que solicite el día, el mes y el año e indique si la
* fecha es correcta. Si lo fuera, ha de mostrar el día después.
* @author Rafa Miranda
* @version 1.0
*/

function comprobarFecha(){
    var dia = parseInt(document.getElementById("dia").value);
    var mes = parseInt(document.getElementById("mes").value);
    var anno = parseInt(document.getElementById("anno").value);
    var resultado = document.getElementById("resultado");
    var fechaValida = true;
    var cadena = "";

    if((esBisiesto(anno)) && (mes == 2 && dia > 29)){
        cadena = "Fecha incorrecta. Febrero en año bisiesto tiene máximo 29 días.";
        fechaValida = false;
    }
    else if((!esBisiesto(anno)) && (mes == 2 && dia > 28)) {
        cadena = "Fecha incorrecta. Febrero en este año tiene máximo 28 días.";
        fechaValida = false;
    }
    else if(dia > 31 || mes > 12){
        cadena = "Fecha incorrecta. Superados días o meses.";
        fechaValida = false;
    }
    else if((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia > 30){
        cadena = "Fecha incorrecta. Este mes tiene 30 días máximo.";
        fechaValida = false;
    }
    else {
        cadena = "Fecha correcta.";
        fechaValida = true;
    }
    resultado.innerHTML = cadena;
    mostrarSiguiente(dia,mes,anno,fechaValida);
}

function esBisiesto(anno){
    return ((anno % 4 == 0 && anno % 100 != 0) || anno % 400 == 0) ? true : false;
}

function mostrarSiguiente(dia,mes,anno,fechaValida){
    var siguiente = document.getElementById("siguiente");
    var cadena = "";
    
    if(!fechaValida){
        cadena = "";
    }
    else if(((esBisiesto(anno)) && (mes == 2 && dia == 29)) || ((!esBisiesto(anno)) && (mes == 2 && dia == 28))){
        cadena = "Siguiente día es: 1 - " + (mes+1) + " - " + anno;
    }
    else if(dia == 31 && mes == 12){
        cadena = "Siguiente día es: 1 - 1 - " + (anno+1);
    }
    else if((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia == 30){
        cadena = "Siguiente día es: 1 - " + (mes+1) + " - " + anno;
    }
    else if((mes == 1 || mes == 3 || mes == 5 || mes == 7 || mes == 8 || mes == 10) && dia == 31){
        cadena = "Siguiente día es: 1 - " + (mes+1) + " - " + anno;
    }
    else {
        cadena = "Siguiente día es: " + (dia+1) + " - " + mes + " - " + anno;
    }
    siguiente.innerHTML = cadena;
}

window.onload = function(){
    document.getElementById("correcta").onclick = comprobarFecha;
}