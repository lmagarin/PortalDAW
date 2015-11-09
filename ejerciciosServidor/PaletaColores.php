<?php include("HistorialNavegacionCookie.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Paleta Colores</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
            /**
            * Ejercicio que muestra la paleta de colores y enlaza y aplica color en el cuerpo
            * del ejercicio de las cabeceras estacionales.
            * @author Rafa Miranda
            * @version 1.0
            */
            const INCREMENTO = 15;
            echo "<table>";
            for($i=0;$i<=255;$i+=INCREMENTO){
                echo "<tr>";
                for($j=0;$j<=255;$j+=INCREMENTO){
                    echo "<tr>";
                    for($k=0;$k<=255;$k+=INCREMENTO){
                        $rgb = array($i,$j,$k);
                        $hex = str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
                        $hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
                        $hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);
                        echo "<td bgcolor='#$hex';><a href='../ejercicios/CabeceraEstacional.php?color=$hex'
                        style='text-decoration:none; color:#FFFFFF;'>#$hex</a></td>";
                    }
                    echo "</tr>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<a href='../ejercicios/vercodigo.php?src=PaletaColores.php'>Ver Código Fuente</a>";
            echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>