<?php
    function validarContrasena($contrasena)
    {
        $patronContrasena = "/^(?=^.{8,}$)(?=.*d)(?=.*W)(?![.n])(?=.*[A-Z])(?=.*[a-z]).*$$/";
        if(preg_match($patronContrasena, $contrasena)){
            return true;
        }
        else {
            return false;
        }
    }
?>