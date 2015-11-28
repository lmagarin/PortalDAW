<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    /**
    * Script que loguea a un usuario mediante formulario y permite el borrado de las cookies.
    * @author Rafa Miranda
    * @version 1.0
    */
    $usuario = "";
    $password = "";
    $errCampo = "";

    if(isset($_COOKIE['usuario']) && isset($_COOKIE['password'])){
        $usuario = $_COOKIE['usuario'];
        $password = $_COOKIE['password'];
    }

    if(isset($_POST['enviar'])){
        if(empty($_POST['usuario']) || empty($_POST['password'])){
            $errCampo = "* Debe rellenar este campo";
        }
        else{
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            setcookie('usuario', $usuario, time()+3600);
            setcookie('password', $password, time()+3600);   
        } 
    }
    
    if(isset($_POST['borrar'])){
        setcookie('usuario', $usuario, time()-1);
        setcookie('password', $password, time()-1);
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Login y Borrado Cookie</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale="1", maximum-scale="1"/>
        <script type="text/javascript" src=""></script>
    </head>
    <body>   
        <?php
        if(isset($_POST['enviar']) && $errCampo == ""){
            echo "Usuario autenticado";
        }
        elseif(isset($_POST['borrar']) && $errCampo == ""){
            echo "Cookie de usuario borrada";
        }
        else{
            echo "<form action='LoginYBorradoCookie.php' method='post'>
                       Usuario:<input type='text' name='usuario' value='".$usuario."' maxlength='15'/>
                       <font color='red'>".$errCampo."</font>
                       </br></br>
                       Password:<input type='password' name='password' value='".$password."' maxlength='15'/>
                       <font color='red'>".$errCampo."</font>
                       </br></br>
                       <input type='submit' name='borrar' value='Borrar Cookie'/>
                       <input type='submit' name='enviar' value='Enviar'/>
                   </form>";
        }
       ?>
       </br></br><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>