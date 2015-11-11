/**
* Implementa el juego “Adivínalo”. Consiste en que el usuario ha de adivinar
* un número entre el 1 y el 100. Mostrará un mensaje:
* a. Para indicar si has acertado (en una nueva ventana)
* b. Para indicar si la solución es mayor o es menor.
* Al finalizar, se le preguntará al usuario si quiere repetir el juego.
* @author: Rafa Miranda
* @version: 1.0
*/

var numeroSecreto = Math.floor((Math.random() * 100) + 1);
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
                nuevaVentana.document.write(
                    "<html>"+
                        "<head>"+
                            "<title>Acierto!!</title>"+
                            "<script type='text/javascript' src='js/ejercicio1a.js'></script>"+
                            "<link rel='stylesheet' type='text/css' href='css/listado1.css'>"+
                        "</head>"+
                        "<body>"+
                            "<h1>Has acertado!!!</h1></br>"+
                            "<h3>Desear repetir el juego?</h3>"+
                            "<input type='button' id='repetirSi' value='SI'>"+
                            "<input type='button' id='repetirNo' value='NO'></br></br>"+
                        "</body>"+
                    "</html>");
                nuevaVentana.document.close();
            }
        } while(numero =! numeroSecreto);
    }
}

window.addEventListener("load", function(){
    document.getElementById("comprobar").addEventListener("click", comprobar);
});