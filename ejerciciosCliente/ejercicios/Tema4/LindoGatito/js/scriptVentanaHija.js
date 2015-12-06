/**
 * Crea una clase Gato, y a partir de ella crea tantos gatos como quiera el usuario.
 * Cada gato tendrá un nombre, una fecha de nacimiento, una raza y un peso (1-15). Cada vez que crees un objeto gato aparecerá una ventana nueva con una imagen que cambiará en función de su estado (comiendo, durmiendo y jugando, que es su estado habitual). El usuario podrá averiguar la edad del gato partiendo de un evento.
 * Evita las cajas de texto
 * No puedes usar ni alert ni prompt
 * Hazlo lo más dinámico posible.
 * Utiliza prototype para los métodos
 */
window.addEventListener("load", function(){
    var gato = opener.gato;
    var divEstado = document.getElementById("estado");
    var edadPulsada = false;

    function deshabilitarBotonera(){
        document.getElementById("jugar").disabled = true;
        document.getElementById("comer").disabled = true;
        document.getElementById("dormir").disabled = true
        document.getElementById("edad").disabled = true;
    }

    function habilitarBotonEdad() {
        edadPulsada = false;
        document.getElementById("edad").disabled = false;
    }

    function gatoJugar(){
        habilitarBotonEdad();
        document.getElementById("estado").style.border = "1px solid black";
        divEstado.innerHTML = gato.jugar();
        var fotoEstado = document.getElementById("dcha");
        fotoEstado.src = gato.rutaImagenEstado;
        if(gato.estado === "muerto"){
            deshabilitarBotonera();
        }
    }

    function gatoComer(){
        habilitarBotonEdad();
        document.getElementById("estado").style.border = "1px solid black";
        divEstado.innerHTML = gato.comer();
        var fotoEstado = document.getElementById("dcha");
        fotoEstado.src = gato.rutaImagenEstado;
        if(gato.estado === "muerto"){
            deshabilitarBotonera();
        }
    }

    function gatoDormir(){
        habilitarBotonEdad();
        document.getElementById("estado").style.border = "1px solid black";
        divEstado.innerHTML = gato.dormir();
        var fotoEstado = document.getElementById("dcha");
        fotoEstado.src = gato.rutaImagenEstado;
        if(gato.estado === "muerto"){
            deshabilitarBotonera();
        }
    }

    function gatoEdad(){
        if(edadPulsada == false){
            document.getElementById("estado").style.border = "1px solid black";
            var fechaNac = new Date(gato.ano,gato.mes,gato.dia);
            var diferencia = new Date().getTime() - fechaNac.getTime();
            var annos = Math.floor(diferencia / (1000 * 60 * 60 * 24 * 365.25));
            divEstado.innerHTML += "<br>" + annos + " a\u00F1os.";
            document.getElementById("edad").disabled = true;
            edadPulsada = true;
        }
        else {
            return;
        }
    }

    var datos = document.getElementById("datos");
    datos.innerHTML = gato.mostrarInformacion();
    var fotoGato = document.getElementById("izq");
    fotoGato.src = gato.rutaImagenRaza;
    var fotoEstado = document.getElementById("dcha");
    fotoEstado.src = gato.rutaImagenEstado;
    document.getElementById("jugar").addEventListener("click", gatoJugar);
    document.getElementById("comer").addEventListener("click", gatoComer);
    document.getElementById("dormir").addEventListener("click", gatoDormir);
    document.getElementById("edad").addEventListener("click", gatoEdad);
});