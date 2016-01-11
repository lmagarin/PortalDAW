<?php
    $usuarios = array(
        array('usr' => 'admin', 'password' => '123', 'permiso' => 'admin'),
        array('usr' => 'cliente', 'password' => '123', 'permiso' => 'cliente')
    );

    function comprobarUsuario($usuario,$password,$usuarios){
        foreach ($usuarios as $valor) {
            if($valor['usr'] == $usuario){
                if($valor['password'] == $password){
                    return $valor;
                }
            }
        }
        return null;
    }

    $user = "";
    $contrasena = "";

    if(isset($_COOKIE['usuario']) && isset($_COOKIE['contrasena'])){
        $user = $_COOKIE['usuario'];
        $contrasena = $_COOKIE['contrasena'];
        if(isset($_POST['guardar'])){
            if($_POST['guardar']){
                setcookie('usuario', $user, time()-1); //primero borro las cookies antiguas
                setcookie('contrasena', $contrasena, time()-1);
                $user = $_POST['usr']; //vuelvo a recoger los valores introducidos mediante inputs
                $contrasena = $_POST['pss'];
                setcookie('usuario', $user, time()+3600); //y luego creo las nuevas
                setcookie('contrasena', $contrasena, time()+3600);
            }
        }
    }
    else {
        $user = $_POST['usr'];
        $contrasena = $_POST['pss'];
        if(isset($_POST['guardar'])){
            if($_POST['guardar']){
                setcookie('usuario', $user, time()+3600);
                setcookie('contrasena', $contrasena, time()+3600);
            }
        }
    }

    if(isset($_POST['login'])){
        $usuarioCorrecto = comprobarUsuario($_POST['usr'], $_POST['pss'], $usuarios);
        if($usuarioCorrecto != null){
            $_SESSION['autenticado'] = true;
            $_SESSION['usuario'] = $usuarioCorrecto;
            $errorAut = "";
        }
        else{
            $errorAut = "El nombre de cliente y/o la contraseña son erróneos.";
            $_SESSION['autenticado'] = false;
        }
    }

    if(isset($_POST['logout'])){
        header("Location: cerrarSesion.php");
    }
?>