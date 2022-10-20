<HTML>
<HEAD><TITLE> EJ9AM – Arrays Multidimensionales</TITLE></HEAD>
<BODY>
<?php

#CREAMOS LA MATRIZ Y LE ASIGNAMOS VALORES ALEATORIOS
$matriz1 = array();


echo "<table border = \"1\">";
for($i = 0; $i < 3; $i++){  #mediante un for recorremos desde 0 hasta 3 para crear 3 filas
    echo "<tr>";
    for($j = 0; $j < 4; $j++){  #mediante un for recorremos desde 0 hasta 4 para crear 4 columnas
        echo "<td>";
        $matriz1[$i][$j] = rand(1,40);   #asignamos valores aleatorios entre 1 y 40 por ej a cada posicion de la matriz
        echo $matriz1[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

$traspuesta = array();
for ($i=0; $i < 4 ; $i++) { 
    for($j = 0; $j < 3; $j++){
        $traspuesta[$i][$j] = $matriz1[$j][$i];
    }
}

#IMPRIMIMOS LA TRASPUESTA
echo "<table border = \"1\">";
for($i = 0; $i < 4; $i++){  #mediante un for recorremos desde 0 hasta 3 para crear 3 filas
    echo "<tr>";
    for($j = 0; $j < 3; $j++){  #mediante un for recorremos desde 0 hasta 4 para crear 4 columnas
        echo "<td>";
        
        echo $traspuesta[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

?>
</BODY>
</HTML>