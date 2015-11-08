<?php
    function posicionLetra($cadena, $letra)
    {
        $array = str_split($cadena);
        foreach ($array as $posicion => $value) {
            if($value == $letra){
                return $posicion;
            }
        }
    }
?>