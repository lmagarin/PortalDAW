<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    if(isset($_COOKIE['prueba']) && $_COOKIE['prueba'] == 'cookieGuardada'){
        echo "Este navegador SI tiene habilitado el almacenamiento de cookies";
    }
    else {
        echo "Este navegador NO tiene habilitado el almacenamiento de cookies";
    }
?>
<html>
<head>
    <title>Checkear Cookie en Navegador</title>
</head>
    <body>
        <p style="clear:both;"><a href="../ejerciciosServidor/vercodigo.php?src=..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../ejerciciosServidor/vercodigo.php?src=../../rafa/ejerciciosServidor/CookieHabilitadaNavegador.php">
            Ver Código Fuente Script Padre</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>