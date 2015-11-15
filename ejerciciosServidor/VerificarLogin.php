<?php
    session_start();
    $usuarioValido = "Admin";
    $passwordValido = "123";

    if(isset($_POST['enviar'])){
        if(empty($_POST['usuario']) || empty($_POST['password'])){
            $_SESSION['errorCampo'] = "* Debe rellenar los campos";
        }

        if($_POST['usuario'] == $usuarioValido){
            if($_POST['password'] == $passwordValido){
                $_SESSION['autenticacion'] = true;
                $_SESSION['usuario'] = $_POST['usuario'];
                $_SESSION['password'] = $_POST['password'];                
            }
            else{
                $error = 2;
            }
        }
        else{
            $error = 1;
        }
    }

    if($_SESSION['autenticacion'] != true){
        header("Location:AutenticacionIndex.php?error=".$error);
    }
    else {
        header("Location:AutenticacionIndex.php");
    }
?>