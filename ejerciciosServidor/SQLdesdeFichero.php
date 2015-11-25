<?php
    /*$nombreFichero = "";
    $errFichero = "";
    $error = false;*/
    $file;

    //include("Funciones/test_input.php");
/*
    if(isset($_POST['enviar'])){
        if(empty($_POST['fichero'])){
            $errFichero = "* Fichero requerido";
            $error = true;
        }
        else {
            $nombreFichero = test_input($_POST['fichero']);
        }
        if(empty($_POST['prefijo'])){
            $errPrefijo = "* Prefijo requerido";
            $error = true;
        }
        else {
            $prefijo = test_input($_POST['fichero']);
        }
        if(empty($_POST['fichero'])){
            $errFichero = "* Fichero requerido";
            $error = true;
        }
        else {
            $nombreFichero = test_input($_POST['fichero']);
        }
        if(empty($_POST['fichero'])){
            $errFichero = "* Fichero requerido";
            $error = true;
        }
        else {
            $nombreFichero = test_input($_POST['fichero']);
        }
    }*/

    $file = fopen("ficheroAlumnos.txt", "r");
    while(!feof($file)){
        $alumnos = explode(",", fgets($file));
        echo "Apellidos: " . $alumnos[0] . " " . $alumnos[1] . " - Nombre: " . $alumnos[2];

    }

?>