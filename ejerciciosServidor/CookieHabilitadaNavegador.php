<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    setcookie('prueba', 'cookieGuardada', time()+3600);
    echo $_COOKIE['prueba'];
    header("location: CheckearCookieNavegador.php");
?>