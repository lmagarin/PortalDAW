<?php
    session_start();
    if(isset($_POST['enviar'])){
        if(empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['1trim']) || empty($_POST['2trim']) || empty($_POST['3trim'])){
            $_SESSION['campoVacio'] = "Debe rellenar todos los campos";
        }
        else{
            $_SESSION['campoVacio'] = "";
            $media = ($_POST['1trim'] + $_POST['2trim'] + $_POST['3trim']) / 3;
            array_push($_SESSION['modulo'], $_POST['nombre']);
            array_push($_SESSION['modulo'], $_POST['apellidos']);
            array_push($_SESSION['modulo'], $_POST['1trim']);
            array_push($_SESSION['modulo'], $_POST['2trim']);
            array_push($_SESSION['modulo'], $_POST['3trim']);
            array_push($_SESSION['modulo'], $media);
        }
        header("Location:SesionesModuloDWES.php");
    }
?>