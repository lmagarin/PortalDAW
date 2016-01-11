<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario Persona - Edad</title>
        <link rel="stylesheet" href="../css/estilo.css">
        <style>
            span{
                color: red;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Formulario Persona - Impuestos</h1>
        </header>
        <section>
            <?php
            $nombre = "";
            $apellidos = "";
            $sueldo;
            $errorNombre = "";
            $errorApellidos = "";
            $errorSueldo = "";
            $error = false;
            require_once("Empleado.php");
            if(isset($_POST["calcular"])){
                if(!empty($_POST["nombre"])){
                    $nombre = $_POST["nombre"];
                }
                else {
                    $errorNombre = "Debe cumplimentar el nombre";
                    $error = true;
                }
                if(!empty($_POST["apellidos"])){
                    $apellidos = $_POST["apellidos"];
                }
                else {
                    $errorApellidos = "Debe cumplimentar los apellidos";
                    $error = true;
                }
                if(!empty($_POST["sueldo"])){
                    $sueldo = intval($_POST["sueldo"]);
                }
                else {
                    $errorSueldo = "Debe cumplimentar el sueldo";
                    $error = true;
                }
            }

            if(isset($_POST["calcular"]) && !$error){
                $empleado = new Empleado($nombre, $apellidos, $sueldo);
                echo $empleado -> pagarImpuestos();
            }
            else {
                ?>
                <form action="formularioPersonaImpuestos.php" method="post">
                    Nombre: <input type="text" name="nombre"><span><?php echo " ".$errorNombre; ?></span><br><br>
                    Apellidos: <input type="text" name="apellidos"><span><?php  echo " ".$errorApellidos; ?></span><br><br>
                    Sueldo: <input type="text" name="sueldo"><span><?php  echo " ".$errorSueldo; ?></span><br><br>
                    <input type="submit" class="submit" name="calcular" value="Calcular Impuestos">
                </form>
                <?php
            }
            ?>
        </section>
        </br></br><a href="../vercodigo.php?src=..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../../index.html">Volver a Inicio</a>
    </body>
</html>