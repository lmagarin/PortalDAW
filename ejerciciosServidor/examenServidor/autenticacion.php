<?php
    $usuarios = array(
        array('usr' => 'admin', 'password' => 'admin', 'permiso' => 'admin'),
        array('usr' => 'user', 'password' => 'user', 'permiso' => 'user')
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

    /*if(isset($_POST['registro'])){
        $usuarioRegistrado = comprobarUsuario($_POST['usu'], $_POST['contra'], $usuarios);
        if($usuarioRegistrado != null){
            $_SESSION['registrado'] = true;
            $mensajeRegistro = "El usuario ya estaba registrado en el sistema";
        }
        else{
            $_SESSION['registrado'] = true;
            array_push($usuarios, array('usr' => $_POST['usu'],'password' => $_POST['contra'],'permiso' => 'user'));
            $mensajeRegistro = "Usuario registrado en el sistema";
        }
    }
    else{
        $_SESSION['registrado'] = false;
    }*/

    if(isset($_POST['login'])){
        $usuarioCorrecto = comprobarUsuario($_POST['usr'], $_POST['pss'], $usuarios);
        if($usuarioCorrecto != null){
            $_SESSION['registrado'] = true;
            $_SESSION['autenticado'] = true;
            $_SESSION['usuario'] = $usuarioCorrecto;
            $errorAut = "";
        }
        else{
            $errorAut = "El nombre de usuario y/o la contraseña son erróneos.";
            $_SESSION['autenticado'] = false;
        }
    }

    if(isset($_POST['logout'])){
        header("Location: cerrarSesion.php");
    }
?>