<HTML>
<HEAD><TITLE> EJ4A – Arrays Unidimensionales</TITLE></HEAD>
<BODY>
<?php

/*a partir del array definido en el ejercicio anterior crear un nuevo array que almacene 
los números binarios en orden inverso.*/

$i = 0;
$a = 0;

#usando un bucle while buscamos los primeros 20 numeros y los pasamos a binario usando decbin()
while($i < 20){
    $binario = decbin($i);
    $arrbinarios[$i] = $binario;    #metemos en un array los binarios
    $i++;
}
#con while buscamos los primeros 20 numeros decimales y los pasamos a octal usando decoct()
while($a < 20){
    $octal = decoct($a);
    $arroctales[$a] = $octal;    #metemos en un array los octales
    $a++;
}
#con la funcion count guardamos en una variable la longitud del array
$cantidad = count($arrbinarios);
#con array_reserve guardamos en una nueva variable el array invertido
$arrinverso = array_reverse($arrbinarios);
$arrinverso2 = array_reverse($arroctales);
echo "<table border =  \"1\"><th>Indice</th><th>Binario</th><th>Octal</th>";
#mediante el bucle for recorremos cada posicion del array y lo vamos imprimiendo en una tabla, separando indice, binarios y octales
for($x = 0; $x < $cantidad; $x++){
        echo "<tr><td>"; 
        echo $x."</td><td>".$arrinverso[$x]."</td><td>".$arrinverso2[$x]."</td>";
        echo "</tr>";
    

}
echo "</table>";



?>
</BODY>
</HTML>