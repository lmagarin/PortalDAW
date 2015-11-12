<?php
    session_start();
    $usuario = "";
    $password = "";
    $errorCampo = "";
    
    if(!isset($_SESSION['autenticacion'])){
        $_SESSION['autenticacion'] = false;
    }
    else {
        include ("VerificarLogin.php");
    }
    
    include ("../CerrarSesion.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Aplicación Autenticación</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale="1", maximum-scale="1"/>
    </head>
    <header>
           <h1>Aplicación Autenticación</h1>
       </header>
    <body>
        <section>
            <?php
                if($_SESSION['autenticacion'] == true){ 
                    echo "<div><h1>Datos Personales</h1>
                            <p>Usuario:&nbsp;".$usuario."</p>
                            <p>Password-.&nbsp;".$password."</p>
                            </div>
                            <p><a href='PaginaPublica.php'>Acceso Página Pública</a></p>
                            <p><a href='PaginaPrivada.php'>Acceso Página Privada</a></p>
                            <p><a href='CerrarSesion.php'>Cerrar Sesión</a></p>";
                }
                else {
                    echo "<form method='post'>
                            Usuario:<input type='text' name='usuario'/>".$errorCampo."<br/><br/>
                            Password:<input type='password' name='password'/>".$errorCampo."<br/><br/>
                            <input type='submit' name='enviar' value='Enviar'/>
                        </form><br/><br/>
                        <p><a href='PaginaPublica.php'>Acceso Página Pública</a></p>";
                }
            ?>
        </section>
    </body>
</html>