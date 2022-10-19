<?php

#recibimos los datos del formulario
$nombre = test_input($_POST['name']);
$ap1 = test_input($_POST['apell1']);
$ap2 = test_input($_POST['apell2']);
$fecha = test_input($_POST['fecha']);
$loc = test_input($_POST['loc']);


#concatenamos todos los datos en una sola variable para poder imprimirlo en una misma linea añadiendo los delimitadores
$datos = $nombre."##".$ap1."##".$ap2."##".$fecha."##".$loc;

$namefile = "alumnos2.txt";  #creamos el nombre del fichero donde guardaremos la informacion
$archivo = fopen($namefile, "a") or die ("No se pudo abrir el fichero");    #abrimos el fichero
fwrite($archivo, $datos . PHP_EOL); #escribimos la info haciendo un salto de linea con PHP_EOL
fclose($archivo);   #cerramos el fichero



function test_input($data){ #limpiamos los input
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>