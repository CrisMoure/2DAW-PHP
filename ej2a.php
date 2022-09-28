<HTML>
<HEAD><TITLE> EJ2A – Arrays Unidimensionales</TITLE></HEAD>
<BODY>
<?php

/*modificar el ejemplo anterior para que calcule la media de los valores que están en 
las posiciones pares y las posiciones impares*/

$i = 0;
$suma = 0;
$impar = 1;
$mediapar = 0;
$mediaimpar = 0;

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

$sumapar = 0;
$sumaimpar=0;
$mediapar=0;
$mediaimpar=0;
#metemos en arrays los valores de las posiciones pares e impares recorriendo el array principal 
for($a = 0; $a < $cantidad; $a++){
    if($a % 2 == 0){
        $indicespar[$a] = $impares[$a]; #metemos en un array los valores que corresponden a los indices pares del array principal
        $sumapar = $sumapar + $impares[$a]; #hacemos la suma de los valores que corresponden a los indices pares
        
    }
    else{   #hacemos lo mismo con los indices impares
        $indicesimpar[$a] = $impares[$a];
        $sumaimpar = $sumaimpar + $impares[$a];
    }
   
}
#en dos variables guardamos el numero de elementos que tenemos en cada array de indices pares e impares respectivamente
$numpar = count($indicespar);
$numimpar = count($indicesimpar);

#calculamos las medias diviendo la suma de los valores en indices pares e impares entre el numero de posiciones de cada array respectivamente
$mediapar = $sumapar/$numpar;
$mediaimpar = $sumaimpar/$numimpar;
#imprimimos las medias:
echo "<br>La media de los numeros en posiciones pares es: ".$mediapar;
echo "<br>La media de los numeros en posiciones impares es: ".$mediaimpar;



?>
</BODY>
</HTML>