<?php
    session_start();
    if(isset($_POST['enviar'])){
        if(empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['telefono'])){
            $_SESSION['campoVacio'] = "Debe rellenar todos los campos";
        }
        else{
            $_SESSION['campoVacio'] = "";
            array_push($_SESSION['agenda'], $_POST['nombre']);
            array_push($_SESSION['agenda'], $_POST['apellidos']);
            array_push($_SESSION['agenda'], $_POST['telefono']);
        }
        header("Location:SesionesAgendaContactos.php");
    }
?>