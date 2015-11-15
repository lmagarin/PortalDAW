function abrirVentana(){
    var nuevaVentana = window.open("","","height=400,width=800,top=0,left=0");
    nuevaVentana.document.write("<html>" +
                                    "<head>" +
                                    "<title>Ventana de Prueba</title>" +
                                    "</head>" +
                                    "<body>" +
                                        "<p>Se han usado las siguiente propiedades:</p>" +
                                            "<ul>" +
                                                "<li>height=200</li>" +     
                                                "<li>width=300</li>" +
                                            "</ul>" +
                                    "</body>" +
                                "</html>");
    nuevaVentana.document.close();
}

window.addEventListener("load", function(){
    document.getElementById("boton").addEventListener("click", abrirVentana);
});