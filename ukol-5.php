<?php

function minimum($a, $b){
if (is_numeric($a)&&(is_numeric($b)))
    {
        if ($a < $b) {
            return $a;
        } else {
            return $b;
        }

    } else {return false;}}
$vysledek = minimum('x', 12.3);
if ($vysledek !== false){
    echo $vysledek;
}
else {echo "Chyba!";}



