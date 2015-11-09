<?php include("HistorialNavegacionCookie.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Cabecera Estacional</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
        
    </head>

    <body>
       
        <header>
        </header>

        <section>
            <?php
            /**
            * Ejercicio que muestra el área de un círculo de radio determinado.
            * @author Rafa Miranda
            * @version 1.0
            */
            const PI = 3.1415;
            $radio = 5;
            $area = PI * $radio * $radio;
            echo "El área de tu círculo es:</br> $area</br>";
            echo "<a href='../ejercicios/vercodigo.php?src=AreaCirculo.php'>Ver Código Fuente</a>";
            echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
            ?>
        </section>

        <footer>
        </footer>

    </body>
</html>