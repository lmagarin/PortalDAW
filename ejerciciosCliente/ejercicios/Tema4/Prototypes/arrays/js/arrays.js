Array.prototype.anadir = function(elemento){
    this.push(elemento);
}

var array1 = [0, 1, 2];
var elemento = 2;
array1.anadir(elemento);
console.log(array1);

Array.prototype.anadir = function(elemento, repetir){
    if(repetir == true){
        this.push(elemento);
    }
    else {
        var existe = false;
        for (var i = 0; i < this.length; i++) {
            if(this[i] == elemento){
                existe = true;
            }
        }
        if(!existe){
            this.push(elemento);
        }
    }
}
 
var array2 = [0, 1, 2];
var elemento = 2;
array2.anadir(elemento, false);
console.log("El elemento: " + elemento + " ya existe, no se puede añadir");
console.log(array2);
