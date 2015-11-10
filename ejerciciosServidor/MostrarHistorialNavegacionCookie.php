<?php include("HistorialNavegacionCookie.php"); ?>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
        echo $_COOKIE['historial'];
        /*foreach ($_COOKIE['historial'] as $value) {
            echo $value;
        }*/       
    ?>
</body>
</html>

