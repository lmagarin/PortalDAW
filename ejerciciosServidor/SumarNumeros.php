<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Practica Guiada Formulario Sumar Numeros</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
        <script type="text/javascript" src=""></script>
        <style type="text/css">
            .error {
                color: #FF0000;
            }
        </style>
    </head>
    <body>   
    <?php
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $cantNumeros = "";
        $errCantNumeros = "";
        $errorCant = false;
        $valores = array();
        $errValores = array();
        $errorVal = false;

        //validacion del primer formulario
        if(isset($_POST['enviar'])){
            $cantNumeros = test_input($_POST['cantNumeros']);
            if(empty($cantNumeros)){
                $errCantNumeros = "Requerido";
                $errorCant = true;
            }
            else {
                if($cantNumeros < 2){
                    $errCantNumeros = "Mínimo 2 números";
                    $errorCant = true;
                }
                if(!filter_var($cantNumeros,FILTER_VALIDATE_INT)){
                    $errCantNumeros = "Solo se admiten números enteros.";
                    $errorCant = true;
                }
            }
        }

        if(isset($_POST['sumar'])){
            $valores = $_POST['numeros'];
            $cantNumeros = test_input($_POST['cantNumeros']);
            foreach ($_POST['numeros'] as $valor) {
                $valor = test_input($valor);
                if(empty($valor)){
                    $errValores[] = "Requerido";
                    $errorVal = true;
                }
                else {
                    if(!filter_var($valor,FILTER_VALIDATE_INT)){
                        $errValores[] = "Solo se admiten números enteros.";
                        $errorVal = true;
                    }
                    else {
                        $errValores[] = "ok";
                    }
                }
            } 
        }
        echo "<form action='".htmlspecialchars($_SERVER['PHP_SELF'])."' method='post' enctype='multipart/form-data'>";
        echo "Cantidad Sumandos: <input type='text' name='cantNumeros' value='".$cantNumeros."'/>$errCantNumeros";
        echo "<input type='submit' name='enviar' value='Enviar'/></br></br>";
          
        if((isset($_POST['enviar']) && !$errorCant) || $errorVal){
            for ($i = 0; $i < $cantNumeros; $i++){
                if(isset($_POST['sumar'])){
                    $val = $valores[$i];
                    $error = $errValores[$i];
                }
                else {
                    $val = $error = '';
                }
                echo "Número ".($i+1).": <input type='text' name='numeros[]' value='".$val."'>".$error."</br>";
            }
            echo "</br><input type='submit' name='sumar' value='Sumar'>";     
        }

        if(isset($_POST['sumar']) && !$errorVal){
            $suma = 0;
            foreach ($_POST['numeros'] as $value) {
                $suma += $value;
            }
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>".$suma."</strong></br>";
        }
        echo "</form>";
    ?>
    </br><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>