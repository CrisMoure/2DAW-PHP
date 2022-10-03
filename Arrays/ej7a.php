<HTML>
<HEAD><TITLE> EJ7A – Arrays Unidimensionales</TITLE></HEAD>
<BODY>
<?php

/*crear un array asociativo con los nombres de 5 alumnos y la edad de cada uno de
ellos. Se pide:
a. Mostrar el contenido del array utilizando bucles.
b. Sitúa el puntero en la segunda posición del array y muestra su valor
c. Avanza una posición y muestra el valor
d. Coloca el puntero en la última posición y muestra el valor
e. Ordena el array por orden de edad (de menor a mayor) y muestra la primera posición del
array y la última
*/
#creamos el array
$alumnos = array("Juan"=>18, "Luis"=>19, "Carlos"=>25, "Cristina"=>23, "David"=>21);
#mediante un bucle foreach mostramos el contenido
foreach($alumnos as $key => $value){
    echo "Nombre: ".$key." Edad: ".$value; 
    echo "<br>";
}
echo "<br>";
#situamos el puntero en la segunda posicion del array
#con la funcion array_keys averiguamos la clave de la segunda posicion del array
$pos = next($alumnos);
$nombre = (array_keys($alumnos, $pos));

echo "Nombre: ".implode($nombre)." Edad: ".$pos."<br>";    #sabiendo la clave tambien imprimimos el valor de la segunda posicion

#avanzamos una posicion con next() y mostramos el valor
 $pos2 = next($alumnos);
$nombre2 = (array_keys($alumnos, $pos2));

echo "Nombre: ".implode($nombre2)." Edad: ".$pos2."<br>";

#mostramos el valor de la ultima posicion con la funcion end()
$ult = end($alumnos);
$nombre3 = (array_keys($alumnos, $ult));    #con array_keys averiguamos la clave
echo "Nombre: ".implode($nombre3)." Edad: ".$ult."<br>";


#ordenamos el array por orden de edad (menor a mayor)
asort($alumnos);
$pos = reset($alumnos); #movemos el puntero a la primera posicion de nuevo con reset()
$nombre = array_keys($alumnos, $pos);   #en una variable recuperamos el nombre del menor

echo "<br>";
echo "primera posicion: nombre: ".implode($nombre)." edad: ".$pos;  #imprimimos el valor de la prim posicion
echo "<br>";

#situamos el puntero en la ultima posicion con la funcion end()
$pos = end($alumnos);
$nombre = array_keys($alumnos, $pos);
echo "ultima posicion: nombre: ".implode($nombre)." edad: ".$pos; #imprimimos el valor de la ult posicion
?>
</BODY>
</HTML>
