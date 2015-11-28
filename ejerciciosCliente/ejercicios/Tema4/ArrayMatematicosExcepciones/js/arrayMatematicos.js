function init(){
    var filas1;
    var columnas1;
    var filas2;
    var columnas2;
    var array1;
    var array2;
    var operacion;

    document.getElementById("operacion").addEventListener("focusout", generarFormulario);

    function ExcepcionTamano(mensaje) {
        this.mensaje = mensaje;
    }

    function ExcepcionEntradaDato(mensaje) {
        this.mensaje = mensaje;
    }

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
        var arraySuma = new ArraysMatematicos(this.filas, this.columnas);
        for (var i = 0; i < this.filas; i++) {
            for (var j = 0; j < this.columnas; j++) {
                arraySuma.contenido[i][j] = this.contenido[i][j] + matriz.contenido[i][j];
            }
        }
        return arraySuma;
    };

    ArraysMatematicos.prototype.restar = function(matriz) {
        var arrayResta = new ArraysMatematicos(this.filas, this.columnas);
        for (var i = 0; i < this.filas; i++) {
            for (var j = 0; j < this.columnas; j++) {
                arrayResta.contenido[i][j] = this.contenido[i][j] - matriz.contenido[i][j];
            }
        }
        return arrayResta;
    };

    ArraysMatematicos.prototype.trasponer = function() {
        var arrayTraspuesta = new ArraysMatematicos(this.columnas, this.filas);
        for(var i = 0; i < arrayTraspuesta.filas; i++){
            for(var j = 0;j < arrayTraspuesta.columnas; j++){
                arrayTraspuesta.contenido[i][j] = this.contenido[j][i];
            }
        }
        return arrayTraspuesta;
    };

    ArraysMatematicos.prototype.multiplicar = function(matriz) {
        var arrayProducto = new ArraysMatematicos(this.filas, matriz.columnas);
        for (var i = 0; i < this.filas; i++){
            for (var j = 0; j < matriz.columnas; j++){
                for (var k = 0; k < this.columnas; k++) {
                    arrayProducto.contenido[i][j] += this.contenido[i][k] * matriz.contenido[k][j];
                }
            }
        }
        return arrayProducto;
    };

    function validacionEntradaNAN(entrada){
        if(isNaN(entrada)) {
            throw new ExcepcionEntradaDato("Debe introducir números.");
        }
        else{
            return true;
        }
    }

    function validacionEntradaPositivo(entrada){
        if(entrada <= 0){
            throw new ExcepcionEntradaDato("Debe introducir números positivos.");
        }
        else{
            return true;
        }
    }

    function validacionTamano(filas1, columnas1, filas2, columnas2){
        if(operacion === "sumar" || operacion === "restar") {
            if (filas1 != filas2 || columnas1 != columnas2) {
                throw new ExcepcionTamano("Filas y columnas de ambas matrices deben coincidir.");
            }
            else {
                return true;
            }
        }
        if(operacion === "multiplicar"){
            if (filas1 != columnas2) {
                throw new ExcepcionTamano("Filas de la matriz primera deben ser igual a columnas de segunda matriz.");
            }
            else {
                return true;
            }
        }
    }

    function generarFormulario(){
        operacion = document.getElementById("operacion").value;
        var tamano = document.getElementById("tamano");
        var errorTamano = document.getElementById("errorTamano");
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
        document.getElementById("generar").addEventListener("click", function(){
            try{
                errorTamano.innerHTML = "";
                filas1 = parseInt(document.getElementById("filas1").value);
                columnas1 = parseInt(document.getElementById("columnas1").value);
                if(operacion != "trasponer") {
                    filas2 = parseInt(document.getElementById("filas2").value);
                    columnas2 = parseInt(document.getElementById("columnas2").value);
                    if (validacionEntradaNAN(filas1) && validacionEntradaNAN(columnas1) && validacionEntradaNAN(filas2)
                        && validacionEntradaNAN(columnas2) && validacionEntradaPositivo(filas1) &&
                        validacionEntradaPositivo(columnas1) && validacionEntradaPositivo(filas2) &&
                        validacionEntradaPositivo(columnas2)) {
                        if (validacionTamano(filas1, columnas1, filas2, columnas2)) {
                            generarCasillas();
                        }
                    }
                }
                else{
                    if (validacionEntradaNAN(filas1) && validacionEntradaNAN(columnas1) &&
                        validacionEntradaPositivo(filas1) && validacionEntradaPositivo(columnas1)) {
                        generarCasillas();
                    }
                }
            }
            catch(e){
                errorTamano.innerHTML = e.mensaje;
            }
        });
    }

    function generarCasillas(){
        filas1 = parseInt(document.getElementById("filas1").value);
        columnas1 = parseInt(document.getElementById("columnas1").value);
        var valores1 = document.getElementById("valores_matriz1");
        var enviar = document.getElementById("enviar");
        var errorValores = document.getElementById("errorValores");
        var arrayValores = [];
        if(operacion != "trasponer"){
            filas2 = parseInt(document.getElementById("filas2").value);
            columnas2 = parseInt(document.getElementById("columnas2").value);
            var valores2 = document.getElementById("valores_matriz2");
            valores1.innerHTML += "Matriz 1:</br>";
            for (var i = 0; i < filas1; i++) {
                for (var j = 0; j < columnas1; j++) {
                    valores1.innerHTML += "<input type='text' id='matriz1f" + i + "c" + j + "'/>";
                    arrayValores.push(parseInt(document.getElementById("matriz1f" + i + "c" + j + "").value));
                }
                valores1.innerHTML += "</br>";
            }
            valores2.innerHTML += "Matriz 2:</br>";
            for (var i = 0; i < filas2; i++) {
                for (var j = 0; j < columnas2; j++) {
                    valores2.innerHTML += "<input type='text' id='matriz2f" + i + "c" + j + "'/>";
                    arrayValores.push(parseInt(document.getElementById("matriz2f" + i + "c" + j + "").value));
                }
                valores2.innerHTML += "</br>";
            }
        }
        else {
            valores1.innerHTML += "Matriz 1:</br>";
            for (var i = 0; i < filas1; i++) {
                for (var j = 0; j < columnas1; j++) {
                    valores1.innerHTML += "<input type='text' id='matriz1f" + i + "c" + j + "'/>";
                    arrayValores.push(parseInt(document.getElementById("matriz1f" + i + "c" + j + "").value));
                }
                valores1.innerHTML += "</br>";
            }
        }
        enviar.innerHTML = "<input type='button' class='submit' id='calcular' value='Enviar'>";
        document.getElementById("calcular").addEventListener("click", function(){
            var errorEntrada = false;
            try{
                errorValores.innerHTML = "";
                if(operacion === "trasponer") {
                    for (var i = 0; i < filas1; i++) {
                        for (var j = 0; j < columnas1; j++) {
                            if (!validacionEntradaNAN(parseInt(document.getElementById("matriz1f" + i + "c" + j + "").value))) {
                                errorEntrada = true;
                            }
                        }
                    }
                }
                else{
                    for (var i = 0; i < filas1; i++) {
                        for (var j = 0; j < columnas1; j++) {
                            if (!validacionEntradaNAN(parseInt(document.getElementById("matriz1f" + i + "c" + j + "").value))) {
                                errorEntrada = true;
                            }
                        }
                    }
                    for (var i = 0; i < filas2; i++) {
                        for (var j = 0; j < columnas2; j++) {
                            if (!validacionEntradaNAN(parseInt(document.getElementById("matriz2f" + i + "c" + j + "").value))) {
                                errorEntrada = true;
                            }
                        }
                    }
                }
                if(!errorEntrada) {
                    crearArrays();
                }
            }
            catch(e){
                errorValores.innerHTML = e.mensaje;
            }
        });
    }  

    function crearArrays(){
        if(operacion != "trasponer"){
            array1 = new ArraysMatematicos(filas1, columnas1);
            array2 = new ArraysMatematicos(filas2, columnas2);
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