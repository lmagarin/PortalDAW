<?php
    $archEncuestas = array(
        array('titulo' => 'Evaluación calidad del servicio', 'valoracion' => "", 'abierta' => 'si'),
        array('titulo' => 'Evaluación calidad de la comida', 'valoracion' => "", 'abierta' => 'no'),
    );
    include("crearSesion.php");
    include("autenticacion.php");
    include("permisos.php");

    function mostrarEncuestas(){
        echo "<table>";
        echo "<tr><th>Título</th><th>Valoración</th></tr>";
        foreach ($_SESSION['archEncuestas'] as $key => $pregunta) {
            echo "<tr>";
            echo "<td>" . $pregunta['titulo'] . "</td>";
            if ($pregunta['abierta'] == 'si') {
                echo "<td><form action='index.php' method='post'>
                    <input type='radio' name='valor' value='1'>1
                    <input type='radio' name='valor' value='2'>2
                    <input type='radio' name='valor' value='3'>3<br>
                    <input type='submit' name='valora' value='Responder preg " . $key . "'></form></td></tr>";
            }
        }
        echo "</table>";
    }

    function anadirRespuestas(){
        if(isset($_POST['valora'])){
            foreach ($_SESSION['archEncuestas'] as $key => $preg) {
                if($_POST['valora'] == "Responder preg " . $key . ""){
                    array_push($_SESSION['respuestas'],array('titulo' => $preg['titulo'], 'valoracion' => $_POST['valor']));
                }
            }
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Gestión encuestas</title>
    </head>
    <body>
        <h1>Gestión encuestas</h1>
        <?php include("formAutenticacion.php");
            echo "<br>";
            if($usuarioAcceso){
                mostrarEncuestas();
                anadirRespuestas();
                echo "<h3>Tus respuestas son: </h3>";
                foreach ($_SESSION['respuestas'] as $item) {
                    echo "<p>Pregunta: " . $item['titulo'] . " => Puntuacion: " . $item['valoracion'] . "</p>";
                }
            }

            if($adminAcceso){
                echo "<div><br>Añadir pregunta a la encuesta:<br><br>";
                echo "<form action='index.php' method='post'>
                        Título pregunta:<input type='text' name='preguntaAnad'><br><br>
                        Visibilidad pregunta (si/no): <input type='text' name='visib'><br><br>
                        <input type='submit' name='anadirPreg' value='Añadir'></form>";
                echo "<br><br>Eliminar pregunta de la encuesta:<br><br>";
                echo "<form action='index.php' method='post'>
                        Número pregunta a eliminar:<input type='text' name='numero'><br><br>
                        <input type='submit' name='eliminarPreg' value='Eliminar'></form></div>";
                if(isset($_POST['anadirPreg'])){
                    array_push($_SESSION['archEncuestas'],array('titulo' => $_POST['preguntaAnad'],'valoracion' => '','abierta' => $_POST['visib']));
                }
                if(isset($_POST['eliminarPreg'])){
                    foreach($_SESSION['archEncuestas'] as $key => $item){
                        if(($key+1) == $_POST['numero']){
                            unset($_SESSION['archEncuestas'][$key]);
                        }
                    }
                }
                echo "<br><div><h3>Inventario preguntas administrador</h3>";
                foreach ($_SESSION['archEncuestas'] as $item) {
                    if($_POST['abrir']){
                        $item['abierta'] = 'si';
                    }
                    echo "<p>Título: " . $item['titulo'] . " - Visibilidad: " . $item['abierta']. "";
                    echo "<form action='index.php' method='post'><input type='submit' name='abrir' value='Abrir'></form></p>";
                }
                echo "</div>";
            }
        ?>
    </body>
</html>