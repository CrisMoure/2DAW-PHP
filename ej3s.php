<HTML>
<HEAD><TITLE> > EJ3-Direccion Red – Broadcast y Rango </TITLE></HEAD>
<BODY>
<?php
/*a partir de la dirección IP y la máscara de red, obtener la dirección de red, la
dirección de broadcast y el rango de IPs disponibles para los equipos.*/
#$ip="192.168.16.100/16";
$ip ="192.168.16.100/21";

#ubicamos la posicion de la barra /
$barra = strpos($ip, "/", 0);
#sabiendo la posicion, guardamos en otra variable la ip quitando la /
$masc = substr($ip, $barra+1);

#guardamos en variables la posicion de cada punto
$pri = strpos($ip,"." ,0);
$seg = strpos($ip,".",($pri+1));
$ter = strpos($ip,".",($seg+1));

#pasamos de decimal a binario cada trozo de la direccion ip separadas por los puntos
$ip1=decbin(substr($ip,0,$pri));
$ip2=decbin(substr($ip,($pri+1),($seg-$pri)-1));
$ip3=decbin(substr($ip,($seg+1),($ter-$seg)-1));
$ip4=decbin(substr($ip,($ter+1)));

#juntamos los trozos en binario y lo guardamos en una nueva variable
$ipBin = $ip1.$ip2.$ip3.$ip4;

#para obtener la direccion de red segun la mascara hacemos substr a la ip completa en binario
$dirRedBin = substr($ipBin, 0, $masc);

$dirRedBin5 = bindec(substr($dirRedBin,0,8)).".".bindec(substr($dirRedBin,8,8)).".".bindec(substr($dirRedBin,16,8)).".".bindec(substr($dirRedBin,24,8));


#Añadimos los 0 que falten hasta completar
#$dirRedBin2 = str_pad($dirRedBin, 32, "0", STR_PAD_RIGHT);

#añadimos los puntos cada 8 numeros y lo pasamos a decimal para conseguir la direccion de red
#$dirRedBin3 = bindec(substr($dirRedBin2,0,8)).".".bindec(substr($dirRedBin2,8,8)).".".bindec(substr($dirRedBin2,16,8)).".".bindec(substr($dirRedBin2,24,8));

$mascara = str_pad(1,$masc,"1",);
$mascara0 = str_pad($mascara , 32 ,"0",STR_PAD_RIGHT);
$mascara1 = bindec(substr($mascara0, 0, 8)).".".bindec(substr($mascara0, 8, 8)).".".bindec(substr($mascara0, 16, 8)).".".bindec(substr($mascara0, 24, 8));

#creamos otra variable y completamos con 1 para conseguir la direccion de broadcast
$dirBro = str_pad($dirRedBin, 32, "1", STR_PAD_RIGHT);
#volvemos a añadir puntos y pasamos a decimal
$dirBro2 = bindec(substr($dirBro, 0, 8)).".".bindec(substr($dirBro, 8, 8)).".".bindec(substr($dirBro, 16, 8)).".".bindec(substr($dirBro, 24, 8));

#Para conseguir ambos rangos sumamos 1 a la ultima parte de la direccion de red en binario y restamos 1 a la misma parte de la direccion de broadcast
#$rangoRed = bindec(substr($dirRedBin2,0,8)).".".bindec(substr($dirRedBin2,8,8)).".".bindec(substr($dirRedBin2,16,8)).".".bindec(substr($dirRedBin2,24,8)+1);
#$rangoBro = bindec(substr($dirBro, 0, 8)).".".bindec(substr($dirBro, 8, 8)).".".bindec(substr($dirBro, 16, 8)).".".bindec(substr($dirBro, 24, 8)-1);


#imprimimos resultados
echo "IP $ip <br>";
echo "Máscara: $masc <br>";
echo "Dirección Red: $dirRedBin5 <br>";
echo "Dirección Broadcast: $mascara1 <br>";
#echo "Rango: $rangoRed a $rangoBro";


?>
</BODY>
</HTML>