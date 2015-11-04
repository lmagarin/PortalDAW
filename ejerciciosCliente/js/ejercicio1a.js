function evento(){
    if(document.getElementsByName("repetir").value == "si"){
        window.close();
        opener.location.reload();
    }
    else{
        window.close();
    }
}

window.onload = function(){
    document.getElementById("eleccion").onclick = evento;
}