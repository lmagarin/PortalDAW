var contexto;
var x = 50;
var R = 255;
var G = 255;
var B = 255;

function cargaContextoCanvas(idCanvas){
    var elemento = document.getElementById(idCanvas);
    if(elemento && elemento.getContext){
        var contexto = elemento.getContext('2d');
        if(contexto){
            return contexto;
        }
    }
    return false;
}

function animacionSubrayado(){
    contexto.fillStyle = blancoAVerde();
    contexto.fillRect(x,10,10,5);
    x += 1;
}

function blancoAVerde(){
    if(x%6 == 0) {
        return "rgb(" + variacionR() + "," + variacionG() + "," + variacionB() + ")"; //rgb(9,229,53)
    }
    else {
        return "rgb("+ R +","+ G + "," + B + ")";
    }
}
function variacionR(){
    R -= 2;
    return R;
}

function variacionG(){
    G -= 1;
    return G;
}

function variacionB(){
    B -= 3;
    return B;
}

function esferas(x){
    contexto.beginPath();
        contexto.fillStyle = '#62D727';
        contexto.arc(20+x,20,6,0,2*Math.PI,true);
        contexto.fill();
}

window.onload = function(){
    contexto = cargaContextoCanvas('micanvas2');
    if(contexto){ 
        esferas(0);
        esferas(40);
        esferas(80);
    }
    contexto = cargaContextoCanvas('micanvas');
    if(contexto){ 
        setInterval("animacionSubrayado()", 5);
    }
}