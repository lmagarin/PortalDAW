/**
* Implementa el juego “Adivínalo”. Consiste en que el usuario ha de adivinar
* un número entre el 1 y el 100. Mostrará un mensaje:
* a. Para indicar si has acertado (en una nueva ventana)
* b. Para indicar si la solución es mayor o es menor.
* Al finalizar, se le preguntará al usuario si quiere repetir el juego.
* @author: Rafa Miranda
* @version: 1.0
*/

numeroSecreto = Math.floor((Math.random() * 100) + 1);
console.log(numeroSecreto);

function comprobar(){   
    var resultado = document.getElementById("resultado"); 
    if(numero != numeroSecreto){
        do {
            numero = document.getElementById("numero").value;
            if(numero<numeroSecreto){
                resultado.innerHTML = "El número que buscas es: MAYOR!";
            }
            else if (numero>numeroSecreto){
                resultado.innerHTML = "El número que buscas es: MENOR!";
            }
            else {
                var nuevaVentana = window.open("","","height=300,width=400,top=200,left=300");
                nuevaVentana.document.write("<html><head><title>Acierto!!</title><script type='text/javascript'"+
                    "src='js/ejercicio1a.js'></script></head><body>");
                nuevaVentana.document.write("<h1>Has acertado!!!</h1></br><h3>Desear repetir el juego?</h3>");
                nuevaVentana.document.write("<form><input type='radio' name='repetir' value='no' checked>NO");
                nuevaVentana.document.write("<input type='radio' name='repetir' value='si'>SI</br></br>");
                nuevaVentana.document.write("<input type='submit' id='eleccion'"+
                    "value='Elegir'></form></body></html>");
            }
        } while(numero =! numeroSecreto);
    }
}

window.onload = function(){
    document.getElementById("comprobar").onclick = comprobar;
}