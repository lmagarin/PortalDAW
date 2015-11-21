function Cliente(nombre, apellidos, dni){
    this.nombre = nombre;
    this.apellidos = apellidos;
    this.dni = dni;
}

function Elemento(producto, cantidad, precio){
    this.producto = producto;
    this.cantidad = cantidad;
    this.precio = precio;
}

function Factura(cliente, elementos){
  this.cliente = cliente;
  this.elementos = elementos;
  this.informacion = {baseImp: 0, iva: 21, total: 0, formaPago: "contado"};
}
 
Factura.prototype.calcularTotal = function() {
    for(var i=0; i<this.elementos.length; i++) {
        this.informacion.baseImp += this.elementos[i].cantidad * this.elementos[i].precio;
    }
    this.informacion.total = this.informacion.baseImp * (this.informacion.iva/100 + 1);
}
 
Factura.prototype.mostrarTotal = function() {
    this.calcularTotal();
    console.log("Total = " + this.informacion.total + " €");
}

var miCliente = new Cliente("Rafa", "Miranda Ibañez", "44365236X");
var misElementos = [new Elemento("barra pan", "3", "1"), new Elemento("leche", "2", "3"), new Elemento("chocolate", "1", "2")];
var miFactura = new Factura(miCliente, misElementos);
miFactura.mostrarTotal();

