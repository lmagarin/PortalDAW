function abrirMultiplesVentanas(){
    for (var i = 1; i < 6; i++) {
        var nuevaVentana = window.open("","","height=200,width=200,top="+i*10+",left="+i*10+"");
        nuevaVentana.document.write("<html>" +
                                        "<head>" +
                                        "<title>Ventana"+i+"</title>" +
                                        "<script type='text/javascript' src='cerrar_ventana.js'></script>" +
                                        "</head>" +
                                        "<body>" +
                                            "Ventana "+i+"&nbsp;&nbsp;<input type='button' id='cerrar' value='Cerrar'>" +
                                        "</body>" +
                                    "</html>");
        nuevaVentana.document.close();
    };
}

window.addEventListener("load", function(){
    document.getElementById("boton").addEventListener("click", abrirMultiplesVentanas);
});