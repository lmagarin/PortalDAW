<?php
    session_start();
    
    echo "

        ";


?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario Autenticación</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale="1", maximum-scale="1"/>
    </head>
    <body>   
        <header>
           <h1>Formulario Autenticación</h1>
        </header>
        <section>
            <form action="AutenticacionBasicoSesiones.php" method="post">
                Nombre:<input type="text" name="nombre"/><br/>
                Password:<input type="text" name="password"/><br/>
                <input type="submit" name="enviar" value="Enviar"/>
            </form>
        </section>
    </body>
</html>