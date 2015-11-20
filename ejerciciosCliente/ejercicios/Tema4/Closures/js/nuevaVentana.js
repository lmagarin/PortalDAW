function abrirNuevaVentana(){
    var nuevaVentana = window.open("", "Ventana Primos", "toolbar=yes, scrollbars=yes,"+
        "resizable=yes, top=100, left=200, width=700, height=500");
    nuevaVentana.document.write(
                "<html>"+
                    "<head>"+
                        "<title>Ventana Primos</title>"+
                        "<script type='text/javascript' src='js/primos.js'></script>"+
                    "</head>"+
                    "<body>"+
                        "<h2>Numeros primos: </h2><p id='primos'></p>"+
                        "<h2>Suma acumulada: </h2><p id='suma'></p>"+
                    "</body>"+
                "</html>");
    nuevaVentana.document.close();
}

window.addEventListener("load", function(){
    document.getElementById("enviar").addEventListener("click", function(){
        abrirNuevaVentana();
    });
});