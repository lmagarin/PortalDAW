<?php
    function sumaDigitosRecursiva($numero)
    {
        $suma = 0;
        $a;
        $b;
        while ($numero > 0) {
            $a = $numero%10;
            $suma += $a;
            $b=($numero - $a) / 10;
            $numero = $b;
        }
        return $suma;
    }
?>

