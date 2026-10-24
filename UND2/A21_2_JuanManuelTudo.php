<?php
/* Estaciones del año */

$mes=8;

    switch($mes){
        case 1:
        case 2:
        case 3:
        case 12:
            print " Hola Estem en Hivern.";
            break;
        case 4:
        case 5:
        case 6:
            print " Hola Estem en Primavera.";
            break;
        case 7:
        case 8:
        case 9:        
            print " Hola Estem en Estiu.";
            break;
        case 10:
        case 11:
            print " Hola Estem en Tardor.";
            break;      
    }
?>