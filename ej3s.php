<HTML>
<HEAD><TITLE> > EJ3-Direccion Red – Broadcast y Rango </TITLE></HEAD>
<BODY>
<?php
/*a partir de la dirección IP y la máscara de red, obtener la dirección de red, la
dirección de broadcast y el rango de IPs disponibles para los equipos.*/
$ip="192.168.16.100/16";
#$ip ="1.2.3.4/21";
#$ip="192.168.16.100/21";
#$ip="10.33.15.100/8";

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

#juntamos los trozos en binario añadiendo 0 a la izquierda hasta completar 8bit y lo guardamos en una nueva variable
$ipBin = str_pad($ip1, 8, "0", STR_PAD_LEFT).str_pad($ip2, 8, "0", STR_PAD_LEFT).str_pad($ip3, 8, "0", STR_PAD_LEFT).str_pad($ip4, 8, "0", STR_PAD_LEFT);

#para obtener la direccion de red segun la mascara hacemos substr a la ip completa en binario
$dirRedBin = substr($ipBin, 0, $masc);

#Añadimos los 0 que falten hasta completar 32
$dirRedBin2 = str_pad($dirRedBin, 32, "0", STR_PAD_RIGHT);

#creamos otra variable para la dir de broadcast y completamos con 1 hasta 32
$dirBro = str_pad($dirRedBin, 32, "1", STR_PAD_RIGHT);

#añadimos los puntos cada 8 numeros y lo pasamos a decimal para conseguir la direccion de red
$dirRedBin3 = bindec(substr($dirRedBin2,0,8)).".".bindec(substr($dirRedBin2,8,8)).".".bindec(substr($dirRedBin2,16,8)).".".bindec(substr($dirRedBin2,24,8));


#añadimos puntos a la direccion de broadcast y pasamos a decimal
$dirBro2 = bindec(substr($dirBro, 0, 8)).".".bindec(substr($dirBro, 8, 8)).".".bindec(substr($dirBro, 16, 8)).".".bindec(substr($dirBro, 24, 8));

#Para conseguir ambos rangos sumamos 1 a la ultima parte de la direccion de red en binario y restamos 1 a la misma parte de la direccion de broadcast
$rangoRed = bindec(substr($dirRedBin2,0,8)).".".bindec(substr($dirRedBin2,8,8)).".".bindec(substr($dirRedBin2,16,8)).".".bindec(substr($dirRedBin2,24,8)+1);
$rangoBro = bindec(substr($dirBro, 0, 8)).".".bindec(substr($dirBro, 8, 8)).".".bindec(substr($dirBro, 16, 8)).".".bindec(substr($dirBro, 24, 8)-1);


#imprimimos resultados
echo "IP $ip <br>";
echo "Máscara: $masc <br>";
echo "Dirección Red: $dirRedBin3 <br>";
echo "Dirección Broadcast: $dirBro2 <br>";
echo "Rango: $rangoRed a $rangoBro";


?>
</BODY>
</HTML>