<?php
    // declara la nueva página a añadir a la cookie (array de páginas a modo de historial)
    $pagina = htmlspecialchars($_SERVER['PHP_SELF']);

    // si la cookie existe, la lee y la deserializa. Si no, crea un nuevo array.
    if(array_key_exists('historial', $_COOKIE)) {
        $historial = $_COOKIE['historial'];
        $historial = unserialize($historial);
    } else {
        $historial = array();
    }

    // añade la nueva página visitada al historial y la vuelve a serializar.
    $historial[] = $pagina;
    $historial = serialize($historial);

    // guarda la cookie
    setcookie('historial', $historial, time()+3600);
?>
