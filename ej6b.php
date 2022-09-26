<HTML>
<HEAD><TITLE> EJ6B – Factorial</TITLE></HEAD>
<BODY>
<?php
/*Mostrar por pantalla el factorial de un número usando bucles.*/
$num="5";
$num1=$num;
$res = "";
$fact = "1";

for($num1; $num1 >1; $num1--){
    $fact = $fact*$num1;

    $res .= ($num1)."x";

}

echo "$num!=".$res."1=".$fact;

?>
</BODY>
</HTML>
