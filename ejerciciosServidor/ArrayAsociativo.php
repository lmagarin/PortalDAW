<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Asignaturas y Horas Lectivas</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
        /**
        * Crear array asociativo para almacenar las asignaturas y sus horas semanales.
        * @author Rafa Miranda
        * @version 1.0
        */
        $asignaturas = array("DWESE"=>"8", "DWECL"=>"6", "DIW"=>"6", "DAW"=>"3", "EIE"=>"4", "HLC"=>"4");

        foreach($asignaturas as $clave=>$valor){
            echo "Asignatura: $clave. Horas: $valor.</br>";
        }
        
        echo "</br><a href='../ejercicios/vercodigo.php?src=ArrayAsociativo.php'>Ver Código Fuente</a>";
        echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>