<?php
echo "<h1>CONVERSOR NUMERICO</h1>";

$numeroyBase = test_input($_POST['num']); #guardamos en una variable el numero que se ha introducido y su base correspondiente
$baseCambio = test_input($_POST['base']);   #guardamos en otra variable la nueva ase a que queremos convertir el numero

$posBarra = strpos($numeroyBase, "/");  #buscamos la posicion de la barra que diferencia el numero de la base introducidos
$numero = substr($numeroyBase, 0, $posBarra);   #cortamos y guardamos en una variable el número por un lado
$baseNum = substr($numeroyBase, $posBarra+1);   #y por otro la base en la que esta ese numero

cambioBase($numero, $baseNum, $baseCambio);


function cambioBase($number, $baseInicial, $baseCambio){ #funcion que realiza el calculo de cambio de base, pasamos el numero, su base inicial y la base a cual queremos hacer el cambio
    $cambio = base_convert($number, $baseInicial, $baseCambio); #cambiamos base
    echo "Numero ".$number." en base ".$baseInicial." = ".$cambio." en base ".$baseCambio;
}


function test_input($data){ #limpiamos los input
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>