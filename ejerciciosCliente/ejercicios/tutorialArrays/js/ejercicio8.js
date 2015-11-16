function inicio(){
    var array = [4, "hola", 9, 23, "adios"];
    filterNumericInPlace(array);
    console.log(array);
}

function filterNumericInPlace(array){
    for (var i = 0; i < array.length; i++) {
        if(typeof(array[i]) != "number"){
            array.splice(i, 1);
        }
    }
}

window.addEventListener("load", inicio);