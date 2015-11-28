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
                    echo "<form enctype='multipart/form-data' action='SQLdesdeFichero.php' method='post'>
                                <fieldset>
                                    <legend>Subida de imagen</legend>
                                        Imagen a subir:<input type='file' name='archivo' value='Subir imagen'><br><br>
                                        Nombre del archivo (no incluir extensión):<input type='text' name='image' value=''><br><br>
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
                            $mensaje = "El fichero " . basename($_FILES['archivo']['name']) . " se ha subido exitósamente";
                            echo $mensaje;
                            $usuariosEstudiantes = array();
                            function formateaCadena($string)
                            {
                                $no_permitidas = array("Del ", "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "À", "Ã", "Ì", "Ò", "Ù", "Ã™", "Ã ", "Ã¨", "Ã¬", "Ã²", "Ã¹", "ç", "Ç", "Ã¢", "ê", "Ã®", "Ã´", "Ã»", "Ã‚", "ÃŠ", "ÃŽ", "Ã”", "Ã›", "ü", "Ã¶", "Ã–", "Ã¯", "Ã¤", "«", "Ò", "Ã", "Ã„", "Ã‹", "Å„", "ń");
                                $permitidas = array("", "a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "nn", "N", "A", "E", "I", "O", "U", "a", "e", "i", "o", "u", "c", "C", "a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "u", "o", "O", "i", "a", "e", "U", "I", "A", "E", "nn", "nn");
                                $texto = str_replace($no_permitidas, $permitidas, $string);
                                $texto = strtolower($texto);
                                return $texto;
                            }

                            $arrayEstudiantes = file($ruta_subida); //contenido del fichero a array donde cada elemento es una línea
                            foreach ($arrayEstudiantes as $valor) { //recorro el array
                                $arrayEstudiante = explode(",", formateaCadena($valor)); //divido ese elemento en dos elementos de un array (dos apellidos y nombre)
                                $arrayEstudiante[1] = str_replace(" ", "", $arrayEstudiante[1]);
                                $nombreEstudiante = $arrayEstudiante[1]; //la segunda posicion de ese array (nombre)
                                $arrayApellidos = explode(" ", $arrayEstudiante[0]); //divido el primer elemento (apellidos) en dos arrays, cada uno con un apellido.
                                $apellido1Estudiante = $arrayApellidos[0]; //primera posición de ese array es el primer apellido
                                $apellido2Estudiante = $arrayApellidos[1]; //segunda posición de ese array es el segundo apellido
                                $codigoNombre = substr($nombreEstudiante, 0, 2); //cojo las dos primeras letras del nombre
                                $codigoApellido1 = substr($apellido1Estudiante, 0, 2); //cojo las dos primeras letras del primer apellido
                                $codigoApellido2 = substr($apellido2Estudiante, 0, 2); //cojo las dos primeras letras del segundo apellido
                                $codigoCompleto = $codigoApellido1 . $codigoApellido2 . $codigoNombre . "_1daw"; //creo el codigo completo del alumno
                                $bd = "bd" . $codigoCompleto; //creo el codigo de la base de datos de cada alumno
                                $usuariosEstudiantes[] = array("usuario" => $codigoCompleto, "bd" => $bd); //y lo añado como un array asociativo
                            }                                                               //a cada posición del array de estudiantes
                            $nuevaLinea = PHP_EOL;                                          //(cada posicion del array es un array asociativo)
                            $nombreArchivoSql = "script.sql";
                            if ($_POST['sql'] != "") {
                                $nombreArchivoSql = $_POST['sql'] . ".sql";
                            }
                            $scriptSQL = fopen("/var/www/rafa/ejerciciosServidor/Ficheros/" . $nombreArchivoSql, "a+");
                            foreach ($usuariosEstudiantes as $valor) {
                                fwrite($scriptSQL,
                                    "CREATE USER '" . $valor['usuario'] . "'@'localhost' IDENTIFIED BY 'usuario';" . $nuevaLinea . "CREATE DATABASE " . $valor['bd'] . ";" . $nuevaLinea . "GRANT ALL PRIVILEGES ON " . $valor['bd'] . ".* TO '" . $valor['usuario'] . "'@'localhost' IDENTIFIED BY 'usuario';" . $nuevaLinea
                                );
                            }
                            fclose($scriptSQL);
                            unlink($ruta_subida);
                            echo "<br><br><a href='fileDownload.php?archivoDownload=" . $nombreArchivoSql . "'>Pulsar para descargar archivo</a>";
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
        </br></br><a href="../vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../../index.html">Volver a Inicio</a></p>
    </body>
</html>