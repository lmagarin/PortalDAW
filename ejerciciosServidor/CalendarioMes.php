<?php include("HistorialNavegacionCookie.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Calendario Mes</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
            /**
            * Ejercicio que muestra el calendario de un mes y año concreto.
            * @author Rafa Miranda
            * @version 1.0
            */
            $annoDado = 2017;
            $mesDado = 02;
            $fechaReferencia = '2015-09-21';
            $segundos = strtotime($annoDado.'-'.$mesDado.'-'.'1') - strtotime($fechaReferencia);
            $diferenciaDias = (int)($segundos / 86400);
            $diaComienzo = $diferenciaDias % 7;
            switch($mesDado){
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    $diasMes = 31;
                    break;
                case 2:
                    if (($annoDado % 4 != 0) && ($annoDado % 100 != 0) || ($annoDado % 400 == 0)){
                        $diasMes = 29;
                    }
                    else {
                        $diasMes = 28;
                    }
                    break;
                default:
                    $diasMes = 30;
            }
            echo "<p>Mes: $mesDado</br>Año: $annoDado</p><table border='1' style='width:400px;
            border-collapse:collapse; text-align:center;'><tr><td><strong>L</strong></td><td><strong>M</strong></td>
            <td><strong>X</strong></td><td><strong>J</strong></td><td><strong>V</strong></td>
            <td><strong>S</strong></td><td><strong>D</strong></td></strong></tr><tr>";
            $i = 0;
            $dia = 1;
            while($i < 37){
                if($i % 7 == 0) {
                    echo "</tr><tr>";
                }
                if($i >= $diaComienzo && $dia <= $diasMes){
                    echo "<td>$dia</td>";
                    $dia++;
                }
                else {
                    echo "<td>&nbsp</td>";
                }
                $i++;
            }
            echo "</table><p><a href='../ejerciciosServidor/vercodigo.php?src=CalendarioMes.php'>Ver Código Fuente</a>";
            echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a></p>";
        ?>
    </body>
</html>