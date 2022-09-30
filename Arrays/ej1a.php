<HTML>
<HEAD><TITLE> EJ1A – Arrays Unidimensionales</TITLE></HEAD>
<BODY>
<?php

/*definir un array y almacenar los 20 primeros números impares. Mostrar en la salida 
una tabla como la de la figura*/

$i = 0;
$suma = 0;
$impar = 1;

#usando un bucle while buscamos los primeros 20 numeros impares empezando en 0 y a medida que los encontramos los vamos guardando en el array
while($i < 20){
    if($impar % 2 != 0){       
        $impares[$i]=$impar;
        $impar=$impar+2;
        $i++;
    }
}
#con la funcion count guardamos en una variable la longitud del array
$cantidad = count($impares);


echo "<table border =  \"1\"><th>Indice</th><th>Valor</th><th>Suma</th>";
#mediante el bucle for recorremos cada posicion del array y lo vamos imprimiendo en una tabla, separando indice, valor y suma
for($x = 0; $x < $cantidad; $x++){
    $suma = $suma + $impares[$x];   /*calculamos la suma inicializando en 0 y vamos sumando cada valor del array, 
                                    guardando cada valor en $suma para poder sumar el valor anterior del array con el siguiente*/
    echo "<tr><td>"; 
    echo $x."</td><td>".$impares[$x]."</td><td>".$suma."</td>";
    echo "</tr>";
}
echo "</table>";

?>
</BODY>
</HTML>
