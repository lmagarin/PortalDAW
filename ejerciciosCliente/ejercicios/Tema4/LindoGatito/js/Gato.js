/**
 * Crea una clase Gato, y a partir de ella crea tantos gatos como quiera el usuario.
 * Cada gato tendrá un nombre, una fecha de nacimiento, una raza y un peso (1-15). Cada vez que crees un objeto gato aparecerá una ventana nueva con una imagen que cambiará en función de su estado (comiendo, durmiendo y jugando, que es su estado habitual). El usuario podrá averiguar la edad del gato partiendo de un evento.
 * Evita las cajas de texto
 * No puedes usar ni alert ni prompt
 * Hazlo lo más dinámico posible.
 * Utiliza prototype para los métodos
 */
function Gato(nombre,raza,peso,dia,mes,ano){
    this.nombre = nombre;
    this.raza = raza;
    if(peso >= 1 && peso <= 15) {
        this.peso = parseInt(peso);
    }
    else{
        throw new ExcepcionPesoNoValido("El peso del gato debe estar entre 1 y 15");
    }
    this.dia = dia;
    this.mes = mes;
    this.ano = ano;
    this.rutaImagenRaza = "";
    this.imagenRaza();
    this.estado = "jugando";
    this.rutaImagenEstado = "";
    this.imagenEstado();
}

function ExcepcionPesoNoValido(mensaje){
    this.mensaje = mensaje;
}

Gato.prototype.comer = function(){
    if(this.estado === "muerto"){
        return;
    }
    else if(this.peso == 15){
        this.estado = "muerto";
        this.imagenEstado();
        return this.nombre + " ha muerto por gordaco.";
    }
    else {
        this.peso++;
        this.estado = "comiendo";
        this.imagenEstado();
        return this.nombre + " está comiendo, y su peso es: " + this.peso + "kg.";
    }
}

Gato.prototype.jugar = function(){
    if(this.estado === "muerto"){
        return;
    }
    else if(this.peso == 1){
        this.estado = "muerto";
        this.imagenEstado();
        return this.nombre + " ha muerto por hiperactivo y tirillas.";
    }
    else {
        this.peso--;
        this.estado = "jugando";
        this.imagenEstado();
        return this.nombre + " está jugando, y su peso es: " + this.peso + "kg.";
    }
}

Gato.prototype.dormir = function(){
    if(this.estado === "muerto"){
        return;
    }
    else{
        this.estado = "durmiendo";
        this.imagenEstado();
        return this.nombre + " está durmiendo, y su peso es: " + this.peso + "kg.";
    }
}

Gato.prototype.imagenRaza = function(){
    if(this.raza === "persa"){
        this.rutaImagenRaza = "images/persa.jpg";
    }
    else if(this.raza === "siames"){
        this.rutaImagenRaza = "images/siames.jpg";
    }
    else if(this.raza === "bengala"){
        this.rutaImagenRaza = "images/bengala.jpg";
    }
    else if(this.raza === "egipcio"){
        this.rutaImagenRaza = "images/egipcio.jpg";
    }
    else { // angora
        this.rutaImagenRaza = "images/angora.jpg";
    }
}

Gato.prototype.imagenEstado = function(){
    if(this.estado === "jugando"){
        this.rutaImagenEstado =  "images/jugando.jpg";
    }
    else if(this.estado === "comiendo"){
        this.rutaImagenEstado = "images/comiendo.jpg";
    }
    else if(this.estado === "durmiendo"){
        this.rutaImagenEstado = "images/durmiendo.jpg";
    }
    else { //muerto
        this.rutaImagenEstado = "images/muerto.jpg";
    }
}

Gato.prototype.mostrarInformacion = function () {
    return "<p>El gato <strong>" + this.nombre + "</strong>"
        + ", nació el <strong>" + this.dia + "/" + this.mes + "/" + this.ano + "</strong>"
        + ", es de raza <strong>" + this.raza + ",</strong><br>"
        + " pesa <strong>" + this.peso + " kg." + "</strong>"
        + " y está <strong>" + this.estado + "</strong></p>";
}