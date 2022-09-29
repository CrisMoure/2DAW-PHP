<HTML>
<HEAD><TITLE> EJ1AM – Arrays Multidimensionales</TITLE></HEAD>
<BODY>
<?php
/*crear una matriz de 3x3 con los sucesivos múltiplos de 2. Mostrar el contenido de la
matriz por filas tal y como se indica en la figura*/

$matriz=array();    #inicializamos una matriz vacia
$numeroFilas = 3;   
$numeroColumnas = 3;
$num = 1;   #creamos una variable para calcular los multiplos de 2 
echo "<table border = \"1\">";
for ($i=0; $i<$numeroFilas; $i++){  #mediante el primero for vamos recorriendo las filas que tendra la matriz
    echo "<tr>";    #creamos las filas de la tabla
    for ($j=0; $j<$numeroColumnas; $j++){   #recorremos las columnas que tendra la matriz
        $matriz[$i][$j]=$num * 2;   #asignamos a cada posicion de la matriz un multiplo de 2
        $num++; 
        echo "<td>";    #creamos las columnas de la tabla
        echo $matriz[$i][$j];  
        echo "</td>";

    } 
    echo "</tr>";      
}
echo "</table>";

?>
</BODY>
</HTML>