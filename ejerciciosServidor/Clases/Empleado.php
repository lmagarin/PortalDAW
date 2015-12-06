<?php

/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 04/12/2015
 * Time: 9:42
 */
class Empleado
{
    private $_nombre;
    private $_sueldo;
    private $_apellidos;

    public function __construct($nombre,$apellidos,$sueldo)
    {
        $this -> _nombre = $nombre;
        $this -> _apellidos = $apellidos;
        $this -> _sueldo = $sueldo;
    }

    public function pagarImpuestos()
    {
        if($this -> _sueldo > 3000){
            return $this -> _nombre . " tiene que pagar impuestos.";
        }
        else{
            return $this -> _nombre . " no tiene que pagar impuestos.";
        }
    }
}
?>