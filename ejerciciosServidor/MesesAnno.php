<?php include("HistorialNavegacionCookie.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Meses del Año</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
        /**
        * Ejercicio que muestra los meses del año mediante foreach.
        * @author Rafa Miranda
        * @version 1.0
        */
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                    "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        foreach($meses as $valor){
            echo "Mes: $valor</br>";
        }
        
        echo "</br><a href='../ejerciciosServidor/vercodigo.php?src=MesesAnno.php'>Ver Código Fuente</a>";
        echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>