<?php
require "funciones_bolsa.php";
$bolsa = "ibex35.txt";

if(isset($_POST['submit'])){
    $valor = strtoupper(test_input($_POST['valor']));
}
$res = mostrarValor($bolsa, $valor);
echo $res;

?>