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

#unir 3 arrays sin funciones:
#creamos una nueva variable y le pasamos el primer array
$array4 = $array1;
$cantidad1 = count($array4);    #sacamos la cantidad de elementos del nuevo array
$j=0;   #creamos una variable que usaremos para iterar los siguientes arrays que incluyamos y la inicializamos a 0

$suma = $cantidad1 + count($array2);    #sacamos la suma de las posiciones del primer array y del segundo
for($i = $cantidad1; $i < $suma; $i++){ #mediante el bucle iniciamos al final del primer array y vamos incluyendo cada posicion del segundo
    $array4[$i] = $array2[$j];
    $j++;   
}
$j=0;   #volvemos a poner a 0 esta variable para poder meter el siguiente array
$cantidad1 = count($array4);    #volvemos a hacer el recuento de las posiciones de nuestro array donde estamos juntando todos
$suma = $cantidad1 + count($array3);
for($i = $cantidad1; $i < $suma; $i++){
    $array4[$i] = $array3[$j];
    $j++;
}

#imprimimos
echo "1 array sin funciones: <br>";
print_r($array4);
echo "<br><br>";
echo "1 array con array_merge(): <br>";
$array5 = array_merge($array1, $array2, $array3);   #con array_merge juntamos los 3 arrays a la vez en uno nuevo
print_r($array5);
echo "<br><br>";

echo "1 array con array_push(): <br>";
$stack = [];    #para juntar con array_push creamos un nuevo array vacio
array_push($stack, ...$array1, ...$array2, ...$array3); #incluyemos cada posiciones de los arrays una tras otra, usando puntos suspensivos para que se unan seguido y no en multidimensional
print_r($stack);

?>
</BODY>
</HTML>