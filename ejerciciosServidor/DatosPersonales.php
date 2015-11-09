<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    session_start();
    if(!isset($_SESSION['ok'])){
        $_SESSION['ok'] = true;
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Datos Personales</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
        <style type="text/css">
            img {
                float: right;
            }
        </style>
    </head>

    <body>
       
        <header>
        </header>

        <section>
            <?php
            /**
            * Ejercicio que muestra los datos personales del alumno.
            * @author Rafa Miranda
            * @version 1.0
            */
            echo "<h1>Datos Personales</h1>";
            echo "Nombre: Rafael</br>";
            echo "Apellidos: Miranda Ibáñez</br>";
            echo "Email: r.miranda.ibanez@gmail.com</br>";
            echo "<img src='./images/picture.png'>";
            echo "<a href='../ejercicios/vercodigo.php?src=DatosPersonales.php'>Ver Código Fuente</a>";
            echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
            ?>
        </section>

        <footer>
        </footer>

    </body>
</html>