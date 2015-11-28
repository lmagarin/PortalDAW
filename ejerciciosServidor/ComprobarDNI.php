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
            * Ejercicio que muestra la letra de un DNI dado por formulario.
            * @author Rafa Miranda
            * @version 1.0
            */
            $dni = "";
            $errDni = "";
            $error = false;
            $letra = "";
            
            function comprobarDNI($dni)
            {
                $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X',
                        'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
                $posicion = $dni%23;
                return $letras[$posicion];
            }

            if(isset($_POST['enviar'])){
                if(empty($_POST['dni'])){
                    $errDni = "* DNI requerido";
                    $error = true;
                }
                else {
                    $dni = $_POST['dni'];
                    if(!preg_match("/^(\d{8})$/",$dni)){
                        $errDni = "* Debes escribir 8 números";
                        $error = true;
                    }
                }
            }

            echo "<form action='ComprobarDNI.php' method='post'>
                    Introduzca el DNI y le devolveré la letra que le corresponde:</br></br>
                    <input type='text' name='dni' value='".$dni."'><font color='red'>".$errDni."</font>
                    <input type='submit' name='enviar' value='Enviar'>
                </form>";

            if(isset($_POST['enviar']) && !$error){
                echo "</br><h3>La letra del DNI introducido es ".comprobarDNI($dni)."</h3>";
            }
        ?>
        <p style="clear:both;"><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p> 
    </body>
</html>