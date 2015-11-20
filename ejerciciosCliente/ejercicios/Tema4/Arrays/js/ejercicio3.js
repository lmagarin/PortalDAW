function inicio(){
    var arr = ["objeto", "clase", "array", "evento"];
    console.log("La posicion de 'objeto' es: " + find(arr, "objeto"));
    console.log("La posicion de 'array' es: " + find(arr, "array"));
    console.log("La posicion de '5' es: " + find(arr, 5));
    console.log("La posicion de 'evento' es: " + find(arr, "evento"));
}

function find(arr, string){
    for (var i = 0; i < arr.length; i++) {
        if(string == arr[i]){
            return i;
        }
    }
    return -1;
}

window.addEventListener("load", inicio);