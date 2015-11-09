<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    session_start();
    if(!isset($_SESSION['ok'])){
        header("Location:Error.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Información Continentes, Países, Capitales y Banderas</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
        /**
        * Crear array que muestre información sobre continentes, países, capitales y banderas.
        * @author Rafa Miranda
        * @version 1.0
        */

        $geopolitica = array(
                            array("Continente"=>"Europa", "Países"=>array(
                                array("País"=>"España", "Capital"=>"Madrid", "Bandera"=>"spain.png"),
                                array("País"=>"Francia", "Capital"=>"Paris", "Bandera"=>"france.png"),
                                array("País"=>"Italia", "Capital"=>"Roma", "Bandera"=>"italy.png"),                                
                                ),
                            ),
                            array("Continente"=>"Asia", "Países"=>array(
                                array("País"=>"Japon", "Capital"=>"Tokio", "Bandera"=>"japan.png"),
                                array("País"=>"Irán", "Capital"=>"Teherán", "Bandera"=>"iran.png"),
                                ),
                            ),
                            array("Continente"=>"America", "Países"=>array(
                                array("País"=>"USA", "Capital"=>"Washintong", "Bandera"=>"usa.png"),
                                array("País"=>"Argentina", "Capital"=>"Buenos Aires", "Bandera"=>"argentina.png"),
                                ),
                            ),
                        );

        echo "<table border='1' style='border-collapse:collapse; text-align:center;'>
        <tr bgcolor='#000000'><th><font color='white'>Continente</font></th><th><font color='white'>País</font>
        </th><th><font color='white'>Capital</font></th><th><font color='white'>Bandera</font></th></font>";
        
        foreach($geopolitica as $continentes){
            $tamano = sizeof($continentes["Países"])+1;
            echo "<tr><td rowspan=".$tamano.">".$continentes['Continente']."</td></tr>";
            foreach($continentes["Países"] as $valor){
                    echo "<tr><td>".$valor['País']."</td><td>".$valor['Capital']."</td>
                    <td><img src=../images/".$valor['Bandera']." style='width:20px; height:20px;'></td></tr>";
            }
        }
        echo "</table>";

        echo "</br><a href='../ejercicios/vercodigo.php?src=InfoCapitales.php'>Ver Código Fuente</a>";
        echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>