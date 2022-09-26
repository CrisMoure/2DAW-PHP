<HTML>
<HEAD><TITLE> EJ4B – Tabla Multiplicar</TITLE></HEAD>
<BODY>
   
<?php
 /* Mostrar por pantalla la tabla de multiplicar de un número usando bucles*/
$num="8";

for($i = 1; $i < 11; $i++){
    $res = $num * $i;   #multiplicamos el numero por la variable i que irá aumentando de 1 en un 1 desde el 1 hasta el 10
    echo "$num x $i = $res <br>";   #imprimimos
}


?>
</BODY>
</HTML>