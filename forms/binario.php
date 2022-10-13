<?php

echo "<h1>CONVERSOR BINARIO</h1>";
$decimal = "";

$decimal = test_input($_POST['decimal']);


echo "Número decimal: <input type=\"text\" name=\"decimal\" value=\"".$decimal."\">";
echo "Número binario: <input type=\"text\" name=\"binario\" value=\"".a_binario($decimal)."\">";

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


?>