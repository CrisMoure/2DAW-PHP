<HTML>
<HEAD><TITLE> EJ3AM – Arrays Multidimensionales</TITLE></HEAD>
<BODY>
<?php
/*modificar el ejercicio anterior para mostrar la suma de los elementos por filas y por
columnas. Los valores se almacenarán en dos arrays.crear una matriz de 3x5 mostrarla por pantalla imprimiendo los elementos por fila
en primer lugar y a continuación por columna*/

$matriz=array();    #creamos un array vacio

for ($i=1; $i < 4; $i++){ #mediante un bucle for recorremos desde 1 hasta 5 para crear 5 columnas y asignar valores del 1 al 5
    for ($j=1; $j < 6; $j++){ #mediante otro for recorremos de 1 a 4 para crear las columnas y asignar valores del 1 al 3
        $matriz[$i][$j] = "($i,$j) = (elemento pos $i,$j) - "; #imprimimos
        echo $matriz[$i][$j];  
    }
    echo "<br>";
}
echo "<br><br>";
for ($i=1; $i < 4; $i++){ 
    for ($j=1; $j < 6; $j++){ 
        $matriz[$j][$i] = "($j,$i) = (elemento pos $j,$i) - "; #para imprimirlo al reves le damos la vuelta a los valores
        echo $matriz[$j][$i]; 
    }  
    echo "<br>";
}


?>
</BODY>
</HTML>
