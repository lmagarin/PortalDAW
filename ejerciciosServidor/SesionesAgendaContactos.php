<?php
    session_start();
    if(!isset($_SESSION['agenda'])){
        $_SESSION['agenda'] = array();
        $_SESSION['campoVacio'] = "";
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Agenda Contactos</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale="1", maximum-scale="1"/>
        <script type="text/javascript" src=""></script>
    </head>
    <body>   
        <header>
           <h1>Agenda Contactos</h1>
        </header>
        <section>
            <form action='SesionesGestionAgenda.php' method='post'>
                Nombre:<input type='text' name='nombre'><?php echo $_SESSION['campoVacio']; ?></br></br>
                Apellidos:<input type='text' name='apellidos'><?php echo $_SESSION['campoVacio']; ?></br></br>
                Teléfono:<input type='text' name='telefono'><?php echo $_SESSION['campoVacio']; ?></br></br>
                <input type='submit' name='enviar' value='Enviar'></br>
            </form></br>
            <?php
                if(empty($_SESSION['agenda'])){
                    echo "No hay contactos en tu agenda";
                }
                else {
                    $c = 0;
                    echo "<table border='1' style='border-collapse: collapse;'>
                            <tr><th>Nombre</th><th>Apellidos</th><th>Telefono</th></tr>
                            <tr>";
                            foreach ($_SESSION['agenda'] as $key => $value) {
                                echo "<td>".$value."</td>";
                                $c++;
                                if($c%3 == 0){
                                    echo "</tr><tr>";
                                }
                            }
                    echo "</table>";
                }
                echo "</br></br><a href='../CerrarSesion.php'>Cerrar Sesión</a>";
            ?>
        </section>
    </body>
</html>