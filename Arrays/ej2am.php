<HTML>
<HEAD><TITLE> EJ2AM – Arrays Multidimensionales</TITLE></HEAD>
<BODY>
<?php
/*modificar el ejercicio anterior para mostrar la suma de los elementos por filas y por
columnas. Los valores se almacenarán en dos arrays.*/

$matriz=array();    #inicializamos una matriz vacia
$numeroFilas = 3;   
$numeroColumnas = 3;
$num = 1;   #creamos una variable para calcular los multiplos de 2 
#echo "<table border = \"1\">";
for ($i=0; $i<$numeroFilas; $i++){  #mediante el primero for vamos recorriendo las filas que tendra la matriz
    #echo "<tr>";    #creamos las filas de la tabla
    for ($j=0; $j<$numeroColumnas; $j++){   #recorremos las columnas que tendra la matriz
        $matriz[$i][$j]=$num * 2;   #asignamos a cada posicion de la matriz un multiplo de 2
        $num++; 
        #echo "<td>";    #creamos las columnas de la tabla
        #echo $matriz[$i][$j];  
        #echo "</td>";

    } 
    #echo "</tr>";      
}
#echo "</table>";

echo "SUMA POR FILAS: ";
echo "<table border = \"1\">";
for($i=0; $i <$numeroFilas; $i++){  #bucle for para recorrer las filas y hacer la suma de cada celda
    echo "<tr><td>";
    $sumafil = array_sum($matriz[$i]);  #con array_sum hacemos la suma de las filas
    echo $sumafil;
    echo "</td></tr>"; 
}
echo "</table><br>";

echo "SUMA POR COLUMNAS: ";
echo "<table border = \"1\">";
echo "<tr>";
for($j=0; $j <$numeroColumnas; $j++){ #bucle for para recorrer las columnas y hacer la suma de cada celda   
    echo "<td>";     
    $sumacol = array_sum(array_column($matriz, $j));    ##con array_sum hacemos la suma de las columnas obteniendo los valores con array_column
    echo $sumacol; 
    echo "</td>";      
}
echo "</tr>";
echo "</table><br>";
?>
</BODY>
</HTML>
