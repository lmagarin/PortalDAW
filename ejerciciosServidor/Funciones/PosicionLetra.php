<?php
    function posicionLetra($cadena, $letra)
    {
        $array = str_split($cadena);
        foreach ($array as $posicion => $letra) {
            if($array[$posicion] == $letra){
                return $posicion;
            }
        }
    }
?>