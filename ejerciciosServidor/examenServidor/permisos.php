<?php
    $adminAcceso = false;
    $usuarioAcceso = false;

    if($_SESSION['autenticado']){
        if($_SESSION['usuario']['permiso'] == 'user'){
            $usuarioAcceso = true;
            $adminAcceso = false;
            if(!isset($_SESSION['respuestas'])){
                $_SESSION['respuestas'] = array();
            }
        }
        elseif($_SESSION['usuario']['permiso'] == 'admin'){
            $adminAcceso = true;
            $usuarioAcceso = false;
            if(!isset($_SESSION['archEncuestas'])){
                $_SESSION['archEncuestas'] = $archEncuestas;
            }
        }
    }
    else{
        $adminAcceso = false;
        $usuarioAcceso = false;
    }
?>