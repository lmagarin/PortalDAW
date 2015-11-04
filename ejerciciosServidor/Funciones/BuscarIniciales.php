<?php
    function buscarIniciales($cadena)
    {
        $iniciales = "";
        $array = str_split($cadena);
        $arrayIniciales = array();
        
        for ($i = 0; $i < count($array); $i++) { 
            if($i == 0 || $array[$i-1] == " "){
                array_push($arrayIniciales, $array[$i]);
            }
        }
        /*foreach ($array as $key => $value) {
            if($key == 0 || ($key-1) == ""){
                array_push($arrayIniciales, $array[$key]);
            }
        }*/
        $iniciales = strtoupper(implode("", $arrayIniciales));
        return $iniciales;
    }
?>