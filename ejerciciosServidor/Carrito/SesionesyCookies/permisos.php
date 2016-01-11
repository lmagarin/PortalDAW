<?php
    $adminAcceso = false;
    $clienteAcceso = false;

    if($_SESSION['autenticado']){
        if($_SESSION['usuario']['permiso'] == 'cliente'){
            $clienteAcceso = true;
            $adminAcceso = false;
            if(!isset($_SESSION['carrito'])){
                $_SESSION['carrito'] = array();
            }
        }
        elseif($_SESSION['usuario']['permiso'] == 'admin'){
            $adminAcceso = true;
            $clienteAcceso = false;
            if(!isset($_SESSION['tienda'])){
                $_SESSION['tienda'] = $inventario;
            }
        }
    }
    else{
        $adminAcceso = false;
        $clienteAcceso = false;
    }
?>