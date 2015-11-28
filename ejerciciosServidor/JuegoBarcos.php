<?php include("HistorialNavegacionCookie.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Juego Barcos</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
        /**
        * Define un array que permita almacenar y mostrar la siguiente información:
        * Tablero para jugar al juego de los barcos.
        * @author Rafa Miranda
        * @version 1.0
        */
        echo "<h1 style='display:inline; color:#FFFFFF; background-color:#000000; text-align:center; position:relative;
        left:110px;'>Hundir la Flota</h1>";
        $tablero = array(
                    "A"=>array("agua", "X", "X", "X", "X", "agua", "agua"),
                    "B"=>array("agua", "agua", "agua", "agua", "agua","agua", "agua"),
                    "C"=>array("agua", "agua", "agua", "agua", "X", "agua", "agua"),
                    "D"=>array("agua","agua", "agua", "agua", "X", "agua", "agua"),
                    "E"=>array("X", "X", "X", "agua", "agua", "agua", "agua"),
                    "F"=>array("agua", "agua", "agua", "agua", "X", "X", "X"),
                    "G"=>array("agua", "agua", "agua", "agua", "agua", "agua", "agua")
                );
        echo "<table border='1' bgcolor='#3399FF' style='font-size:25px; text-align:center; border:solid; border-collapse:collapse;'>";
        echo "<tr style='background-color:#FFFFFF'><td></td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td></tr>";
        $i = 1;
        foreach($tablero as $clave=>$fila){
            echo "<tr><td style='background-color:#FFFFFF;'>".$i."</td>";
            foreach($fila as $valor){
                if($valor == "agua"){
                    echo "<td><img src='../images/waves.png' style='width:60px; height:60px;'></td>";
                }
                else {
                    echo "<td bgcolor='#CC0000'><img src='../images/barco.png' style='width:60px; height:60px;'></td>";
                }
            }
            $i += 1;
            echo "</tr>";
        }
        echo "</table>";
        
        echo "</br><a href='../ejerciciosServidor/vercodigo.php?src=JuegoBarcos.php'>Ver Código Fuente</a>";
        echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>