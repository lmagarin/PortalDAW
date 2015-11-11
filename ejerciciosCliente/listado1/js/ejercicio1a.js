function evento(){
    document.getElementById("repetirSi").onclick = recargar;
    document.getElementById("repetirNo").onclick = cerrar;
}

function recargar(){
    
    window.opener.location.reload();
    window.close();
}

function cerrar(){
    window.close();
}

/**
* Manejador de la aplicación que lanza el método abrirNuevaVentana() cuando el window se ha cargado completamente.
*/
window.addEventListener("load", function({
    window.addEventListener("click", evento);
});
