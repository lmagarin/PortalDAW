window.addEventListener("load", function(){
    var primos = [];
    var acumulador = 0;

    function esPrimo(primo, anterior){
        if (anterior === 1){
            return true;
        }
        if(primo%anterior === 0){
            return false;
        }
        return esPrimo(primo, anterior-1);
    }

    function annadirPrimos(){
        for (var i = 1; i < 101; i++) {
            if(esPrimo(i, i-1)){
                primos.push(i);
            }
        }
    }

    function acumularPrimos(){
        for (var i = 0; i < primos.length; i++) {
            acumulador += primos[i];
        }
    }

    function mostrarPrimos(){
        document.getElementById("primos").innerHTML = primos;
        document.getElementById("suma").innerHTML = acumulador;
    }

    annadirPrimos();
    acumularPrimos();
    mostrarPrimos();
});