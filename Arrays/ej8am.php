<HTML>
<HEAD><TITLE> EJ8AM – Arrays Multidimensionales</TITLE></HEAD>
<BODY>
<?php
/* definir dos matrices de 3x3 y obtener:
a. La suma de ambas matrices
b. El producto de las mismas*/


#CREAMOS DOS MATRICES Y LES ASIGNAMOS VALORES ALEATORIOS
$matriz1 = array();
$matriz2 = array();

echo "<table border = \"1\">";
for($i = 0; $i < 3; $i++){  #mediante un for recorremos desde 0 hasta 3 para crear 3 filas
    echo "<tr>";
    for($j = 0; $j < 3; $j++){  #mediante un for recorremos desde 0 hasta 3 para crear 3 columnas
        echo "<td>";
        $matriz1[$i][$j] = rand(1,10);   #asignamos valores aleatorios entre 1 y 10 por ej a cada posicion de la matriz
        echo $matriz1[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

#hacemos lo mismo para la segunda matriz
echo "<table border = \"1\">";
for($i = 0; $i < 3; $i++){  
    echo "<tr>";
    for($j = 0; $j < 3; $j++){ 
        echo "<td>";
        $matriz2[$i][$j] = rand(1,10);   
        echo $matriz2[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";


#SUMA

#verificamos que ambas matrices tienen el mismo tamaño
if(count($matriz1) == count($matriz2)){
    for($i = 0; $i < count($matriz1); $i++){     #recorremos las filas de la primera matriz
        $suma[] = array();  
        if(count($matriz1[$i]) == count($matriz2[$i])){
            for($j = 0; $j < count($matriz1[$i]); $j++){
                $suma[$i][] = $matriz1[$i][$j] + $matriz2[$i][$j];  #sumamos los valores de las posiciones coincidentes
            }
        }
    }
}
#IMPRIMIMOS EN UNA TABLA
echo "La suma de ambas matrices es: <br><br>";
echo "<table border = \"1\">";
for($i = 0; $i < 3; $i++){  
    echo "<tr>";
    for($j = 0; $j < 3; $j++){ 
        echo "<td>";  
        echo $suma[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

#PRODUCTO

if(count($matriz1) == count($matriz2)){
    for($i = 0; $i < count($matriz1); $i++){     #recorremos la primera matriz
        for($j = 0; $j < 3; $j++){ #hacemos un for que recorra desde 0 hasta 3 
            $producto[$i][$j] = 0;  #incializamos la matriz del producto
            for($k = 0; $k < count($matriz2); $k++){    #recorremos la segunda matriz
                $producto[$i][$j] += $matriz1[$i][$k] * $matriz2[$k][$j];
            }

        }

        
    }
}

#IMPRIMIMOS EN UNA TABLA
echo "El producto de ambas matrices es: <br><br>";
echo "<table border = \"1\">";
for($i = 0; $i < 3; $i++){  
    echo "<tr>";
    for($j = 0; $j < 3; $j++){ 
        echo "<td>";  
        echo $producto[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";
?>
</BODY>
</HTML>
