<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Juego Verbos Irregulares</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width", initial-scale=1, maximum-scale=1/>
        <script type="text/javascript" src=""></script>
    </head>
    <body>   
        <?php
        /**
        * Juego de los verbos irregulares en inglés.
        * @author Rafa Miranda
        * @version 1.0
        */
        $dificultad = "";
        $cantidad = "";
        $contadorVerbos = 0;
        $dificultadFacilSelected = "";
        $dificultadMedioSelected = "";
        $dificultadDificilSelected = "";
        $cantidadDiezSelected = "";
        $cantidadVeinteSelected = "";
        $cantidadTreintaSelected = "";
        $verbosElegidos = array();
        $valor = "";
        $casillasVacias = array();
        $verbos = array(
                        array("Infinitivo"=>"Be", "Pasado"=>"Was/Were", "Participio"=>"Been", "Traduccion"=>"Ser"),
                        array("Infinitivo"=>"Beat", "Pasado"=>"Beat", "Participio"=>"Beaten", "Traduccion"=>"Golpear/Latir"),
                        array("Infinitivo"=>"Bite", "Pasado"=>"Bit", "Participio"=>"Bitten", "Traduccion"=>"Morder"),
                        array("Infinitivo"=>"Blow", "Pasado"=>"Blew", "Participio"=>"Blown", "Traduccion"=>"Soplar"),
                        array("Infinitivo"=>"Become", "Pasado"=>"Became", "Participio"=>"Become", "Traduccion"=>"Convertirse en"),
                        array("Infinitivo"=>"Begin", "Pasado"=>"Began", "Participio"=>"Begun", "Traduccion"=>"Comenzar"),
                        array("Infinitivo"=>"Break", "Pasado"=>"Broke", "Participio"=>"Broken", "Traduccion"=>"Romper"),
                        array("Infinitivo"=>"Bring", "Pasado"=>"Brought", "Participio"=>"Brought", "Traduccion"=>"Traer"),
                        array("Infinitivo"=>"Build", "Pasado"=>"Built", "Participio"=>"Built", "Traduccion"=>"Construir"),
                        array("Infinitivo"=>"Buy", "Pasado"=>"Bought", "Participio"=>"Bought", "Traduccion"=>"Comprar"),
                        array("Infinitivo"=>"Catch", "Pasado"=>"Cought", "Participio"=>"Cought", "Traduccion"=>"Coger"),
                        array("Infinitivo"=>"Choose", "Pasado"=>"Chose", "Participio"=>"Chosen", "Traduccion"=>"Elegir"),
                        array("Infinitivo"=>"Come", "Pasado"=>"Came", "Participio"=>"Came", "Traduccion"=>"Venir"),
                        array("Infinitivo"=>"Cost", "Pasado"=>"Cost", "Participio"=>"Cost", "Traduccion"=>"Costar"),
                        array("Infinitivo"=>"Cut", "Pasado"=>"Cut", "Participio"=>"Cut", "Traduccion"=>"Cortar"),
                        array("Infinitivo"=>"Do", "Pasado"=>"Did", "Participio"=>"Done", "Traduccion"=>"Hacer"),
                        array("Infinitivo"=>"Draw", "Pasado"=>"Drew", "Participio"=>"Drawn", "Traduccion"=>"Dibujar"),
                        array("Infinitivo"=>"Dream", "Pasado"=>"Dreamt", "Participio"=>"Dreamt", "Traduccion"=>"Soñar"),
                        array("Infinitivo"=>"Drink", "Pasado"=>"Drank", "Participio"=>"Drunk", "Traduccion"=>"Beber"),
                        array("Infinitivo"=>"Eat", "Pasado"=>"Ate", "Participio"=>"Eaten", "Traduccion"=>"Comer"),
                        array("Infinitivo"=>"Fall", "Pasado"=>"Fell", "Participio"=>"Fallen", "Traduccion"=>"Caer"),
                        array("Infinitivo"=>"Feed", "Pasado"=>"Fed", "Participio"=>"Fed", "Traduccion"=>"Alimentar"),
                        array("Infinitivo"=>"Fight", "Pasado"=>"Fought", "Participio"=>"Fought", "Traduccion"=>"Pelear"),
                        array("Infinitivo"=>"Forget", "Pasado"=>"Forgot", "Participio"=>"Forgotten", "Traduccion"=>"Olvidar"),
                        array("Infinitivo"=>"Get", "Pasado"=>"Got", "Participio"=>"Got", "Traduccion"=>"Obtener"),
                        array("Infinitivo"=>"Go", "Pasado"=>"Went", "Participio"=>"Gone", "Traduccion"=>"Ir"),
                        array("Infinitivo"=>"Have", "Pasado"=>"Had", "Participio"=>"Had", "Traduccion"=>"Tener"),
                        array("Infinitivo"=>"Hide", "Pasado"=>"Hid", "Participio"=>"Hidden", "Traduccion"=>"Esconder"),
                        array("Infinitivo"=>"Know", "Pasado"=>"Knew", "Participio"=>"Known", "Traduccion"=>"Saber"),
                        array("Infinitivo"=>"Lose", "Pasado"=>"Lost", "Participio"=>"Lost", "Traduccion"=>"Perder"),
                        array("Infinitivo"=>"Make", "Pasado"=>"Made", "Participio"=>"Made", "Traduccion"=>"Fabricar"),
                        array("Infinitivo"=>"Pay", "Pasado"=>"Paid", "Participio"=>"Paid", "Traduccion"=>"Pagar"),
                        array("Infinitivo"=>"Read", "Pasado"=>"Read", "Participio"=>"Read", "Traduccion"=>"Leer"),
                        array("Infinitivo"=>"Say", "Pasado"=>"Said", "Participio"=>"Said", "Traduccion"=>"Decir")
                        );

        echo "<form action='juegoVerbosIrregulares.php' method='post'>
                Nivel de dificultad:
                <select name='dificultad'>
                    <option name='dificultad' value='facil' ".$dificultadFacilSelected."'>Fácil</option>
                    <option name='dificultad' value='medio' ".$dificultadMedioSelected."'>Medio</option>
                    <option name='dificultad' value='dificil' ".$dificultadDificilSelected."'>Dificil</option>
                </select>
                <select name='cantidad'>
                    <option name='cantidad' value='diez' ".$cantidadDiezSelected."'>10 verbos</option>
                    <option name='cantidad' value='veinte' ".$cantidadVeinteSelected."'>20 verbos</option>
                    <option name='cantidad' value='treinta' ".$cantidadTreintaSelected."'>30 verbos</option>
                </select>
                <input type='submit' name='aceptar' value='Enviar'></br>";
        
        if(isset($_POST['aceptar'])){
            $dificultad = $_POST['dificultad'];
            if($dificultad == 'facil'){
                $dificultadFacilSelected = "selected='selected'";
                $dificultadMedioSelected = "";
                $dificultadDificilSelected = "";
                $nivel = 9;
            }
            elseif($dificultad == 'medio'){
                $dificultadFacilSelected = "";
                $dificultadMedioSelected = "selected='selected'";
                $dificultadDificilSelected = "";
                $nivel = 5;
            }
            else{
                $dificultadFacilSelected = "";
                $dificultadMedioSelected = "";
                $dificultadDificilSelected = "selected='selected'";
                $nivel = 1;
            }
            $cantidad = $_POST['cantidad'];
            if($cantidad == 'diez'){
                $cantidadDiezSelected = "selected='selected'";
                $cantidadVeinteSelected = "";
                $cantidadTreintaSelected = "";
                $cantidad = 10;
            }
            elseif($cantidad == 'veinte'){
                $cantidadDiezSelected = "";
                $cantidadVeinteSelected = "selected='selected'";
                $cantidadTreintaSelected = "";
                $cantidad = 20;
            }
            else{
                $cantidadDiezSelected = "";
                $cantidadVeinteSelected = "";
                $cantidadTreintaSelected = "selected='selected'";
                $cantidad = 30;
            }
                   
            echo "</br><table border='1' style='border-collapse:collapse; text-align:center;'>";
            echo "<td>Infinitivo</td><td>Pasado</td><td>Participio</td><td>Traduccion</td>";
            while($contadorVerbos<$cantidad){
                foreach($verbos as $key => $valu){
                    if($contadorVerbos>=$cantidad){
                        break;
                    }
                    $aleatFila = rand(0,10);
                    if($aleatFila>9){
                        echo "<tr>";
                        $filaVacia = true;
                        echo "<input type='hidden' name='verbosElegidos[]' value='$key'>";
                        for($i=0; $i<count($valu); $i++){
                        /*foreach($valu as $clave=>$valor){*/
                            $aleatCasilla = rand(0,10);
                                switch ($i) {
                                    case 'Traduccion':
                                        if($filaVacia){
                                            echo "<td>$valor</td>";
                                            $filaVacia = false;
                                            echo "<input type='hidden' name='casillasVacias[]' value='false'>";                                            break;
                                        }
                                    case 'Infinitivo':
                                    case 'Pasado':
                                    case 'Participio':
                                        if ($aleatCasilla<$nivel) {
                                            echo "<td>$valor</td>";
                                            $filaVacia = false;
                                            echo "<input type='hidden' name='casillasVacias[]' value='false'>";                                        }
                                        else {
                                            echo "<input type='hidden' name='ocultos[]' value='$valor'>";
                                            echo "<input type='hidden' name='casillasVacias[]' value='true'>";
                                            echo "<td><input type='text' name='respuestas[]' value=''></td>";
                                        }
                                        break;
                                    default:
                                        break;
                                }
                        }
                        $contadorVerbos++;
                        echo "</tr>";
                    }                            
                }
            }
            echo "</table>";
            echo "</br><input type='submit' name='comprobar' value='Comprobar'>
                    &nbsp;&nbsp;&nbsp;<input type='submit' name='ayuda' value='Ayuda'></form>";         
        }
        if(isset($_POST['ayuda'])){
            $verbosElegidos = $_POST['verbosElegidos'];
            echo "<table border='1' style='border-collapse:collapse; text-align:center;'>";
            echo "<td>Infinitivo</td><td>Pasado</td><td>Participio</td><td>Traduccion</td>";
            foreach($verbosElegidos as $value){ //recorro el array de verbos elegidos
                echo "<tr>";
                foreach($verbos as $clave => $verbo){ //recorro las filas del array principal
                    if($value == $clave){ //si el numero de fila es igual a la fila actual en el array principal
                        foreach($verbo as $valor){ //recorro esa fila en el array principal
                            echo "<td>$valor</td>"; //e imprimo todas las formas del verbo
                        }
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        if(isset($_POST['comprobar'])){
            $respuestas = $_POST['respuestas'];
            $verbosElegidos = $_POST['verbosElegidos'];
            $ocultos = $_POST['ocultos'];
            $casillasVacias = $_POST['casillasVacias'];
            $posRespuestas = 0;
            print_r($casillasVacias);
            echo "</br></br>";
            print_r($ocultos);
            echo "<table border='1' style='border-collapse:collapse; text-align:center;'>";
            echo "<td>Infinitivo</td><td>Pasado</td><td>Participio</td><td>Traduccion</td>";
            foreach($verbosElegidos as $value){ //recorro el array de verbos elegidos
                echo "<tr>";
                foreach($verbos as $clave => $verbo){ //recorro las filas del array principal
                    if($value == $clave){ //si el numero de fila es igual a la fila actual en el array principal
                        foreach($verbo as $valor){ //recorro esa fila en el array principal
                            if($casillasVacias[$valor] && $respuestas[$posRespuestas] == $valor){ //compruebo que es casilla vacia y lo escrito por usuario es correcto
                                echo "<td>$valor</td>"; //imprimo el verbo
                            }
                            else {
                                echo "<td><input type='text' name='respuestas[]' value=''></td>"; //pinto casilla blanca
                            }
                            $posRespuestas++; 
                        }
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
        </br></br><a href="../ejerciciosServidor/vercodigo.php?src=../..<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Ver Código Fuente</a>&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href="../index.html">Volver a Inicio</a></p>
    </body>
</html>