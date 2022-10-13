<?php


echo "<h1>Calculadora</h1>";
$operando1 = $operando2 = $operacion = "";

$operando1 = test_input($_POST['operando1']);
$operando2 = test_input($_POST['operando2']);
$operacion = $_POST["operacion"];


if(isset($operacion) && $operacion == "suma"){
    sumar($operando1, $operando2);
}
if(isset($operacion) && $operacion == "resta"){
    restar($operando1, $operando2);
}
if(isset($operacion) && $operacion == "producto"){
    producto($operando1, $operando2);
}
if(isset($operacion) && $operacion == "division"){
    dividir($operando1, $operando2);
}



function test_input($data){ #limpiamos los input
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function sumar($n1, $n2){
    $res = $n1 + $n2;
    echo "Resultado operación ".$n1." + ".$n2." = ".$res;
}

function restar($n1, $n2){
    $res = $n1 - $n2;
    echo "Resultado operación ".$n1." - ".$n2." = ".$res;
}

function producto($n1, $n2){
    $res = $n1 * $n2;
    echo "Resultado operación ".$n1." x ".$n2." = ".$res;
}

function dividir($n1, $n2){
    $res = $n1 / $n2;
    echo "Resultado operación ".$n1." / ".$n2." = ".$res;
}

?>
