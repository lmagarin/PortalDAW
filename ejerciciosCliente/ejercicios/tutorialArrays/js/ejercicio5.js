function inicio(){
    var objeto = {
        className: 'ensaladilla flamenquin'
    }
    addClass(objeto, "tortilla");
    console.log(objeto.className);
    addClass(objeto, "ensaladilla");
    console.log(objeto.className);
    addClass(objeto, "salmorejo");
    console.log(objeto.className);
}

function addClass(objeto, string){
    arrayObjeto = objeto.className.split(" ");
    for (var i = 0; i < arrayObjeto.length; i++) {
        if(string == arrayObjeto[i]){
           return ;
        }
    }
    objeto.className += " " + string;
}

window.addEventListener("load", inicio);