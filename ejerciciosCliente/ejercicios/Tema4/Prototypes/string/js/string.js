String.prototype.truncar = function(longitud){
    var nuevaCadena = this.substring(0, longitud);
    return nuevaCadena;
}

var cadena1 = "hola mundo";
cadena2 = cadena1.truncar(6);
console.log(cadena2);

var cadena3 = "Lorem fistrum se calle ustée no te digo trigo por no llamarte Rodrigor amatomaa. Al ataquerl torpedo se calle ustée sexuarl fistro sexuarl a gramenawer qué dise usteer se calle ustée ese pedazo de.";
console.log(cadena3.truncar(70));

String.prototype.truncar = function(longitud, nuevoTexto){
    var nuevaCadena = this.substring(0, longitud);
    nuevaCadena += nuevoTexto;
    return nuevaCadena;
}

cadena2 = cadena1.truncar(6, '...');
console.log(cadena2);

console.log(cadena3.truncar(70, '... (sigue)'));
