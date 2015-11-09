<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    /*$nombreArchivo = 'HistorialNavegacionCookie.php';
    $info = getdate();
    $dia = $info[3];
    $mes = $info[5];
    $anno = $info[6];
    $hora = $info[2];
    $minuto = $info[1];
    $segundo = $info[0];
    setcookie('dia', $dia, Time()+1000000);
    setcookie('mes', $mes, Time()+1000000);
    setcookie('anno', $anno, Time()+1000000);
    setcookie('hora', $hora, Time()+1000000);
    setcookie('minuto', $minuto, Time()+1000000);
    setcookie('segundo', $segundo, Time()+1000000);
    if (file_exists($nombreArchivo)) {
        echo "La última vez que se accedió al archivo '$nombreArchivo' fue el ".$_COOKIE['dia']." de ".$_COOKIE['mes']." de ".$_COOKIE['anno'].", a las ".$_COOKIE['hora'].":".$_COOKIE['minuto'].":"$_COOKIE['segundo'];
    }*/
    $nombreArchivo = 'FechaHoraUltimoAcceso.php';
    if (file_exists($nombreArchivo)) {
        echo "La última vez que se accedió al archivo '$nombreArchivo' fue: " . date("F d Y H:i:s.", fileatime($nombreArchivo));
    }
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