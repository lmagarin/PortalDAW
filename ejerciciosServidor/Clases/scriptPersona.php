<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 02/12/2015
 * Time: 10:29
 */
include("Persona.php");

$persona = new Persona("Rafa", "Miranda", "14-07-1980");

echo $persona->mostrarEdad();