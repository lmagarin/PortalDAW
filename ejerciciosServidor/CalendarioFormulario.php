<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Calendario Formulario</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
        /**
        * Ejercicio que muestra el calendario de un mes y año recogidos mediante formulario.
        * @author Rafa Miranda
        * @version 1.0
        */
        $mes = "";
        $anno = "";
        $errMes = "";
        $errAnno = "";
        $patronMes = "/^(0[1-9]|1[012])$/";
        $patronAnno = "/^(191[6-9]|19[2-9]\d|[2-9]\d{3})$/";

        function mostrarFormulario($mes,$anno,$errMes,$errAnno){
            echo "<form action='CalendarioFormulario.php' method='post' style='font-family:sans-serif; float:left;'>
                        <fieldset style='display:inline; background-color:#AED1FF;'>
                            <legend><strong>Ver Almanaque (1916 en adelante)</strong></legend>
                                Mes: <input type='text' name='mes' value='".$mes."'/>
                                <font color='red'>".$errMes."</font></br></br>
                                Año: <input type='text' name='anno' value='".$anno."'/>
                                <font color='red'>".$errAnno."</font></br></br>
                                <input type='submit' name='enviar' value='OK!'/>
                                <input type='reset' name='borrar' value='Borrar Datos'/>
                        </fieldset>
                    </form> ";
        }

        if(isset($_POST['enviar'])){
            $mes = $_POST['mes'];
            $anno = $_POST['anno'];
        }

        if($mes == "" || !preg_match($patronMes, $mes)) {
            $errMes = "* Introduzca un mes correcto.";
        }
        else {
            $errMes = "";            
        }
        if($anno == "" || !preg_match($patronAnno, $anno)){
            $errAnno = "* Introduzca un año correcto.";
        }
        else {
            $errAnno = "";            
        }
        if(!isset($_POST['enviar'])){
            $errMes = "";
            $errAnno = "";
        }

        function mesCadena($mes){
            switch($mes){
                case 01:
                    return "Enero";
                    break;
                case 02:
                    return "Febrero";
                    break;
                case 03:
                    return "Marzo";
                    break;
                case 04:
                    return "Abril";
                    break;
                case 05:
                    return "Mayo";
                    break;
                case 06:
                    return "Junio";
                    break;
                case 07:
                    return "Julio";
                    break;
                case 08:
                    return "Agosto";
                    break;
                case 09:
                    return "Septiembre";
                    break;
                case 10:
                    return "Octubre";
                    break;
                case 11:
                    return "Noviembre";
                    break;
                case 12:
                    return "Diciembre";
                    break;
            }
        }
        if($mes == "" || $anno == ""){
            mostrarFormulario($mes,$anno,$errMes,$errAnno);
        }
        else {
            mostrarFormulario($mes,$anno,$errMes,$errAnno);
            $fechaReferencia = '1915-12-27';
            $segundos = strtotime($anno.'-'.$mes.'-'.'1') - strtotime($fechaReferencia);
            $diferenciaDias = (int)($segundos / 86400);
            $diaComienzo = $diferenciaDias % 7;
            switch($mes){
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
                    if (($anno % 4 != 0) && ($anno % 100 != 0) || ($anno % 400 == 0)){
                        $diasMes = 29;
                    }
                    else {
                        $diasMes = 28;
                    }
                    break;
                default:
                    $diasMes = 30;
            }
            echo "<table border='1' style='width:400px; margin-left:30px; border-collapse:collapse; text-align:center; float:left;'>
            <tr style='background-color:#4F8AFF;'><td colspan=7>".mesCadena($mes)." $anno</td></tr>
            <tr style='background-color:#000000; color:white'><td><strong>L</strong></td><td><strong>M</strong></td><td><strong>X</strong></td><td>
            <strong>J</strong></td><td><strong>V</strong></td><td><strong>S</strong></td>
            <td><strong>D</strong></td></strong></tr><tr>";
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
        }
        ?>
        </table><p style="clear:both;"><a href="../ejercicios/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>