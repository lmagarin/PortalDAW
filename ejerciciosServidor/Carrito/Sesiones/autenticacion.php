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