<HTML>
<HEAD><TITLE> EJ3AM – Arrays Multidimensionales</TITLE></HEAD>
<BODY>
<?php
/*crear una matriz de 3x5 mostrarla por pantalla imprimiendo los elementos por fila
en primer lugar y a continuación por columna.*/

$matriz=array();    #creamos un array vacio

echo "<table border = \"1\">";
for ($i=1; $i < 4; $i++){  #mediante el primero for vamos recorriendo las filas que tendra la matriz
    echo "<tr>";    #creamos las filas de la tabla
    for ($j=1; $j < 6; $j++){   #recorremos las columnas que tendra la matriz
        $matriz[$i][$j] = rand(1,40);
        echo "<td>";    #creamos las columnas de la tabla
        echo $matriz[$i][$j];  
        echo "</td>";
    } 
    echo "</tr>";      
}
echo "</table>";
echo "<br><br>";


#para imprimir por fila mediante un bucle for recorremos la matriz y vamos imprimiendo la posicion y el valor
for ($i=1; $i < 4; $i++){ 
    for ($j=1; $j < 6; $j++){   
        echo "($i,$j) = ".$matriz[$i][$j]." - ";
    }  
    echo "<br>";
}
echo "<br><br>";

#para imprimir por columna recorremos en la matriz primero las columnas y luego las filas
for ($i=1; $i < 6; $i++){ 
    for ($j=1; $j < 4; $j++){ 
        echo "($j,$i) = ".$matriz[$j][$i]." - ";
    }  
    echo "<br>";
}


?>
</BODY>
</HTML>
