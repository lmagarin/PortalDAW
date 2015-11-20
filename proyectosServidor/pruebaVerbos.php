<?php
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

    const NUMCOLUMNAS = 4;
    const NUMFILAS = 34;
    srand(time()); 
    $auxIndices = array(); // lo utilizamos para guardar las filas aleatorias
    $i = 0;

    while($i < 4) { // cuatro son los verbos aleatorios con los que voy a jugar
        $fila = array();
        // cargamos indices en huecos en la fila
        for($j = 0; $j < 2; $j++){
            do {
                $nAleatorio = rand(0,3);
            }while(in_array($nAleatorio, $fila));
            $fila[$j] = $nAleatorio;
        }
        do{
            $nAleatorio = rand(0,NUMFILAS); // siete es el numero maximo de verbos que yo tengo almacenados
        }while(in_array($nAleatorio, $auxIndices));
        $auxIndices[] = $nAleatorio;
        $indices[$nAleatorio] = $fila;
        $i++;
    }

    $aciertos = 0;
    $valor = "";
    $estilo = "background:transparent;color:black";

    if(isset($_POST['enviar'])){
        $indices = $_POST['entrada'];
    }

    ////para el formulario////
    foreach ($indices as $clave => $fila) {
        for ($i=0; $i <= NUMCOLUMNAS-1 ; $i++) {
            if(isset($_POST['enviar'])){
                $condicion = array_key_exists($i, $fila);
                if($condicion){
                    $valor = $fila[$i];
                    if($fila[$i] == $verbos[$clave][$i]){
                        $aciertos++;
                        $estilo = "background:transparent;color:green";
                    }
                    else {
                        $estilo = "background:transparent;color:red";
                    }
                }
            }
            else {
                $condicion = in_array($i,$fila);
            }
            if($condicion){
                echo "<input style='".$estilo."' type='text' name='entrada[".$clave."][".$i."]' value='".$valor."'>";
            }
            else {
                echo $verbos[$clave][$i] . " ";
            } 
        }
        echo "</br>";
    }
    echo "<input type='submit' name='enviar'>";
    echo "</form>";
    if(isset($_POST['enviar'])){
        echo "Aciertos: ".$aciertos."</br>";
    }
    echo "<a href='pruebaVerbos.php'>Reiniciar</a>";
        
?>