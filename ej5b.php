<HTML>
<HEAD><TITLE> EJ5B – Tabla multiplicar con TD</TITLE></HEAD>
<BODY>
   
<?php
 /* Mostrar por pantalla la tabla de multiplicar de un número con su tabla HTML
correspondiente:
*/
$num="8";

for($i = 1; $i < 11; $i++){
    $res = $num * $i;   #multiplicamos el numero por la variable i que irá aumentando de 1 en un 1 desde el 1 hasta el 10
    
    echo "<table border = \"1\"><tr><td>";  #creamos el inicio de la tabla en html
    echo "$num x $i </td><td> $res </td>";  #imprimimos
    echo "</tr></table>";   
}



?>
</BODY>
</HTML>