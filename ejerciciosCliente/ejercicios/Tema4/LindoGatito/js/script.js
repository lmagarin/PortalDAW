/**
 * Crea una clase Gato, y a partir de ella crea tantos gatos como quiera el usuario.
 * Cada gato tendrá un nombre, una fecha de nacimiento, una raza y un peso (1-15). Cada vez que crees un objeto gato aparecerá una ventana nueva con una imagen que cambiará en función de su estado (comiendo, durmiendo y jugando, que es su estado habitual). El usuario podrá averiguar la edad del gato partiendo de un evento.
 * Evita las cajas de texto
 * No puedes usar ni alert ni prompt
 * Hazlo lo más dinámico posible.
 * Utiliza prototype para los métodos
 */
var gato;

function fechaValida(dia,mes,ano){
    var fecha = new Date(ano, mes, dia);
    if(fecha.getDate() == dia)
        if(fecha.getMonth() == mes)
            if(fecha.getFullYear() == ano)
                return true;
    return false;
}

function abrirVentana(){
    var nuevaVentana;
    //var arrayGatos = [];
    var nombre = document.getElementById("nombre").value;
    var raza = document.getElementById("raza").value;
    var peso = document.getElementById("peso").value;
    var dia = document.getElementById("dia").value;
    var mes = document.getElementById("mes").value;
    var ano = document.getElementById("ano").value;
    var error = document.getElementById("error");
    if(fechaValida(dia,mes,ano)){
        var fechaNac = new Date(ano,mes,dia);
        if(!(new Date().getTime() - fechaNac.getTime() < 0)){
            try {
                gato = new Gato(nombre, raza, peso, dia, mes, ano);
                //arrayGatos.push(gato);
                nuevaVentana = window.open("", "Gato", "toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=200," +
                    "width=" + screen.width + ", height=" + screen.height + "");
                nuevaVentana.document.write("<html>" +
                    "<head>" +
                    "<title>Lindo Gatito</title>" +
                    "<link rel='stylesheet' type='text/css' href='css/estilo.css'>" +
                    "<script type='text/javascript' src='js/Gato.js'></script>" +
                    "<script type='text/javascript' src='js/scriptVentanaHija.js'></script>" +
                    "<meta charset='utf-8'/>" +
                    "</head>" +
                    "<body id='ventanaHija'><div id='capa_opacidad'>" +
                    "<div id='fotos'><img id='izq' src=''><img id='dcha' src=''></div>" +
                    "<div id='info'><div id='datos'><h3></h3></div>" +
                    "<div id='estado'><h3></h3></div></div>" +
                    "<div><div id='botonera'><input type='button' class='submit' id='jugar' value='Jugar'>" +
                    "<input type='button' class='submit' id='comer' value='Comer'>" +
                    "<input type='button' class='submit' id='dormir' value='Dormir'>" +
                    "<input type='button' class='submit' id='edad' value='Calcular Edad'></div></div>" +
                    "</body>" +
                    "</html>");
                nuevaVentana.document.close();
            } catch (e) {
                error.innerHTML = e.mensaje;
            }
        }else{
            error.innerHTML = "Elija una fecha de nacimiento anterior a la fecha actual";
        }
    }
}

window.addEventListener("load", function(){
    document.getElementById("generar").addEventListener("click", abrirVentana);
});
