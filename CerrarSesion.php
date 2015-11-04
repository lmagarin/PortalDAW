<?php
    session_start();
    unset($_SESSION);
    session_destroy();
    echo "Sesión cerrada, vuelva al Home";
    echo "</br></br><a href='./index.html'>Ir a inicio</a>";
?>