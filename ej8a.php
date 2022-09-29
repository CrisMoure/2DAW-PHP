<HTML>
<HEAD><TITLE> EJ8A – Arrays Unidimensionales</TITLE></HEAD>
<BODY>
<?php
/*crear un array asociativo con los nombres de 5 alumnos y la nota de cada uno de
ellos en Bases Datos. Se pide:
a. Mostrar el alumno con mayor nota.
b. Mostrar el alumno con menor nota.
c. Media notas obtenidas por los alumnos*/

#creamos el array
$alumnos = array("Juan"=>5, "Luis"=>4, "Carlos"=>9, "Cristina"=>7, "David"=>1);


$maxnota = array_search(max($alumnos),$alumnos);    #buscamos con array_search la clave que corresponde al mayor valor => max($alumnos)
echo "El alumno con mayor nota: ".$maxnota."<br>";

$minnota = array_search(min($alumnos), $alumnos);    #buscamos con array_search la clave que corresponde al menor valor => min($alumnos)
echo "El alumno con menor nota: ".$minnota."<br>";

#para obtener la media primero hacemos la suma de todos los valores del array
$sum = array_sum($alumnos);
$media = $sum/count($alumnos); #dividimos el resultado de la suma entre el numero de posiciones del array
echo "La media de las notas es: ".$media;
?>
</BODY>
</HTML>