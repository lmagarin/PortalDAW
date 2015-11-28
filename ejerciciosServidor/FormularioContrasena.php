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
            * Escribe una función que permita validar contraseñas seguras. Una contraseña segura debe tener
            * una longitud mínima de 8 caracteres y contener al menos: Una letra minúscula, una letra
            * mayúscula, un dígito y un carácter especial. Utilizar la función en un formulario de registro.
            * @author Rafa Miranda
            * @version 1.0
            */

            $contrasena = "";
            $errContrasena = "";
            $error = false;

            include 'Funciones/TestInput.php';
            include 'Funciones/ValidacionContrasena.php';

            if(isset($_POST['enviar'])){
                if(empty($_POST['contrasena'])){
                    $errContrasena = "* Debe rellenar este campo";
                    $error = true;
                }
                else {
                    $contrasena = test_input($_POST['contrasena']);
                    if(!validarContrasena($contrasena)){
                        $errContrasena = "Contraseña Inválida ()";
                        $error = true;
                    }
                }
            }

            echo "<form action='FormularioContrasena.php' method='post'>
                    Introduzca una contraseña con longitud mínima de 8 caracteres, y al menos una letra minúscula,
                    una letra mayúscula, un dígito y un carácter especial:</br></br>
                    Contraseña:<input type='text' name='contrasena' value='".$contrasena."'>
                    <font color='red'>".$errContrasena."</font>
                    </br><input type='submit' name='enviar' value='Enviar'>
                </form>";

            if(isset($_POST['enviar']) && !$error){
                echo "</br><h3>La contraseña es correcta: ".$contrasena."</h3>";
            }
        ?>
    </br><p style="clear:both;"><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>