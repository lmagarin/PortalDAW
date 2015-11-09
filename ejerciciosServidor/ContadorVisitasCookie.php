<?php include("HistorialNavegacionCookie.php"); ?>
<?php
    $visitas = $_COOKIE['cookieVisitas'];
    $visitas += 1;
    setcookie('cookieVisitas', $visitas, time()+10000000000);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Prácticas DWES Rafael Miranda Ibáñez</title>
        <link href="./images/logoPHP.png" rel="icon" type="image/x-icon"/>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style type="text/css">
            .list-group {
                margin-left: 20px;
            }
            .jumbotron {
                padding-top: 0;
                padding-bottom: 0;
                margin-bottom: 0;
            }
            .container p {
                font-size: 40px;
                display: inline;
            }
            section{
                font-size: 30px;
                font-style: bolder;
                position: absolute;
                left: 500px;
                top: 300px;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <div class="container">
                    <h1><p>Prácticas</p>&nbsp;DAW Entorno Servidor, Entorno Cliente, Diseño Web y Android</h1>
                </div>
            </div>
        </header>
        <section>
            <?php
                echo "Contador de Visitas: ".$visitas;
            ?>
        </section>
        <footer>
            <nav class="navbar navbar-default navbar-fixed-bottom">
                <div class="pie">
                    <p class="text-muted credit">Autor <a href="http://rafamirandaweb.blogspot.com.es/">Rafael Miranda Ibáñez</a> para la asignatura "Desarrollo Web en Entorno Servidor. 2º DAW. Curso 2015-2016.</p>
                </div>
            </nav>
        </footer>
    </body>
</html>