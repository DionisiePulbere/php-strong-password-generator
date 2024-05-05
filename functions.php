<?php
function generatePassword($passlen){
    $caract="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_?*+&%!#@()[]{}^/-";
    $lenCaract=strlen($caract);
    
    $passRand = "";
    $i = 0;
    while ($i < $passlen){
        $numRand = rand(0, $lenCaract - 1);
        $passRand.= $caract[$numRand];
        $i++;
    }
    return $passRand;
    }
?>