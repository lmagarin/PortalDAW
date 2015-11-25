function init(){
    var filas1;
    var columnas1;
    var filas2;
    var columnas2;
    var array1;
    var array2;
    var operacion;

    document.getElementById("operacion").addEventListener("focusout", generarFormulario);

    function ArraysMatematicos(filas, columnas){
        this.filas = filas;
        this.columnas = columnas;
        this.contenido = new Array(filas);
        for (var i = 0; i < filas; i++) {
            this.contenido[i] = new Array(columnas);
            for (var j = 0; j < columnas; j++) {
                this.contenido[i][j] = 0;
            }
        }
    }

    ArraysMatematicos.prototype.sumar = function(matriz) {
        var arraySuma;
        if(!this.comprobarDimensiones(matriz)){
            alert("Error en las dimensiones");
        }
        else {
            arraySuma = new ArraysMatematicos(this.filas, this.columnas);
            for (var i = 0; i < this.filas; i++) {
                for (var j = 0; j < this.columnas; j++) {
                    arraySuma.contenido[i][j] = this.contenido[i][j] + matriz.contenido[i][j];
                }
            }
            return arraySuma;
        }
    }

    ArraysMatematicos.prototype.restar = function(matriz) {
        var arrayResta;
        if(!this.comprobarDimensiones(matriz)){
            alert("Error en las dimensiones");
        }
        else {
            arrayResta = new ArraysMatematicos(this.filas, this.columnas);
            for (var i = 0; i < this.filas; i++) {
                for (var j = 0; j < this.columnas; j++) {
                    arrayResta.contenido[i][j] = this.contenido[i][j] - matriz.contenido[i][j];
                }
            }
            return arrayResta;
        }
    }

    ArraysMatematicos.prototype.trasponer = function() {
        var arrayTraspuesta = new ArraysMatematicos(this.columnas, this.filas);
        for(var i = 0; i < arrayTraspuesta.filas; i++){
            for(var j = 0;j < arrayTraspuesta.columnas; j++){
                arrayTraspuesta.contenido[i][j] = this.contenido[j][i];
            }
        }
        return arrayTraspuesta;
    }

    ArraysMatematicos.prototype.multiplicar = function(matriz) {
        var arrayProducto;
        if(this.columnas != matriz.filas){
            alert("Las matrices no pueden multiplicarse por sus tamaños. las columnas de la primera matriz deben ser igual a las filas de la segunda.");
        }
        else{
            arrayProducto = new ArraysMatematicos(this.filas, matriz.columnas);
            for (var i = 0; i < this.filas; i++){
                for (var j = 0; j < matriz.columnas; j++){
                    for (var k = 0; k < this.columnas; k++) {
                        arrayProducto.contenido[i][j] += this.contenido[i][k] * matriz.contenido[k][j];
                    }
                }
            }
            return arrayProducto;
        }
    }

    ArraysMatematicos.prototype.comprobarDimensiones = function(matriz){
        if(this.filas === matriz.filas && this.columnas === matriz.columnas){
            return true;
        }
        else {
            return false;
        }
    }

    function generarFormulario(){
        operacion = document.getElementById("operacion").value;
        var tamano = document.getElementById("tamano");
        if(operacion != "trasponer"){
            tamano.innerHTML = "Numero filas primera matriz:<br/>"+
                    "<input type='text' id='filas1'/><br/></br>"+
                    "Numero columnas primera matriz:<br/>"+
                    "<input type='text' id='columnas1'/><br/></br>"+
                    "Numero filas segunda matriz:<br/>"+
                    "<input type='text' id='filas2'/><br/></br>"+
                    "Numero columnas segunda matriz:<br/>"+
                    "<input type='text' id='columnas2'/><br/></br>"+
                    "<input type='button' class='submit' id='generar' value='Ingresar Valores'></br>";
        }
        else {
            tamano.innerHTML = "Numero filas matriz:<br/>"+
                    "<input type='text' id='filas1'/><br/></br>"+
                    "Numero columnas matriz:<br/>"+
                    "<input type='text' id='columnas1'/><br/></br>"+
                    "<input type='button' class='submit' id='generar' value='Ingresar Valores'></br>";
        }
        document.getElementById("generar").addEventListener("click", generarCasillas);
    }

    function generarCasillas(){
        filas1 = document.getElementById("filas1").value;
        columnas1 = document.getElementById("columnas1").value;
        var valores1 = document.getElementById("valores_matriz1");
        var enviar = document.getElementById("enviar");
        if(operacion != "trasponer"){
            filas2 = document.getElementById("filas2").value;
            columnas2 = document.getElementById("columnas2").value;
            var valores2 = document.getElementById("valores_matriz2");
            valores1.innerHTML += "Matriz 1:</br>";
            for (var i = 0; i < filas1; i++) {
                for (var j = 0; j < columnas1; j++) {
                    valores1.innerHTML += "<input type='text' id='matriz1f" + i + "c" + j + "'/>";
                }
                valores1.innerHTML += "</br>";
            }
            valores2.innerHTML += "Matriz 2:</br>";
            for (var i = 0; i < filas2; i++) {
                for (var j = 0; j < columnas2; j++) {
                    valores2.innerHTML += "<input type='text' id='matriz2f" + i + "c" + j + "'/>";
                }
                valores2.innerHTML += "</br>";
            }   
        }
        else {
            valores1.innerHTML += "Matriz 1:</br>";
            for (var i = 0; i < filas1; i++) {
                for (var j = 0; j < columnas1; j++) {
                    valores1.innerHTML += "<input type='text' id='matriz1f" + i + "c" + j + "'/>";
                }
                valores1.innerHTML += "</br>";
            }
        }
        enviar.innerHTML = "<input type='button' class='submit' id='calcular' value='Enviar'>";
        document.getElementById("calcular").addEventListener("click", crearArrays);
    }  

    function crearArrays(){
        if(operacion != "trasponer"){
            if(filas1 > 0 && columnas1 > 0 && filas2 > 0 && columnas2 > 0) {
                array1 = new ArraysMatematicos(filas1, columnas1);
                array2 = new ArraysMatematicos(filas2, columnas2);
            }
            else {
                alert("Las dimensiones de los arrays deben ser mayor de cero.")
            }
        }
        else {
            array1 = new ArraysMatematicos(filas1, columnas1);
        }
        rellenarArrays();
    }
      
    function rellenarArrays(){
        if(operacion != "trasponer"){
            for (var i = 0; i < filas1; i++) {  
                for (var j = 0; j < columnas1; j++) {
                    array1.contenido[i][j] = parseInt(document.getElementById("matriz1f" + i + "c" + j + "").value);
                }
            }
            for (var i = 0; i < filas2; i++) {
                for (var j = 0; j < columnas2; j++) {
                    array2.contenido[i][j] = parseInt(document.getElementById("matriz2f" + i + "c" + j + "").value);
                }
            }
        }
        else {
            for (var i = 0; i < filas1; i++) {
                for (var j = 0; j < columnas1; j++) {
                    array1.contenido[i][j] = parseInt(document.getElementById("matriz1f" + i + "c" + j + "").value);
                }
            }
        }
        elegirOperacion();
    }

    function elegirOperacion(){
        var operacion = document.getElementById("operacion").value;
        switch(operacion){
            case "sumar":
                mostrarResultado(array1.sumar(array2));
                break;
            case "restar":
                mostrarResultado(array1.restar(array2));
                break;
            case "multiplicar":
                mostrarResultado(array1.multiplicar(array2));
                break;
            case "trasponer":
                mostrarResultado(array1.trasponer());
                break;
            default:
                break;
        }
    }

    function mostrarResultado(array){
        var resultado = document.getElementById("resultado");
        for(var i = 0; i < array.filas; i++){
            for(var j = 0; j <array.columnas; j++){
                resultado.innerHTML += "" + array.contenido[i][j] + "    ";
            }
            resultado.innerHTML += "</br>";
        }
    } 
}

window.addEventListener("load", init);