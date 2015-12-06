<?php

/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 02/12/2015
 * Time: 9:42
 */
class Persona
{
    private $_nombre;
    private $_apellidos;
    private $_nacimiento;

    public function __construct($nombre,$apellidos,$nacimiento)
    {
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> nacimiento = $nacimiento;
    }

    public function calcularEdad()
    {
        $arrayNacimiento = explode("-", $this -> nacimiento);

        $diaNac = intval($arrayNacimiento[0]);
        $mesNac = intval($arrayNacimiento[1]);
        $anoNac = intval($arrayNacimiento[2]);

        $fechaActual = getdate();
        $diaActual = $fechaActual["mday"];
        $mesActual = $fechaActual["mon"];
        $anoActual = $fechaActual["year"];

        //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

        if (($mesNac == $mesActual) && ($diaNac > $diaActual)) {
            $anoActual = ($anoActual - 1);
        }

        //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

        if ($mesNac > $mesActual) {
            $anoActual = ($anoActual - 1);
        }

        //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

        $edad = ($anoActual - $anoNac);

        return $this -> nombre . " tienes " . $edad . " años.";
    }
}