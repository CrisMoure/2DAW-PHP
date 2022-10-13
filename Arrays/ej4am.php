<HTML>
<HEAD><TITLE> EJ4AM – Arrays Multidimensionales</TITLE></HEAD>
<BODY>
<?php
/*a partir de la matriz del ejercicio anterior mostrar la fila y columna del elemento
mayor*/

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

$max = 0;
for ($i=1; $i < 4; $i++){ 
    for ($j=1; $j < 6; $j++){ 
        if($matriz[$i][$j] > $max){ #buscamos el maximo comparando cada dato de la matriz con el siguiente y si es mayor que el maximo anterior, este se guardara como max.
            $max = $matriz[$i][$j];
            $columna = array_search($max, $matriz[$i]); #buscamos la columna en la que se almacena el valor max. y la guardamos en una variable
        }

    }       
}
$fila = array_search($max, array_column($matriz, $columna))+1;
echo "Elemento Mayor: ".$max." fila ".$fila." columna ".$columna;



?>
</BODY>
</HTML>