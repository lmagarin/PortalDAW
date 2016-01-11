<?php
    session_start();
    $msgError = "";
    
    if(!isset($_SESSION['autenticacion'])){
        $_SESSION['autenticacion'] = false;
        $_SESSION['usuario'] = "";
        $_SESSION['password'] = "";
        $_SESSION['errorCampo'] = "";
    }
    
    if(isset($_GET['error'])){
        if($_GET['error'] == 1){
            $msgError = "Usuario no existe";
        }
        if($_GET['error'] == 2){
            $msgError = "Password incorrecto";
        }
    }
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
                    echo "<div>
                            <h1>Usuario Logueado</h1><br/>
                            <h2>Datos Personales</h2>
                            <p>Usuario:&nbsp;".$_SESSION['usuario']."</p>
                            <p>Password:&nbsp;".$_SESSION['password']."</p>
                            </div><br/>
                            <p><a href='PaginaPublica.php'>Acceso Página Pública</a></p>
                            <p><a href='PaginaPrivada.php'>Acceso Página Privada</a></p><br/>
                            <p><a href='../CerrarSesion.php'>Cierre de Sesión</a></p>";
                }
                else {
                    echo "<form action='VerificarLogin.php' method='post'>
                            Usuario:<input type='text' name='usuario'/>".$_SESSION['errorCampo']."<br/><br/>
                            Password:<input type='password' name='password'/>".$_SESSION['errorCampo']."<br/><br/>
                            <input type='submit' name='enviar' value='Enviar'/>
                        </form><br/><br/>
                        <p><a href='PaginaPublica.php'>Acceso Página Pública</a></p>";
                    echo $msgError;
                }
            ?>
        </section>
        </br><a href="../ejerciciosServidor/vercodigo.php?src=..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>