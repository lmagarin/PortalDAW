function recargar(){
    window.opener.location.reload();
    window.close();
}

function cerrar(){
    window.close();
}

window.addEventListener("load", function(){
    document.getElementById("repetirSi").addEventListener("click", recargar);
    document.getElementById("repetirNo").addEventListener("click", cerrar);
});
