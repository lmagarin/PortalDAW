<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
        <script type="text/javascript" src=""></script>
    </head>
    <body>   
        <?php
            /**
            * Ejercicio que muestra recoja nombre y apellidos en una cadena y devuelva las iniciales.
            * @author Rafa Miranda
            * @version 1.0
            */

            $cadena = "";
            $errCadena = "";
            $error = false;

            include 'Funciones/TestInput.php';

            if(isset($_POST['enviar'])){
                if(empty($_POST['cadena'])){
                    $errCadena = "Debe escribir Nombre y apellidos.";
                    $error = true;
                }
                else {
                    $cadena = test_input($_POST['cadena']);
                    if(!preg_match("/^[a-zA-ZáéíóúñÑ ,.'-]+$/",$cadena)){
                        $errCadena = "Nombre y/o apellidos no válidos.";
                        $error = true;
                    }
                }
            }

            include 'Funciones/BuscarIniciales.php';

            echo "<form action='NombreApellidosIniciales.php' method='post'>
                    Introduzca nombre y apellidos y le devolveré las iniciales:</br></br>
                    <input type='text' name='cadena' value='".$cadena."'><font color='red'>".$errCadena."</font>
                    <input type='submit' name='enviar' value='Enviar'>
                </form>";

            if(isset($_POST['enviar']) && !$error){
                echo "</br><h3>Las iniciales de su nombre y apellidos son: ".buscarIniciales($cadena)."</h3>";
            }
        ?>
        </br><a href="../ejercicios/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>