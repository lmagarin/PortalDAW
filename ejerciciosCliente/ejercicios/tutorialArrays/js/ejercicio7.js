function inicio(){
    var objeto = {
        className: 'mesa silla'
    }
    removeClass(objeto, "estanteria");
    console.log(objeto.className);
    removeClass(objeto, "mesa");
    console.log(objeto.className);
}

function removeClass(objeto, string){
    var arrayClases = objeto.className.split(" ");
    for (var i = 0; i < arrayClases.length; i++) {
        if(arrayClases[i] == string){
            arrayClases.splice(i, 1);
        }
    }
    objeto.className = arrayClases.join(" ");
}

window.addEventListener("load", inicio);