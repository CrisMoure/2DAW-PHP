<?php

echo "<h1>CONVERSOR NUMERICO</h1>";
//$decimal = "";

$decimal = test_input($_POST['decimal']);
$opcion = $_POST['conversion'];

echo "Número decimal: <input type=\"text\" name=\"decimal\" value=\"".$decimal."\">";
if($opcion == "bin"){
    echo "Número binario: <input type=\"text\" name=\"binario\" value=\"".a_binario($decimal)."\">";
}elseif($opcion == "oct"){
    echo "Número octal: <input type=\"text\" name=\"octal\" value=\"".a_octal($decimal)."\">";
}elseif($opcion == "hex"){
    echo "Número hexadecimal: <input type=\"text\" name=\"binario\" value=\"".a_hex($decimal)."\">";
}elseif($opcion == "todos"){
    tabla($decimal);
}


function test_input($data){ #limpiamos los input
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function a_binario($n){
    $res = decbin($n);
    return $res;
}
function a_octal($n){
    $res = decoct($n);
    return $res;
}
function a_hex($n){
    $res = dechex($n);
    return $res;
}
function tabla($n){
    echo "<br><br> <table border=1px><tr><td>Binario</td><td>".a_binario($n)."</td></tr>";
    echo "<tr><td>Octal</td><td>".a_octal($n)."</td></tr>";
    echo "<tr><td>Hexadecimal</td><td>".a_hex($n)."</td></tr></table>";
}

?>