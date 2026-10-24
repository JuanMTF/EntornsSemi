<?php
/*5. Es demana obtenir la suma dels primers N números enters positius.*/
$n=201;
$suma=0;
if($n>=0){ 
    for($i=1; $i<=$n; $i++){
        $suma= $suma + $i;
    }
    print "El valor de la suma es: " . $suma;
}else {
    echo " El numero debe ser positivo y mayor que 0";
}
?>