<?php include("HistorialNavegacionCookie.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Carta Restaurante</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
        /**
        * Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres. Almacenar información incluyendo foto y
        * mostrar los menús disponibles. Mostrar el precio del menú suponiendo que éste se calcula sumando el precio de cada
        * uno de los platos incluidos y con un descuento del 20 %.
        * @author Rafa Miranda
        * @version 1.0
        */
        echo "<h1>Menú Restaurante</h1>";
        $carta = array(
                    "Primero"=>array(
                        array("Nombre"=>"Ensalada", "Foto"=>"salad.png", "Precio"=>"9"),
                        array("Nombre"=>"Sopa", "Foto"=>"soup.png", "Precio"=>"8"),
                        array("Nombre"=>"Pasta", "Foto"=>"pasta.png", "Precio"=>"7"),
                        ),
                    "Segundo"=>array(
                        array("Nombre"=>"Cordon Bleu", "Foto"=>"cordon_bleu.png", "Precio"=>"8"),
                        array("Nombre"=>"Paella", "Foto"=>"paella.png", "Precio"=>"9"),
                        array("Nombre"=>"Solomillo Ternera", "Foto"=>"beef.png", "Precio"=>"12"),
                        array("Nombre"=>"Calamares", "Foto"=>"calamari.png", "Precio"=>"7"),
                        array("Nombre"=>"Fritura Variada", "Foto"=>"fritura.png", "Precio"=>"10"),
                        ),
                    "Postre"=>array(
                        array("Nombre"=>"Fruta", "Foto"=>"fruit.png", "Precio"=>"2"),
                        array("Nombre"=>"Crema Catalana", "Foto"=>"crema_catalana.png", "Precio"=>"3"),
                        array("Nombre"=>"Tarta", "Foto"=>"cake.png", "Precio"=>"4"),
                        ),
                    );

        echo "<table border='1' style='border-collapse:collapse; text-align:center;'>
        <th colspan='3' bgcolor='#000000'><font color='white'>Primero</font></th>
        <th colspan='3' bgcolor='#000000'><font color='white'>Segundos</font></th>
        <th colspan='3' bgcolor='#000000'><font color='white'>Postres</font></th>";
        echo "<tr bgcolor='#000000'><th><font color='white'>Nombre</font></th><th><font color='white'>Foto</font></th>
        <th><font color='white'>Precio (€)</th>
        <th><font color='white'>Nombre</font></th><th><font color='white'>Foto</font></th>
        <th><font color='white'>Precio (€)</font></th>
        <th><font color='white'>Nombre</font></th><th><font color='white'>Foto</font></th>
        <th><font color='white'>Precio (€)</font></th>
        <th><font color='white'>Precio Menú (€)</font></th></tr>";

        foreach($carta["Primero"] as $primeros){
            foreach($carta["Segundo"] as $segundos){
                foreach($carta["Postre"] as $postres){
                    echo "<tr><td bgcolor='#FCFFCD'>".$primeros["Nombre"]."</td><td bgcolor='#FCFFCD'><img src=../images/".$primeros['Foto'].
                    " style='width:60px; height:50px;'></td><td bgcolor='#FCFFCD'>".$primeros["Precio"]."</td>";
                    echo "<td bgcolor='#FFD2D2'>".$segundos["Nombre"]."</td><td bgcolor='#FFD2D2'><img src=../images/".$segundos['Foto'].
                    " style='width:60px; height:50px;'></td><td bgcolor='#FFD2D2'>".$segundos["Precio"]."</td>";
                    echo "<td bgcolor='#DFE7FF'>".$postres["Nombre"]."</td><td bgcolor='#DFE7FF'><img src=../images/".$postres['Foto'].
                    " style='width:60px; height:50px;'></td><td bgcolor='#DFE7FF'>".$postres["Precio"]."</td>
                    <td bgcolor='#C5FFB8'><strong>".($primeros["Precio"]+$segundos["Precio"]+$postres["Precio"])*0.8."</strong></td></tr>";
                }
            }
        }
        echo "</table>";

        echo "</br><a href='../ejercicios/vercodigo.php?src=CartaRestaurante.php'>Ver Código Fuente</a>";
        echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>