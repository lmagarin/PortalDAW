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
            
            if(isset($_POST['enviar'])){
                if(empty($_POST['cadena']) || empty($_POST['letra'])){
                    $errCampo = "* Debe rellenar este campo.";
                    $error = true;
                }
                else{
                    $cadena = test_input($_POST['cadena']);
                    $letra = test_input($_POST['letra']);
                }
            }

            include 'Funciones/PosicionLetra.php';

            echo "<form action='BuscarLetra.php' method='post'>
                    Escribe una frase, una letra y te diré la posición de la primera aparición de esa
                    letra en la frase:</br></br>
                    Frase:<input type='text' name='cadena' value='".$cadena."'><font color='red'>".$errCampo."</font></br></br>
                    Letra:<input type='text' name='letra' value='".$letra."'><font color='red'>".$errCampo."</font></br></br>
                    <input type='submit' name='enviar' value='Enviar'>
                </form>";

            if(isset($_POST['enviar']) && !$error){
                echo "</br><h3>La posición de la primera aparición de la letra ".$letra." es: ".posicionLetra($cadena,$letra)."</h3>";
            }
        ?>
        </br><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>