function inicio(){
    var arr = ["a", -1, 2, "b"];
    filter(arr, isNumeric);
    console.log(arr);
    filter(arr, function(val) { return val > 0 });
    console.log(arr);
}

function isNumeric(valor){
    if(typeof(valor) == "number"){ //Podría ser tambien => return typeof(valor) == "number";
        return true;
    }
    else {
        return false;
    }
}

function filter(array, funcion){
    for (var i = 0; i < array.length; i++) {
        if(!funcion(array[i])){
            array.splice(i, 1);
        }
    }
}

window.addEventListener("load", inicio);