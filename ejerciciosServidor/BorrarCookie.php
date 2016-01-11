<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    setcookie('cookie', 'Hola, soy una cookie', time()-1);
?>
<html>
<head>
    <title>Borrar Cookie</title>
</head>
    <body>
        <?php
            echo "Cookie borrada!!";
        ?>
        <p style="clear:both;"><a href="../ejerciciosServidor/vercodigo.php?src=..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>