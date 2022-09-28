<HTML>
<HEAD><TITLE> EJ5A – Arrays Unidimensionales</TITLE></HEAD>
<BODY>
<?php

/*definir tres arrays con los siguientes valores relativos a módulos que se imparten en 
el ciclo DAW: a. Unir los 3 arrays en uno único sin utilizar funciones de arrays
b. Unir los 3 arrays en uno único usando la función array_merge()
c. Unir los 3 arrays en uno único usando la función array_push()
*/

$array1 = array("Bases Datos","Entornos Desarrollo","Programacion");
$array2 = array("Sistemas Informaticos", "FOL", "Mecanizado");
$array3 = array("Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Ingles");

$array4 = array($array1, $array2, $array3);
$cantidad = count($array4);
echo "1 array sin funciones: <br>";
print_r($array4);
echo "<br><br>";
echo "1 array con array_merge(): <br>";
$array5 = array_merge($array1, $array2, $array3);
print_r($array5);
echo "<br><br>";
echo "1 array con array_push(): <br>";
$stack = array();
array_push($stack, $array1, $array2, $array3);
print_r($stack);

?>
</BODY>
</HTML>