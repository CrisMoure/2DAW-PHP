<HTML>
<HEAD><TITLE> EJ6B – Factorial</TITLE></HEAD>
<BODY>
<?php
/*Mostrar por pantalla el factorial de un número usando bucles.*/
$num="5";
$num1=$num;
$res = "";
$fact = "1";

    #con un bucle for vamos disminuyendo el num de 1 en 1
for($num1; $num1 >1; $num1--){
    $fact = $fact*$num1;    #multiplicamos el factorial por el numero

    $res .= $num1."x";    #en una variable guardamos el numero que va a ir disminuyendo y la x para luego imprimir todo junto

}
#imprimimos
echo "$num!=".$res."1=".$fact;

?>
</BODY>
</HTML>
