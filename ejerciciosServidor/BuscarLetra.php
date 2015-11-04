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
            * Escriba una función que reciba como parámetro una cadena cad y una variable ch de tipo char.
            * La función devolverá la posición de la primera ocurrencia de ch en cad.
            * @author Rafa Miranda
            * @version 1.0
            */

            $cadena = "";
            $letra = "";
            $errCampo = "";
            $error = false;

            include 'Funciones/TestInput.php';
            include 'Funciones/PosicionLetra.php';

            if(isset($_POST['enviar'])){
                if(empty($_POST['cadena']) || empty($_POST['letra'])){
                    $errCampo = "* Debe rellenar este campo.";
                    $error = true;
                }
                else{
                    $cadena = test_input($cadena);
                    $letra = test_input($letra);
                    if(!preg_match("/^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/",$cadena)
                        || !preg_match("/^[a-zA-Z]$/",$letra)){
                        $errCampo = "* Solo puede contener caracteres del alfabeto y espacios.";
                        $error = true;
                    }
                }
            }

            echo "<form action='BuscarLetra.php' method='post'>
                    Escribe una frase, una letra y te diré la posición de la primera aparición de esa
                    letra en la frase:</br></br>
                    Frase:<input type='text' name='cadena' value='".$cadena."'><font color='red'>".$errCampo."</font></br></br>
                    Letra:<input type='text' name='letra' value='".$letra."'><font color='red'>".$errCampo."</font></br></br>
                    <input type='submit' name='enviar' value='Enviar'>
                </form>";

            if(isset($_POST['enviar']) && !$error){
                echo "</br><h3>La posición de la primera aparición de la letra es: ".posicionLetra($cadena,$letra)."</h3>";
            }
        ?>
        </br><a href="../ejercicios/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>