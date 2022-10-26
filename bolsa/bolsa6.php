<?php
require "funciones_bolsa.php";

$bolsa = "ibex35.txt";

echo "Volumen: <br>";
maxMinVol($bolsa);
echo "Capital: <br>";
maxMinCapi($bolsa);
?>