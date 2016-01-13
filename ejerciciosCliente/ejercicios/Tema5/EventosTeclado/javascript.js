window.addEventListener("load", function(){
    function muestraInformacion(mensaje) {
        document.getElementById("info").innerHTML = '<h1>'+mensaje[0]+'</h1>';
        for(var i=1; i<mensaje.length; i++) {
            document.getElementById("info").innerHTML += '<p>'+mensaje[i]+'</p>';
        }
    }

    function alfanumericas(elEvento) {
    	var evento = elEvento || window.event;
        document.getElementById('info').style.backgroundColor = '#CCE6FF';
        var caracter = evento.charCode || evento.keyCode;
        var letra = String.fromCharCode(caracter);
        var codigo = letra.charCodeAt(0);
        muestraInformacion(['Teclado', 'Carácter ['+letra+']', 'Código ['+codigo+']']);
    }

    function especiales(elEvento){ //siempre entra en "else" asi que pulse la tecla especial que pulse siempre me da "right".
    	var event = elEvento || window.event;
		if(event.ctrlKey) {
		    if (event.ctrlLeft) {
		    	muestraInformacion(['Teclado', 'Carácter [ctrl-left]', 'Código [?]']);
		    }
		    else {
		    	muestraInformacion(['Teclado', 'Carácter [ctrl-right]', 'Código [?]']);
		    }
		}
	    if(event.altKey) {
	        if (event.altLeft) {
	        	muestraInformacion(['Teclado', 'Carácter [alt-left]', 'Código [?]']);
	        }
	        else {
	        	muestraInformacion(['Teclado', 'Carácter [alt-right]', 'Código [?]']);
	        }
	    }
	    if(event.shiftKey) {
	    	if (event.shiftLeft) {
	    		muestraInformacion(['Teclado', 'Carácter [shift-left]', 'Código [?]']);
	    	}
	    	else{
	    		muestraInformacion(['Teclado', 'Carácter [shift-right]', 'Código [?]']);
	    	}
    	}
    }

    document.addEventListener("keypress", alfanumericas);
    document.addEventListener("keydown", especiales);
});