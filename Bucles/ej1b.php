<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php

/* Transformar un número decimal a binario usando bucles (no se podrá utiliza la
función decbin)*/

$num="127";
$num1 = $num;
$bin = "";

#Creamos una condicion para asegurarnos de que si el numero es 0 en binario sea 0
if($num == 0)
    $bin = $num;

#hacemos un bucle hasta que el numero sea mayor o igual a 1 
while($num1 >= 1){
    $bin .= $num1 % 2;  #concatenamos los resultados del resto de dividir el numero entre 2 consecutivamente
    $num1 = $num1 / 2;  #cambiamos el valor del numero al resultado de dividirlo entre 2 sucesivamente
    
}


#imprimimos
echo "Numero $num en binario = ".strrev($bin);
?>
</BODY>
</HTML>
