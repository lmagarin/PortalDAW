<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    /**
    * Script que guarda un usuario y un password como cookie.
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
            if(isset($_POST['guardar'])){
                setcookie('usuario', $usuario, time()+3600);
                setcookie('password', $password, time()+3600);
            }
        } 
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Guardar Cookie</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale="1", maximum-scale="1"/>
        <script type="text/javascript" src=""></script>
    </head>
    <body>   
        <?php
        if(isset($_POST['enviar']) && $errCampo == ""){
            echo "Usuario autenticado";
        }
        else{
            echo "<form action='GuardarCookie.php' method='post'>
                       Usuario:<input type='text' name='usuario' value='".$usuario."' maxlength='15'/>
                       <font color='red'>".$errCampo."</font>
                       </br></br>
                       Password:<input type='password' name='password' value='".$password."' maxlength='15'/>
                       <font color='red'>".$errCampo."</font>
                       </br></br>
                       <input type='checkbox' name='guardar'>Guardar la cookie?
                       <input type='submit' name='enviar' value='Enviar'/>
                   </form>";
        }
       ?>
       </br></br><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>