<HTML>
<HEAD><TITLE> EJ6AM – Arrays Multidimensionales</TITLE></HEAD>
<BODY>
<?php
/* definir una matriz de 3x3 con números aleatorios. Generar un array que contenga
los valores máximos de cada fila y otro que contenga los promedios de la mismas. Mostrar el contenido
de ambos arrays por pantalla.*/

#inicializamos un array vacio
$matriz = array();

echo "<table border = \"1\">";
for($i = 0; $i < 3; $i++){  #mediante un for recorremos desde 0 hasta 3 para crear 3 filas
    echo "<tr>";
    for($j = 0; $j < 3; $j++){  #mediante un for recorremos desde 0 hasta 3 para crear 3 columnas
        echo "<td>";
        $matriz[$i][$j] = rand(1,40);   #asignamos valores aleatorios entre 1 y 40 por ej a cada posicion de la matriz
        echo $matriz[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

echo "MAXIMO DE CADA FILA: <br>";
$maximofila = array();  #inicializamos un nuevo array donde guardaremos los valores maximos de cada fila
echo "<table border = \"1\">";
for($i = 0; $i < count($matriz);$i++){  
    echo "<tr><td>";
    $maximofila = max($matriz[$i]); #con la funcion max() averiguamos el maximo de cada fila de la matriz y lo guardamos en el nuevo array
    echo $maximofila;
    echo "</td></tr>"; 
}
echo "</table><br>";

echo "PROMEDIO DE CADA FILA: <br>";
$promedio = array();    #definimos un array para guardar el promedio
echo "<table border = \"1\">";
for($i = 0; $i < count($matriz); $i++){ 
    echo "<tr><td>";
    $sumafil = array_sum($matriz[$i]);  #con array_sum sumamos los valores de cada fila de la matriz y lo guardamos en $sumafil
    $promedio = $sumafil/count($matriz);    #para hacer el promedio dividimos el resultado de la suma entre el numero de posiciones
    echo $promedio;
    echo "</td></tr>"; 
}
echo "</table><br>";

?>
</BODY>
</HTML>
