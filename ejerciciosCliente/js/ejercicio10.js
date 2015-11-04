/**
* Implementa DeNumericoATexto que solicite un número del 0 al 99 y lo muestre
* escrito. Por ejemplo, para 12 mostrar: doce, para 44 mostrar: cuarenta y cuatro. Que
* sea lo más eficiente posible.
* @author Rafa Miranda
* @version 1.0
*/

function base(){
    var numero = document.getElementById("numero").value;

    segundoDigito = numero - Math.floor(numero / 10) * 10;
    switch (segundoDigito){
        case 1:
            return "uno";
            break;
        case 2:
            return "dos";
            break;
        case 3:
            return "tres";
            break;
        case 4:
            return "cuatro";
            break;
        case 5:
            return "cinco";
            break;
        case 6:
            return "seis";
            break;
        case 7:
            return "siete";
            break;
        case 8:
            return "ocho";
            break;
        case 9:
           return "nueve";
            break;
        case 0:
            if(numero == 0){
                return "cero";
            }
            else{
                return "";
            }
            break;
    }
}

function escribirNumero(){
    var numero = document.getElementById("numero").value;

    if(isNaN(numero) || (numero < 0) || (numero > 99)){
        texto = "Solo se admiten números entre 0 y 99.";
    }
    else if (numero < 10) {
        texto = base(numero);
    }
    nume = numero - Math.floor(numero / 100) * 100;
    decena = nume - (numero - Math.floor(numero / 10) * 10);
    num = Math.floor(nume);
    
    switch (decena){
        case 10:
            if(nume < 16){
                switch(num){
                    case 10:
                        texto = "diez";
                        break;
                    case 11:
                        texto = "once";
                        break;
                    case 12:
                        texto = "doce";
                        break;
                    case 13:
                        texto = "trece";
                        break;
                    case 14:
                        texto = "catorce";
                        break;
                    case 15:
                        texto = "quince";
                }
            }
            else{
                texto = "diez y " + base(numero);
            }
        break;
        case 20:
            if(nume == 20){
                texto = "veinte";
            }
            else{
                texto = "veinti"+base(numero);
            }
            break;
        case 30:
            if(nume == 30){
                texto = "treinta";
            }
            else{
                texto = "treinta y " + base(numero);
            }
            break;
        case 40:
            if(nume == 40){
                texto = "cuarenta";
            }
            else{
                texto = "cuarenta y " + base(numero);
            }
            break;
        case 50:
            if(nume == 50){
                texto = "cincuenta";
            }
            else{
                texto = "cincuenta y " + base(numero);
            }
            break;
        case 60:
            if(nume == 60){
                texto = "sesenta";
            }
            else{
                texto = "sesenta y " + base(numero);
            }
            break;
        case 70:
            if(nume == 70){
                texto = "setenta";
            }
            else{
                texto = "setenta y " + base(numero);
            }
            break;
        case 80:
            if(nume == 80){
                texto = "ochenta";
            }
            else{
                texto = "ochenta y " + base(numero);
            }
            break;
        case 90:
            if(nume == 90){
                texto = "noventa";
            }
            else{
                texto = "noventa y " + base(numero);
            }
            break;
        case 0:
            texto = base(numero);
    }
    resultado.innerHTML = texto;
}

window.onload = function(){
    document.getElementById("escribir").onclick = escribirNumero;
}