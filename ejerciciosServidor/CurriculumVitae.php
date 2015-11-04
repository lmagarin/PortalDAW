<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Curriculum Vitae</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
        <style>
            form {
                font-family:sans-serif;
                float:left;
                padding-bottom: 20px;
            }
            font {
                float:right;
            }
            #resultado {
                position: absolute;
                left: 600px;
                width: 600px;
                padding-left: 20px;
                border: 1px solid #7c7474;
            }
            #idiomas{
                float: left;
            }
            #permiso {
                float:right;
                height: 87px;
            }
            #experiencia {
                clear:both;
            }
            .anchoMaximo input {
                width: 100%;
            }
        </style>
    </head>

    <body>
        <?php
            /**
            * Ejercicio que muestra el Curriculum Vitae de un candidato.
            * @author Rafa Miranda
            * @version 1.0
            */
            $foto = "";
            $nombre = "";
            $apellidos = "";
            $dni = "";
            $edad = "";
            $localidad = "";
            $estudios = "";
            $estudiosBasicosSelected = "";
            $estudiosSecundariosSelected = "";
            $estudiosSuperioresSelected = "";
            $titulacion = "";
            $idiomas = array("","","");
            $inglesSelected = "";
            $alemanSelected = "";
            $francesSelected = "";
            $permiso = "";
            $vehiculo = "";
            $permisoCheckedTrue = "";
            $permisoCheckedFalse = "";
            $vehiculoCheckedTrue = "";
            $vehiculoCheckedFalse = "";
            $empresa = array("","","");
            $cargo = array("","","");
            $duracion = array("","","");
            $errNombre = "";
            $errApellidos = "";
            $errDni = "";
            $errEdad = "";
            $errLocalidad = "";
            $errEstudios = "";
            $errTitulacion = "";
            $errDuracion = "";
            $error = false;

            function mostrarFoto(){
                if(isset($_FILES['foto']['name'])){
                    $directorio_subida = "./images";
                    $uploadOk = 1;
                    $directorio_archivo = rtrim($directorio_subida.basename($_FILES['foto']['name']));
                    $extensionImagen = pathinfo($directorio_archivo,PATHINFO_EXTENSION);
                    //Checkear si el fichero ya existe
                    if (file_exists($directorio_archivo)) {
                        echo "Lo sentimos, el fichero ya existe.";
                        $uploadOk = 0;
                    }
                     //Checkear tamaño de la imagen
                    if ($_FILES['foto']['size'] > 1000000) {
                        echo "Lo sentimos, el archivo es demasiado grande.";
                        $uploadOk = 0;
                    }
                    //Controlar el tipo de extensión que soporta
                    if($extensionImagen != "jpg" && $extensionImagen != "png" && $extensionImagen != "jpeg"
                    && $extensionImagen != "gif" ) {
                        echo "Lo sentimos, el archivo contiene una extensión no soportada.";
                        $uploadOk = 0;
                    }
                    //Comprueba si el uploadOk está a 0 (ERROR) o a 1 (CORRECTO)
                    if ($uploadOk == 0) {
                        echo "No se ha subido.";
                    } 
                    //Si todo ha ido bien el archivo se habrá subido
                    else {
                        if (move_uploaded_file($_FILES['foto']['tmp_name'], $directorio_archivo)) {
                            return $directorio_archivo;
                            
                        } else {
                            return "";
                        }
                    }
                }
            }

            function test_input($data){
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if(isset($_POST['enviar'])){
                $foto = mostrarFoto();
                if(empty($_POST['nombre'])){
                    $errNombre = "* Nombre requerido";
                    $error = true;
                }
                else {
                    $nombre = test_input($_POST["nombre"]);
                    if(!preg_match("/^[a-zA-Zñ ]*$/",$nombre)){
                        $errNombre = "Solo se admiten letras y espacios en blanco.";
                        $error = true;
                    }
                }
                if(empty($_POST['apellidos'])){
                    $errApellidos = "* Apellidos requerido";
                    $error = true;
                }
                else {
                    $apellidos = test_input($_POST["apellidos"]);
                    if(!preg_match("/^[a-zA-Zñ ]*$/",$apellidos)){
                        $errApellidos = "Solo se admiten letras y espacios en blanco.";
                        $error = true;
                    }
                }
                if(empty($_POST['dni'])){
                    $errDni = "* DNI requerido";
                    $error = true;
                }
                else {
                    $dni = test_input($_POST["dni"]);
                    if(!preg_match("/^(\d{8}[A-Z])$/",$dni)){
                        $errDni = "Formato DNI no válido";
                        $error = true;
                    }
                }
                if(empty($_POST['edad'])){
                    $errEdad = "* Edad requerido";
                    $error = true;
                }
                else {
                    $edad = test_input($_POST["edad"]);
                    if(!preg_match("/^(\d{2})$/",$edad)){
                        $errEdad = "Solo se admiten cifras de edad válidas";
                        $error = true;
                    }
                }
                if(empty($_POST['localidad'])){
                    $errLocalidad = "* Localidad requerido";
                    $error = true;
                }
                else {
                    $localidad = test_input($_POST["localidad"]);
                    if(!preg_match("/^[a-zA-Zñ ]*$/",$localidad)){
                        $errLocalidad = "Solo se admiten letras y espacios en blanco.";
                        $error = true;
                    }
                }
                if(empty($_POST["estudios"])){
                    $errEstudios = "* Estudios requerido";
                    $error = true;
                }
                else {
                   $estudios = test_input($_POST["estudios"]);
                   if($estudios == 'basicos'){
                    $estudiosBasicosSelected = "selected='selected'";
                    $estudiosSecundariosSelected = "";
                    $estudiosSuperioresSelected = "";
                    }
                    if($estudios == 'secundarios'){
                        $estudiosSecundariosSelected = "selected='selected'";
                        $estudiosBasicosSelected = "";
                        $estudiosSuperioresSelected = "";
                    }
                    if($estudios == 'F.P./Universitarios'){
                        $estudiosSuperioresSelected = "selected='selected'";
                        $estudiosBasicosSelected = "";
                        $estudiosSecundariosSelected = "";
                    }
                }
                if(empty($_POST['titulacion'])){
                    $errTitulacion = "* Titulación requerido";
                    $error = true;
                }
                else {
                    $titulacion = test_input($_POST["titulacion"]);
                    if(!preg_match("/^[a-zA-Zñ ]*$/",$titulacion)){
                        $errTitulacion = "Solo se admiten letras y espacios en blanco.";
                        $error = true;
                    }
                }
                if(empty($_POST["idiomas"])){
                    $idiomas = array("","",""); //porque no es un campo obligatorio
                }
                else {
                    $idiomas = $_POST["idiomas"];
                }
                if(empty($_POST["permiso"])){
                    $permiso = ""; //porque no es un campo obligatorio
                }
                else {
                    $permiso = $_POST["permiso"];
                    if($permiso == 'true'){
                        $permisoCheckedTrue = "checked";
                        $permisoCheckedFalse = "";
                    }
                    else {
                        $permisoCheckedTrue = "";
                        $permisoCheckedFalse = "checked";
                    }
                }
                if(empty($_POST["vehiculo"])){
                    $vehiculo = ""; //porque no es un campo obligatorio
                }
                else {
                    $vehiculo = $_POST["vehiculo"];
                    if($vehiculo == 'true'){
                        $vehiculoCheckedTrue = "checked";
                        $vehiculoCheckedFalse = "";
                    }
                    else {
                        $vehiculoCheckedTrue = "";
                        $vehiculoCheckedFalse = "checked";
                    }
                }
                $empresa = $_POST['empresa'];
                $cargo = $_POST['cargo'];
                $duracion = $_POST['duracion'];
            }

            function buscarEnArray($valor,$idiomas){
                if(in_array($valor,$idiomas)){
                    return 'selected';
                }
                else {
                    return '';
                }
            }

            echo "<h1>CURRICULUM VITAE</h1>
                <form action='CurriculumVitae.php' method='post'>
                    <fieldset class='anchoMaximo' style='background-color: #FFFAA0'>
                        <legend><strong>Datos personales</strong></legend>
                            Foto: <input type='hidden' name='MAX_FILE_SIZE' value='500000'/>
                            <input name='foto' type='file'/></br></br>
                            Nombre: <font color='red'>".$errNombre."</font></br>
                            <input type='text' name='nombre' value='".$nombre."'></br></br>
                            Apellidos: <font color='red'>".$errApellidos."</font></br>
                            <input type='text' name='apellidos' value='".$apellidos."'></br></br>
                            DNI: <font color='red'>".$errDni."</font></br>
                            <input type='text' name='dni' value='".$dni."'></br></br>
                            Edad: <font color='red'>".$errEdad."</font></br>
                            <input type='text' name='edad' value='".$edad."'></br></br>                                   
                            Localidad: <font color='red'>".$errLocalidad."</font></br>
                            <input type='text' name='localidad' value='".$localidad."'></br></br>              
                    </fieldset>
                    <fieldset class='anchoMaximo' style='background-color: #FFFAA0'>
                        <legend><strong>Formación Académica</strong></legend>
                            Nivel de estudios:<font color='red'>".$errEstudios."</font></br>
                                <select name='estudios'>
                                    <option name='estudios' value='basicos' ".$estudiosBasicosSelected.">Básicos</option>
                                    <option name='estudios' value='secundarios' ".$estudiosSecundariosSelected.">Secundarios</option>
                                    <option name='estudios' value='F.P./Universitarios' ".$estudiosSuperioresSelected.">F.P. / Universitarios</option>
                                </select></br></br>     
                            Titulación (universitaria o F.P.):<font color='red'>".$errTitulacion."</font></br>
                            <input type='text' name='titulacion' value='".$titulacion."'>
                    </fieldset>
                    <fieldset class='anchoMaximo' id='idiomas' style='background-color: #FFFAA0'>
                        <legend><strong>Idiomas (Solo si posee)</strong></legend>
                                <select name='idiomas[]' multiple>
                                    <option name='idiomas[]' value='ingles' ".buscarEnArray('ingles',$idiomas).">Inglés</option>
                                    <option name='idiomas[]' value='aleman' ".buscarEnArray('aleman',$idiomas).">Alemán</option>
                                    <option name='idiomas[]' value='frances' ".buscarEnArray('frances',$idiomas).">Francés</option>
                                </select>     
                    </fieldset>
                    <fieldset id='permiso'style='background-color: #FFFAA0'>
                        <legend><strong>Permiso Conducción (Solo si posee)</strong></legend>
                            <div style='float:left; padding-top:13px;' fl>Permiso:</br>   
                                <input type='radio' name='permiso' value='true' ".$permisoCheckedTrue.">SI
                                <input type='radio' name='permiso' value='false' ".$permisoCheckedFalse.">NO</div>
                            <div style='float:right; padding-top:13px;'>Vehículo:</br>
                                <input type='radio' name='vehiculo' value='true' ".$vehiculoCheckedTrue.">SI
                                <input type='radio' name='vehiculo' value='false' ".$vehiculoCheckedFalse.">NO</div>              
                    </fieldset>
                    <fieldset class='anchoMaximo' id='experiencia' style='background-color: #FFFAA0'>
                        <legend><strong>Experiencia Profesional (Solo si posee)</strong></legend>
                            <ol>";
                                for ($i=0; $i<3; $i++) { 
                                    echo "<li>Nombre Empresa: <input type='text' name='empresa[]' value='".$empresa[$i]."'></br>
                                        Cargo: <input type='text' name='cargo[]' value='".$cargo[$i]."'></br>
                                        Duración (meses): <input type='text' name='duracion[]' value='".$duracion[$i]."'></br></li></br>";
                                }        
                            echo "</ol>
                    </fieldset>
                    <input type='submit' name='enviar' value='Enviar' style='height:100px; width:100px; font-weight:bolder; font-size:20px'>
                </form>";

            if(isset($_POST["enviar"]) && !$error){
                echo "<div id='resultado'><h3>Datos Personales</h3>";
                if($foto != ""){
                    echo "<img src='".$foto."'/>";
                }
                else {
                    echo "La foto no se ha cargado correctamente.";
                }
                echo "<p><strong>Nombre: ".$nombre."</strong></p>
                <p><strong>Apellidos: ".$apellidos."</strong></p>
                <p><strong>DNI: ".$dni."</strong></p>
                <p><strong>Edad: ".$edad."</strong></p>
                <p><strong>Localidad: ".$localidad."</strong></p>
                </br>
                <h3>Formación Académica</h3>
                <p><strong>Nivel de Estudios: ".$estudios."</strong></p>
                <p><strong>Titulación: ".$titulacion."</strong></p>
                </br>
                <h3>Idiomas</h3>";
                    foreach ($idiomas as $valor) {
                        echo "<p><strong>Idioma: ".$valor."</strong></p>";
                    }
                echo "</br>
                <h3>Permiso Conducción</h3>";
                if($permiso =='true'){
                    $perm = 'Si';
                }
                else {
                    $perm = 'No';
                }
                if($vehiculo =='true'){
                    $veh = 'Si';
                }
                else {
                    $veh = 'No';
                }
                echo "<p><strong>Permiso: ".$perm."</strong></p>
                <p><strong>Vehículo: ".$veh."</strong></p>
                </br>
                <h3>Experiencia Profesional</h3>";
                for ($i=0; $i<3; $i++) { 
                    if($empresa[$i] != ""){
                        echo "<p><strong>Nombre Empresa: ".$empresa[$i]."</strong></p>
                        <p><strong>Cargo: ".$cargo[$i]."</strong></p>
                        <p><strong>Meses: ".$duracion[$i]."</strong></p>";
                    }
                }
                echo "</div>";
            }
        ?>
        </table><p style="clear:both;"><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>