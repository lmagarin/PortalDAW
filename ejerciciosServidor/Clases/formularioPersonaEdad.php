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
            <h1>Formulario Persona - Edad</h1>
        </header>
        <section>
            <?php
                $nombre = "";
                $apellidos = "";
                $fecha = "";
                $errorNombre = "";
                $errorApellidos = "";
                $errorFecha = "";
                $error = false;
                include("Persona.php");
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
                    if(!empty($_POST["fecha"])){
                        $fecha = $_POST["fecha"];
                    }
                    else {
                        $errorFecha = "Debe cumplimentar la fecha de nacimiento (respetando el formato)";
                        $error = true;
                    }
                }

                if(isset($_POST["enviar"]) && !$error){
                    $persona = new Persona($nombre, $apellidos, $fecha);
                    echo $persona->mostrarEdad();
                }
                else {
                    ?>
                    <form action="formularioPersonaEdad.php" method="post">
                        Nombre: <input type="text" name="nombre"><span><?php echo " ".$errorNombre; ?></span><br><br>
                        Apellidos: <input type="text" name="apellidos"><span><?php  echo " ".$errorApellidos; ?></span><br><br>
                        Fecha Nacimiento (dd-mm-yyyy): <input type="text" name="fecha"><span><?php  echo " ".$errorFecha; ?></span><br><br>
                        <input type="submit" class="submit" name="calcular" value="Calcular Edad">
                    </form>
                <?php
                }
                ?>
        </section>
        </br></br><a href="../vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../../index.html">Volver a Inicio</a>
    </body>
</html>