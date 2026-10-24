<?php
/*4. Donat tres números enters, tornar el valor del número major dels tres.*/

$num1=22005;
$num2=205888;
$num3=44;
$numMayor=0;

    if ($num1 > $num2) {
        $numMayor = $num1;
    }else {
        $numMayor = $num2; 
    }
    if($numMayor < $num3) {
        $numMayor = $num3;        
    }else {
        $numMayor = $numMayor;
    }

    print "Los numeros dados son: " . $num1 . " , " . $num2 . " , " . $num3 . "<br>";
    print "El número Mayor es: " . $numMayor;
?>