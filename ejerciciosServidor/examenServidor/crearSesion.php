<?php
    session_start();
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    $errorAut = "";
    //$mensajeRegistro = "";

    if(!isset($_SESSION['registrado'])){
        $_SESSION['registrado'] = false;
    }

    if(!isset($_SESSION['autenticado'])){
        $_SESSION['autenticado'] = false;
    }

    if(!isset($_SESSION['usuario'])){
        $_SESSION['usuario'] = null;
    }
?>