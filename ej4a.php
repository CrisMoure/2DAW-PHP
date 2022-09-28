<HTML>
<HEAD><TITLE> EJ4A – Arrays Unidimensionales</TITLE></HEAD>
<BODY>
<?php

/*a partir del array definido en el ejercicio anterior crear un nuevo array que almacene 
los números binarios en orden inverso.*/

$i = 0;


#usando un bucle while buscamos los primeros 20 numeros y los pasamos a binario usando decbin()
while($i < 20){
    $binario = decbin($i);
    $arrbinarios[$i] = $binario;    #metemos en un array los binarios
    $i++;
}
#con la funcion count guardamos en una variable la longitud del array
$cantidad = count($arrbinarios);
#con rsort() guardamos en una nueva variable el array invertido
$arrinverso = rsort($arrbinarios);
echo "<table border =  \"1\"><th>Indice</th><th>Binario</th><th>Octal</th>";
#mediante el bucle for recorremos cada posicion del array y lo vamos imprimiendo en una tabla, separando indice, binarios y octales
for($x = 0; $x < $cantidad; $x++){
    $octal = decoct($x);  #pasamos de decimal a octal 
    echo "<tr><td>"; 
    echo $x."</td><td>".$arrbinarios[$x]."</td><td>".$octal."</td>";
    echo "</tr>";
}
echo "</table>";



?>
</BODY>
</HTML>