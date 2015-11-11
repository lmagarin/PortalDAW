<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    $info = getdate();
    $fecha = $info["mday"]."-".$info["mon"]."-".$info["year"].". ".$info["hours"].":".$info["minutes"].":".$info["seconds"];
    if(isset($_COOKIE['ultimaConexion'])){
        echo "El último acceso a este archivo fue: ".$_COOKIE['ultimaConexion'];
    }
    else {
        echo "No se ha accedido anteriormente a este archivo";
    }
    setcookie('ultimaConexion', $fecha, Time()+1000000);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fecha y Hora Último Acceso</title>
</head>
<body>
    <p style="clear:both;"><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
</body>
</html>