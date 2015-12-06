<?php

/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 04/12/2015
 * Time: 9:42
 */
class Menu
{
    private $_opciones;
    private $_textoOpcion;

    public function __construct($opciones,$textoOpcion)
    {
        $this -> _opciones = $opciones;
        $this -> _textoOpcion = [];
    }

}


?>