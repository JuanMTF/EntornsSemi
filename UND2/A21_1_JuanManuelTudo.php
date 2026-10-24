<?php
/*1. Crea una aplicació que donat un determinat mes (en valor numèric: 1 per a
gener, 2 per a febrer...) ens diga el número de dies que té aquest mes. Respecte
a l’any, utilitzarem l’any actual (2024), per al càlcul del mes de febrer.*/
/* Dies dels mesos*/
    $mesos=1;
    
switch($mesos) {
    case 1:
        print "Enero tiene 31 dias";
        break;
    case 2:
        print  "Febrero tiene 29 dias";
        break; 
    case 3:
        print "Marzo tiene 31 dias";
        break;
    case 4:
        print  "Abril tiene 30 dias";
        break; 
    case 5:
        print "Mayo tiene 31 dias";
        break;
    case 6:
        print  "Junio tiene 30 dias";
        break; 
    case 7:
        print "Julio tiene 31 dias";
        break;
    case 8:
        print  "Agosto tiene 31 dias";
        break;
    case 9:
        print "Septiembre tiene 30 dias";
        break;
    case 10:
        print  "Octubre tiene 31 dias";
        break; 
    case 11:
        print "Noviembre tiene 30 dias";
        break;
    case 12:
        print  "Diciembre tiene 31 dias";
        break;                     
}

?>
