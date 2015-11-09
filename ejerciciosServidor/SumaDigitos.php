<?php include("HistorialNavegacionCookie.php"); ?>
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
            * Escribe una función recursiva para sumar los dígitos de un número.
            * @author Rafa Miranda
            * @version 1.0
            */

            $numero = "";
            $errNumero = "";
            $error = false;

            include 'Funciones/TestInput.php';

            if(isset($_POST['enviar'])){
                if(empty($_POST['numero'])){
                    $errNumero = "* Debe completar este campo.";
                    $error = true;
                }
                else{
                    $numero = test_input($_POST['numero']);
                    if(!preg_match("/^[\d]+$/", $numero)){
                        $errNumero = "* Debe introducir un número.";
                        $error = true;
                    }
                }
            }

            include 'Funciones/SumaDigitosRecursiva.php';

            echo "<form action='SumaDigitos.php' method='post'>
                    Introduce un número y te devolveré la suma de sus dígitos:</br></br>
                    <input type='text' name='numero' value='".$numero."'><font color='red'>".$errNumero."</font>
                    <input type='submit' name='enviar' value='Enviar'>
                </form>";

            if(isset($_POST['enviar']) && !$error){
                echo "</br><h3>La suma de los dígitos del número introducido es: ".sumaDigitosRecursiva($numero)."</h3>";
            }
        ?>
        </br><a href="../ejercicios/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>