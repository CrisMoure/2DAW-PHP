<HTML>
<HEAD><TITLE> EJ5A – Arrays Unidimensionales</TITLE></HEAD>
<BODY>
<?php

/*mostrar el array resultante del ejercicio anterior en orden inverso. Previamente, se
deberá borrar el módulo mecanizado que no se imparte en el ciclo DAW.
*/

$array1 = array("Bases Datos","Entornos Desarrollo","Programacion");
$array2 = array("Sistemas Informaticos", "FOL", "Mecanizado");
$array3 = array("Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Ingles");

$array5 = array_merge($array1, $array2, $array3);   #con array_merge juntamos los 3 arrays a la vez en uno nuevo
print_r($array5);
echo "<br><br>";

#primero buscamos la posicion del elemento que queremos eliminar
$posicion = array_search("Mecanizado", $array5);
echo $posicion;

#usando unset() eliminamos del array el elemento que se encuentra en esa posicion
unset($array5[$posicion]);
#usando array_reverse() le damos la vuelta al array
$arrayinverso = array_reverse($array5);
#imprimimos
print_r($arrayinverso);




?>
</BODY>
</HTML>