function inicio(){
    var arr = ["Plum","Orange","Donkey","Carrot","JavaScript"];
    var element = arr[0 + Math.floor(Math.random()*((arr.length-1)+1-0))];
    console.log(element);
}

window.addEventListener("load", inicio);