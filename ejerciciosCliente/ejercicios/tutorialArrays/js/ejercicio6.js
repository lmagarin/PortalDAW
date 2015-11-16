function inicio(){
    console.log(camelize("hola-que-tal"));
    console.log(camelize("tela-con-el-tutorial"));
}

function camelize(string){
    var cadenaFinal = "";
    for (var i = 0; i < string.length; i++) {
        if(string.charAt(i) == "-"){
            cadenaFinal += "";
            cadenaFinal += string[i+1].toUpperCase();
            i++;
        }
        else {
            cadenaFinal += string[i];
        }
    }
    return cadenaFinal;
}

window.addEventListener("load", inicio);