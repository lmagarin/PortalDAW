<?php include("HistorialNavegacionCookie.php"); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Practica Guiada Formulario con Validación</title>
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
        </br><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
    <?php
        function test_input($data){
            $data = trim ($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        //variables para control de errores
        $errLogico = false;
        $errNombre = $errEmail = $errGenero = $errWeb = "";
        //variables para cargar valores en el formulario
        $nombre = $email = $genero = $comentario = $web = "";
        //detectamos si hemos llegado a través del botón "Enviar"
        if(isset($_POST["enviar"])){
            //botón enviar pulsado, validamos datos
            if(empty($_POST["nombre"])){
                $errNombre = "Nombre requerido";
                $errLogico = true;
            }
            else {
                $nombre = test_input($_POST["nombre"]);
                //validamos mediante una expresión regular.
                if(!preg_match("/^[a-zA-Z ]*$/",$nombre)){
                    $errNombre = "Solo se admiten letras y espacios en blanco.";
                    $errLogico = true;
                }
            }
            if(empty($_POST["email"])){
                $errEmail = "Email requerido";
                $errLogico = true;
            }
            else {
                $email = test_input($_POST["email"]);
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $errEmail = "Email de formato inválido.";
                    $errLogico = true;
                }
            }
            if(empty($_POST["web"])){
                //porque no es un campo obligatorio
                $errWeb = "";
            }
            else {
                $web = test_input($_POST["web"]);
                if(!filter_var($web,FILTER_VALIDATE_URL)){
                    $errWeb = "URL inválida.";
                    $errLogico = true;
                }
            }
            if(empty($_POST["comentario"])){
                //porque no es un campo obligatorio
                $comentario = "";
            }
            else {
                //no hay que controlar nada mas porque podemos escribir cualquier cosa
                $comentario = test_input($_POST["comentario"]);
            }
            if(empty($_POST["genero"])){
                $errGenero = "Genero requerido";
                $errLogico = true;
            }
            else {
                //no hay que controlar nada mas porque podemos escribir cualquier cosa
                $genero = test_input($_POST["genero"]);
            }
        }
        //AQUI TERMINA LA VALIDACIÓN DE CAMPOS

        if(!isset($_POST["enviar"]) || $errLogico){
            echo "<h2>PHP form validation exameple</h2>";
            ?>
            <p><span class="error">* campos requeridos.</span></p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>">
                <span class="error">* <?php echo $errNombre;?></span></br></br>
                Email: <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $errEmail;?></span></br></br>
                Web: <input type="text" name="web" value="<?php echo $web;?>">
                <span class="error">* <?php echo $errWeb;?></span></br></br>
                Comentario: <input type="text" name="comentario" value="<?php echo $comentario;?>"></br></br>
                Genero: <input type="radio" name="genero" <?php if(isset($genero)
                && $genero =="mujer") echo "checked";?> value="mujer">Mujer
                <input type="radio" name="genero" <?php if(isset($genero)
                && $genero =="hombre") echo "checked";?> value="hombre">Hombre
                <span class="error">* <?php echo $errGenero;?></span></br></br>
                <input type="submit" name="enviar" value="Enviar">
            </form><?php 
        }
        else {
            echo "<h2>Tus datos:</h2>";
            echo $nombre."</br>";
            echo $email."</br>";
            echo $web."</br>";
            echo $comentario."</br>";
            echo $genero."</br>";
        }
    ?>
</html>