<HTML>
<HEAD><TITLE> EJ2B – Conversor Decimal a base n</TITLE></HEAD>
<BODY>
<?php

/*Transformar un número decimal a cualquier otra base (base 2 a base 9) usando
bucles (no se podrán utilizar las funcionesde conversión)*/

$num="48";
$num1 = $num;
$base= "8";
$res = "";

#Creamos una condicion para asegurarnos de que si el numero es 0 en binario sea 0
if ($num1 == 0)
    $res = 0;    

#hacemos un bucle hasta que el numero sea mayor o igual a 1 
while($num1 >= 1){
    $res .= $num1 % $base;  #concatenamos los resultados del resto de dividir el numero entre la base consecutivamente
    $num1 = $num1 / $base;   #cambiamos el valor del numero al resultado de dividirlo entre la base sucesivamente
}


#imprimimos
echo "Numero $num en base $base = ".strrev($res);
?>
</BODY>
</HTML>
