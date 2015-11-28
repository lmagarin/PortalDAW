<?php include("HistorialNavegacionCookie.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Array Simple</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
        /**
        * Ejercicio que muestra los diez primeros numeros mediante foreach.
        * @author Rafa Miranda
        * @version 1.0
        */
        $numeros = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
        foreach($numeros as $valor){
            echo "$valor</br>";
        }
        
        echo "</br><a href='../ejerciciosServidor/vercodigo.php?src=ArraySimple.php'>Ver Código Fuente</a>";
        echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>