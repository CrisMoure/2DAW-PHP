<?php
echo "<table border = \"1\"><tr><th>Nombre</th><th>Apellido1</th><th>Apellido2</th><th>Fecha Nacimiento</th><th>Localidad</th></tr>";
$archivo = fopen("alumnos2.txt", "r") or die ("No se pudo abrir el fichero");    #abrimos el fichero

$cont = 0;  #inicializamos un contador para almacenar el numero de filas que se iran leyendo
while(!feof($archivo)){ #bucle while que comprueba si el puntero está al final del archivo
    echo "<tr>";
    $datos = fgets($archivo);   #con fgets() obtenemos una linea donde este el puntero
    $delimitador = "##";    #creamos un delimitador
    $separada = explode($delimitador, $datos);  #con explode guardamos el string en un array separandola por el delimitador
    for($i = 0; $i < count($separada); $i++){   #recorremos el array
        echo "<td>".$separada[$i]."</td>";  #imprimimos
    }
    echo "</tr>";
    $cont++;    #aumentamos el contador cada vez que leamos una linea
}

echo "</table>";
echo "Lineas leidas: ".$cont;
fclose($archivo);   #cerramos el fichero

?>