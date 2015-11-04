<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Verbos Irregulares Inglés</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
        /**
        * Crear array que muestre los verbos irregulares en inglés.
        * @author Rafa Miranda
        * @version 1.0
        */
        $verbos = array(
                        array("Infinitivo"=>"", "Pasado"=>"", "Participio"=>""),
                        array("Infinitivo"=>"Become", "Pasado"=>"Became", "Participio"=>"Become"),
                        array("Infinitivo"=>"Begin", "Pasado"=>"Began", "Participio"=>"Begun"),
                        array("Infinitivo"=>"Break", "Pasado"=>"Broke", "Participio"=>"Broken"),
                        array("Infinitivo"=>"Bring", "Pasado"=>"Brought", "Participio"=>"Brought"),
                        array("Infinitivo"=>"Buy", "Pasado"=>"Bought", "Participio"=>"Bought"),
                        array("Infinitivo"=>"Catch", "Pasado"=>"Cought", "Participio"=>"Cought"),
                        array("Infinitivo"=>"Come", "Pasado"=>"Came", "Participio"=>"Came"),
                        array("Infinitivo"=>"Cut", "Pasado"=>"Cut", "Participio"=>"Cut"),
                        array("Infinitivo"=>"Do", "Pasado"=>"Did", "Participio"=>"Done"),
                        array("Infinitivo"=>"Drink", "Pasado"=>"Drank", "Participio"=>"Drunk"),
                        array("Infinitivo"=>"Eat", "Pasado"=>"Ate", "Participio"=>"Eaten"),
                        array("Infinitivo"=>"Fall", "Pasado"=>"Fell", "Participio"=>"Fallen"),
                        array("Infinitivo"=>"...", "Pasado"=>"...", "Participio"=>"...")
                        );
        echo "<table border='1' style='border-collapse:collapse; text-align:center;'>";
        $i = 1;
        foreach($verbos as $fila){
            echo "<tr>";
            foreach($fila as $clave=>$valor){
                if($i==1) {
                    echo "<td><strong>$clave</strong></td>";
                }
                else {
                    echo "<td>$valor</td>";
                }
            }
            $i++;
            echo "</tr>";
        }
        echo "</table>";

        echo "</br><a href='../ejercicios/vercodigo.php?src=VerbosIrregulares.php'>Ver Código Fuente</a>";
        echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>