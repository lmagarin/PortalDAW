function inicio(){
    var array = ["a", 1, "b", 4, 6];
    console.log(FilterNumeric(array));
}

function FilterNumeric(arr){
    var arrayNumerico = [];
    for (var i = 0; i < arr.length; i++) {
        if(typeof(arr[i]) == "number"){
            arrayNumerico.push(arr[i]);
        }
    }
    return arrayNumerico;
}

window.addEventListener("load", inicio);