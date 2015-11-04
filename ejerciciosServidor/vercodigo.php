<?php
    if(isset($_GET['src'])){
        highlight_file($_GET['src']); // redirección al archivo pasado por parámetro.
    }
    else header("Location: http://localhost"); // si no encuentra nada como source vuelve al localhost
    echo ("<br/><a href=\"$_GET[src]\">Volver</a>");
?>