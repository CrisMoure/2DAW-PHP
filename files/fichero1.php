<?php

#recibimos los datos del formulario
$nombre = test_input($_POST['name']);
$ap1 = test_input($_POST['apell1']);
$ap2 = test_input($_POST['apell2']);
$fecha = test_input($_POST['fecha']);
$loc = test_input($_POST['loc']);

#añadimos los espacios en blanco a la derecha hasta completar la longitud
$nombre = str_pad($nombre, 39, " ", STR_PAD_RIGHT);
$ap1 = str_pad($ap1, 41, " ", STR_PAD_RIGHT);
$ap2 = str_pad($ap2, 42, " ", STR_PAD_RIGHT);
$fecha = str_pad($fecha, 10, " ", STR_PAD_RIGHT);
$loc = str_pad($loc, 27, " ", STR_PAD_RIGHT);

#concatenamos todos los datos en una sola variable para poder imprimirlo en una misma linea
$datos = $nombre.$ap1.$ap2.$fecha.$loc;

$namefile = "alumnos.txt";  #creamos el nombre del fichero donde guardaremos la informacion
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