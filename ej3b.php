<HTML>
<HEAD><TITLE> EJ3B – Conversor Decimal a base 16</TITLE></HEAD>
<BODY>
<?php

/*Transformar un número decimal a cualquier otra base (base 2 a base 9) usando
bucles (no se podrán utilizar las funcionesde conversión)*/

$num="1";
$num1= $num;
$base="16";
$carHex = "0123456789ABCDEF";   #creamos una variable que contenga los caracteres hexadecimales
$hex = "";

#condicion para asegurarnos de que si el numero es 0 nos devolvera 0
if ($num1 == 0)
    $hex = 0;  

#hacemos un bucle hasta que el numero sea mayor o igual que 1
while($num1 >= 1){
    $res = $num1 % $base;   #dividimos el decimal entre la base y el resto lo guardamos en una variable
    $num1 = $num1/$base;    #cambiamos el valor del decimal al resultado de dividirlo entre la base 
    $hex .= substr($carHex, $res, 1);   #utilizando el resto iteramos sobre los caracteres hexadecimales para conseguir el valor hexadecimal
}



#imprimimos
echo "Numero $num en base $base = ".strrev($hex);
?>
</BODY>
</HTML>