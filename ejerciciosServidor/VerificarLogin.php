<?php
    session_start();
    $usuarioValido = "Rafael Miranda Ibanez";
    $passwordValido = "2DAW";
    include ("Funciones/TestInput.php");

    if(isset($_POST['enviar'])){
        if(empty($_POST['usuario']) || empty($_POST['password'])){
            $errorCampo = "* Debe rellenar los campos";
        }
        else {
            $usuario = test_input($_POST['usuario']);
            $password = test_input($_POST['password']);
        }
    }

    if($usuario == $usuarioValido && $password == $passwordValido){
        $_SESSION['autenticacion'] = true;
    }
    else {
        $_SESSION['autenticacion'] = false;
    }
    //header("Location: AutenticacionIndex.php");
?>