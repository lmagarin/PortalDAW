/**
* Implementa OrdenaTres que pida tres números y los muestre ordenados de menor a mayor.
* @author: Rafa Miranda
* @version: 1.0
*/

function ordenar(){
    var numero1 = document.getElementById("numero1").value;
    var numero2 = document.getElementById("numero2").value;
    var numero3 = document.getElementById("numero3").value;
    var resultado = document.getElementById("resultado");
    var menor;
    var medio;
    var mayor;

    if(isNaN(numero1) || isNaN(numero2) || isNaN(numero3)){
        resultado.innerHTML = "Solo se admiten números.";
    }
    else if(numero1 == numero2 || numero1 == numero3 || numero2 == numero3){
        resultado.innerHTML = "No se admiten números repetidos";
    }
    else {
        if((numero1 < numero2) && (numero1 < numero3)){
            menor = numero1;
            if(numero2 < numero3){
                medio = numero2;
                mayor = numero3;
            }
            else{
                medio = numero3;
                mayor = numero2;
            }
        }
        else if((numero2 < numero1) && (numero2 < numero3)){
            menor = numero2;
            if(numero1 < numero3){
                medio = numero1;
                mayor = numero3;
            }
            else {
                medio = numero3;
                mayor = numero1;
            }
        }
        else if((numero3 < numero1) && (numero3 < numero2)){
            menor = numero3;
            if(numero1 < numero2){
                medio = numero1;
                mayor = numero2;
            }
            else{
                medio = numero2;
                mayor = numero1;
            }
        }
        resultado.innerHTML = menor + "-" + medio + "-" + mayor;
    }   
}

window.onload = function(){
    document.getElementById("ordenar").onclick = ordenar;
}