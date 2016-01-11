<?php include("HistorialNavegacionCookie.php"); ?>
<html>
    <body>
    <?php
        /**
        * Ejercicio que recoge el nombre y apellido en un formulario y lo muestra posteriormente en pantalla.
        * @author Rafa Miranda
        * @version 1.0
        */
        $nombre = "";
        $apellido = "";
        $asteriscoNombre = "";
        $asteriscoApellido = "";

        if(isset($_POST['enviar'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
        }

        if($nombre == ""){
            $asteriscoNombre = "* Nombre requerido";
        }
        
        if($apellido == ""){
            $asteriscoApellido = "* Apellido requerido";
        }

        if($nombre != "" && $apellido != ""){
            echo "Su nombre es: <strong>". $nombre . "</strong>, y su apellido es: <strong>" . $apellido . "</strong></br>";
        }
        else {
            echo "<form action='NombreApellido.php' method='post' style='font-family:sans-serif'>
                    <fieldset style='display:inline; background-color: #FFFAAE'>
                        <legend><strong>Datos personales</strong></legend>
                            Nombre: <input type='text' name='nombre' value='".$nombre."'/>
                            <font color='red'>".$asteriscoNombre."</font></br></br>
                            Apellido: <input type='text' name='apellido' value='".$apellido."'/>
                            <font color='red'>".$asteriscoApellido."</font></br></br>
                            <input type='submit' name='enviar' value='Enviar'/>
                    </fieldset>
                </form> ";
        }
    ?>
    <a href="../ejerciciosServidor/vercodigo.php?src=..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a>
    </body>
</html>