function evento(){
    /*if(document.getElementsByName("repetir").value == "si"){
        window.close();
        opener.location.reload();
    }
    else{
        window.close();
    }*/

    var rad = document.getElementsByName("repetir");
var prev = null;
for(var i = 0; i < rad.length; i++) {
    rad[i].onclick = function() {
        (prev)? console.log(prev.value):null;
        if(this !== prev) {
            prev = this;
        }
        console.log(this.value)
    };
}
}



window.onload = function(){
    document.getElementById("eleccion").onclick = evento;
    //document.getElementById("eleccion").addEventListener("DOMContentLoaded", evento, false);
}