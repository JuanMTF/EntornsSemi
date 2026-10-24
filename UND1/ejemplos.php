<?php

echo "Hola mundo";
$nombre = "Juan Manuel";
$edad=34;
var_dump($edad);
var_dump($nombre);
$nota=9.5;
var_dump($nota);
$aprobado=true;
echo "<br> Hola $nombre, tienes $edad, anños";
$num1=10;
$num2=5;
echo "<br> La suma de los numeros es ". ($num1+$num2);
// La potencia en php es con el operador **, No con 
echo "<br> La potencia de los numeros es " . ($num1**$num2);
echo "<br> El modulo es" . ($num1%$num2);
$num3=10;
if($num3%2==0){
    echo "<br> El número $num3 es par";
}else{  
    echo "<br> El número $num3 es impar";
}
?>