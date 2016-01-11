<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    setcookie('cookie', 'Hola, soy una cookie', time()+3600);
    if(isset($_COOKIE['cookie'])){
        echo "Cookie creada!!";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Borrar Cookie</title>
</head>
    <body>
        </br></br><a href="BorrarCookie.php">Borrar Cookie</a>
        <p style="clear:both;"><a href="../ejerciciosServidor/vercodigo.php?src=..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>