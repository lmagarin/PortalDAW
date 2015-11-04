<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Cabecera Estacional</title>
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
        
        //$codigo1 = "<header><div style='width: 100%; height: 200px; background-color:";
        //$codigo2 = ";><h1 style='display: inline; font-family: sans-serif; color: #FFFFFF'>";
        //$codigo3 = "</h1><img style='float:right; height:200px' src='./images/";
        //$codigo4 = ".png'/></div></header>";

        $fecha = getdate();
        $diaAnno = $fecha['yday'];
        $colorCabecera = '#FFF';
        
        if(isset($_GET['color'])){
        $colorCabecera = '#'.$_GET['color'];
        }
        else {
            if($diaAnno > 355 || $diaAnno < 80){
                $colorCabecera = '#8E97AB';
            }
            elseif($diaAnno >= 80 && $diaAnno <=172) {
                $colorCabecera = '#99B66F';
            }
            elseif($diaAnno >= 172 && $diaAnno <= 266) {
                $colorCabecera = '#0871DF';
            }
            else {
                $colorCabecera = '#F14200';
            }
        }

        if($diaAnno > 355 || $diaAnno < 80){
            echo "<header><div style='width: 100%; height: 200px; background-color: $colorCabecera;'>
                <h1 style='display: inline; font-family: sans-serif; color: #FFFFFF'>Invierno</h1>
                <img style='float:right; height:200px' src='../images/invierno.png'/></div></header>";
        }
        elseif($diaAnno >= 80 && $diaAnno <=172) {
            echo "<header><div style='width: 100%; height: 200px; background-color: $colorCabecera;'>
                <h1 style='display: inline; font-family: sans-serif; color: #FFFFFF'>Primavera</h1>
                <img style='float:right; height:200px' src='../images/primavera.png'/></div></header>";
        }
        elseif($diaAnno >= 172 && $diaAnno <= 266) {
            echo "<header><div style='width: 100%; height: 200px; background-color: $colorCabecera;'>
                <h1 style='display: inline; font-family: sans-serif; color: #FFFFFF'>Verano</h1>
                <img style='float:right; height:200px' src='../images/verano.png'/></div></header>";
        }
        else {
            echo "<header><div style='width: 100%; height: 200px; background-color: $colorCabecera;'>
                <h1 style='display: inline; font-family: sans-serif; color: #FFFFFF'>Otoño</h1>
                <img style='float:right; height:200px' src='../images/otoño.png'/></div></header>";
            //echo $codigo.'#F14200'.$codigo2.'Otoño'.$codigo3.'otoño'.$codigo4;
        }
        echo "</br><a href='../ejercicios/vercodigo.php?src=CabeceraEstacional.php'>Ver Código Fuente</a>";
        echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>