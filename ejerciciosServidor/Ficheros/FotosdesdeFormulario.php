<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Crear Galeria Fotos subidas desde Formulario</title>
        <meta charset="utf-8"/>
        <meta http-equiv="refresh" content="500000"/> <!-- Eliminar en páginas en produccion -->
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width", initial-scale="1", maximum-scale="1"/>
        <script type="text/javascript" src=""></script>
    </head>
        <body>
        <header>
            <h1>Crear Galeria Fotos subidas desde Formulario</h1>
        </header>
        <section>
            <?php
                if(!isset($_POST['enviar'])){
                    echo "<form enctype='multipart/form-data' action='FotosdesdeFormulario.php' method='post'>
                                <fieldset>
                                    <legend>Subida de imagen</legend>
                                        Imagen a subir:<input type='file' name='archivo' value='Subir imagen'><br><br>
                                        <input type='submit' name='enviar' value='Enviar'>
                                </fieldset>
                            </form>";
                }
                else {
                    $ruta_subida = "/var/www/rafa/ejerciciosServidor/Ficheros/Galeria/";
                    $ruta_subida = $ruta_subida.$_FILES['archivo']['name'];
                    $array_ruta = explode(".", $ruta_subida);
                    $extension = $array_ruta[count($array_ruta)-1];
                    if($extension == "png" || $extension == "bmp" || $extension == "gif" || $extension == "jpg" || $extension == "tif") {
                        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_subida)) {
                            $mensaje = "El fichero " . $_FILES['archivo']['name'] . " se ha subido exitósamente";
                            echo $mensaje;
                        } else {
                            $mensaje = "Error al subir fichero";
                            echo $mensaje;
                        }
                    }
                    else {
                        echo "Error, solo se pueden subir archivos de extensión .bmp, .gif, .jpg, .png, o .tif";
                    }
                }
            ?>
        </section>
        </br></br><a href="../vercodigo.php?src=..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../../index.html">Volver a Inicio</a></p>
    </body>
</html>