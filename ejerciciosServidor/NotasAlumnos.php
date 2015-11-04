<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Nota Alumnos 2DAW para DWESE</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
    </head>

    <body>
        <?php
        /**
        * Crear array que muestre las notas de los alumnos de 2DAW para DWESE.
        * @author Rafa Miranda
        * @version 1.0
        */
        $notas = array(
                        array("Nombre"=>"", "Apellido_1"=>"", "Apellido_2"=>"", "1ev"=>"", "2ev"=>"", "3ev"=>""),
                        array("Nombre"=>"Rafa", "Apellido_1"=>"Miranda", "Apellido_2"=>"Ibañez", "1ev"=>"7", "2ev"=>"6", "3ev"=>"7"),
                        array("Nombre"=>"Emanuel", "Apellido_1"=>"Galvan", "Apellido_2"=>"Fontalba", "1ev"=>"9", "2ev"=>"6", "3ev"=>"8"),
                        array("Nombre"=>"David", "Apellido_1"=>"Peralvo", "Apellido_2"=>"Gomez", "1ev"=>"8", "2ev"=>"7", "3ev"=>"7"),
                        array("Nombre"=>"Raul", "Apellido_1"=>"Moreno", "Apellido_2"=>"Povedano", "1ev"=>"7", "2ev"=>"5", "3ev"=>"6"),
                        array("Nombre"=>"Francisco", "Apellido_1"=>"Guerrero", "Apellido_2"=>"Molina", "1ev"=>"6", "2ev"=>"4", "3ev"=>"7"),
                        array("Nombre"=>"Juan Antonio", "Apellido_1"=>"Romero", "Apellido_2"=>"Gomez", "1ev"=>"9", "2ev"=>"8", "3ev"=>"6")
                        );
        echo "<table border='1' style='border-collapse:collapse; text-align:center;'>";
        $i = 1;
        foreach($notas as $fila){
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

        echo "</br><a href='../ejercicios/vercodigo.php?src=NotasAlumnos.php'>Ver Código Fuente</a>";
        echo "&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='../index.html'>Volver a Inicio</a>";
        ?>
    </body>
</html>