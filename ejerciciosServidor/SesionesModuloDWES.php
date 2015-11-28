<?php
    session_start();
    if(!isset($_SESSION['modulo'])){
        $_SESSION['modulo'] = array();
        $_SESSION['campoVacio'] = "";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Gestión Académica Módulo DWES</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale="1", maximum-scale="1"/>
        <script type="text/javascript" src=""></script>
    </head>
    <body>   
        <header>
           <h1>Gestión Académica Módulo DWES</h1>
        </header>
        <section>
            <form action='SesionesGestionModuloDWES.php' method='post'>
                Nombre:<input type='text' name='nombre'><?php echo $_SESSION['campoVacio']; ?></br></br>
                Apellidos:<input type='text' name='apellidos'><?php echo $_SESSION['campoVacio']; ?></br></br>
                Primer Trimestre:<input type='text' name='1trim'><?php echo $_SESSION['campoVacio']; ?></br></br>
                Segundo Trimestre:<input type='text' name='2trim'><?php echo $_SESSION['campoVacio']; ?></br></br>
                Tercer Trimestre:<input type='text' name='3trim'><?php echo $_SESSION['campoVacio']; ?></br></br>
                <input type='submit' name='enviar' value='Enviar'></br>
            </form></br>
            <?php
                if(empty($_SESSION['modulo'])){
                    echo "No hay datos de alumnos y sus notas.";
                }
                else {
                    $c = 0;
                    echo "<table border='1' style='border-collapse: collapse;'>
                            <tr><th>Nombre</th><th>Apellidos</th><th>1º Trim</th><th>2º Trim</th><th>3º Trim</th><th>Media</th></tr>
                            <tr>";
                            foreach ($_SESSION['modulo'] as $key => $value) {
                                echo "<td>".$value."</td>";
                                $c++;
                                if($c%6 == 0){
                                    echo "</tr><tr>";
                                }
                            }
                    echo "</table>";
                }
                echo "</br></br><a href='../CerrarSesion.php'>Cerrar Sesión</a>";
            ?>
        </section>
        </br><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>