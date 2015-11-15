function cerrarVentana(){
    window.close();
}

window.addEventListener("load", function(){
    document.getElementById("cerrar").addEventListener("click", cerrarVentana);
});