<HTML>
<HEAD><TITLE> EJ5AM – Arrays Multidimensionales</TITLE></HEAD>
<BODY>
<?php
/* definir una matriz de 5x3 tal que en cada posición contenga el número
que resulta de sumar el número que identifica la columna con el número que identifica la fila del mismo,
imprimir los elementos de la matriz por columnas*/

#inicializamos un array vacio y una variable donde guardaremos el valor de la suma
$matriz = array();
$sum = 0;

echo "<table border = \"1\">";
for($i = 1; $i < 6; $i++){  #mediante un for recorremos desde 1 hasta 6 para crear 5 filas
    echo "<tr>";
    for($j = 1; $j < 4; $j++){  #mediante un for recorremos desde 1 hasta 4 para crear 3 filas
        echo "<td>";
        $sum = $i+$j;   #hacemos la suma del valor de cada fila y columna
        $matriz[$i][$j] =$sum;  #asignamos los valores resultantes de las sumas en el array
        echo $matriz[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";
?>
</BODY>
</HTML>