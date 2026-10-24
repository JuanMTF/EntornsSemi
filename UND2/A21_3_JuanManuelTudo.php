<?php
/* Determinar si un numero es multiplo de 3 i 5 */

$num=3;

    if($num % 3 == 0 && $num % 5 == 0) {
        print "El número " . $num . " es multiplo de 3 y de 5";
    }else if($num % 3 == 0) {
        print "El número " . $num ." es multiplo de 3";
    }else if($num % 5 == 0) {
        print "El número " . $num ." es multiplo de 5";
    }else {
        print "El número " . $num ." no es multiplo de 3 y 5";
    }
?>