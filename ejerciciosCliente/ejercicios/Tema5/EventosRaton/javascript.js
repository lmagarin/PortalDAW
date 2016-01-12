window.addEventListener("load", function(){
    function muestraInformacion(mensaje) {
        document.getElementById("info").innerHTML = '<h1>'+mensaje[0]+'</h1>';
        for(var i=1; i<mensaje.length; i++) {
            document.getElementById("info").innerHTML += '<p>'+mensaje[i]+'</p>';
        }
    }

    function informacion(elEvento) {
        var evento = elEvento || window.event;
        switch(evento.type) {
            case 'mousemove':
                var ie = navigator.userAgent.toLowerCase().indexOf('msie')!=-1; // Detección si navegador es IE u otro.
                var xRelativa, yRelativa, xAbsoluta, yAbsoluta;
                xAbsoluta = evento.pageX;
                yAbsoluta = evento.pageY;
                xRelativa = evento.clientX;
                yRelativa = evento.clientY;
                muestraInformacion(['Ratón', 'Navegador [' + xRelativa + ', ' + yRelativa +
                    ']', 'Pagina [' + xAbsoluta + ', ' + yAbsoluta + ']']);
                //document.getElementById('evento').innerHTML = '<h1>Mouse Move</h1>'; // interfiere con eventos click y dblclick
                break;
            case 'click':
                document.getElementById('info').style.backgroundColor = '#FF9621';
                document.getElementById('evento').innerHTML = '<h1>Click</h1>';
                break;
            case 'dblclick':
                document.getElementById('info').style.backgroundColor = '#FF0021';
                document.getElementById('evento').innerHTML = '<h1>Doble Click</h1>';
                break;
            case 'mousedown':
                document.getElementById('info').style.backgroundColor = '#FF3321';
                document.getElementById('evento').innerHTML = '<h1>Mouse Down</h1>';
                break;
            case 'mouseup':
                document.getElementById('info').style.backgroundColor = '#FF2221'; // aparentemente no funciona
                document.getElementById('evento').innerHTML = '<h1>Mouse Up</h1>';
                break;
            case 'mouseout':
                document.getElementById('info').style.backgroundColor = '#FF4421';
                document.getElementById('evento').innerHTML = '<h1>Mouse Out</h1>';
                break;
            case 'mouseover':
                document.getElementById('info').style.backgroundColor = '#FF5521';
                document.getElementById('evento').innerHTML = '<h1>Mouse Over</h1>';
                break;
        }
    }
    document.addEventListener("mousemove", informacion);
    document.addEventListener("click", informacion);
    document.addEventListener("dblclick", informacion);
    document.addEventListener("mousedown", informacion);
    document.addEventListener("mouseup", informacion);
    document.addEventListener("mouseout", informacion);
    document.addEventListener("mouseover", informacion);
});

