<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
/* realizar el mismo programa del ejercicio anterior pero sin utilizar las funciones printf
o sprintf*/
$ip="192.18.16.204";
$pri = strpos($ip,"." ,0);
$seg = strpos($ip,".",($pri+1));
$ter = strpos($ip,".",($seg+1));

$ip1=decbin(substr($ip,0,$pri));
$ip2=decbin(substr($ip,($pri+1),($seg-$pri)-1));
$ip3=decbin(substr($ip,($seg+1),($ter-$seg)-1));
$ip4=decbin(substr($ip,($ter+1)));


$ip1 = substr("00000000",0,8-strlen($ip1)).$ip1;
$ip2 = substr("00000000",0,8-strlen($ip2)).$ip2;
$ip3 = substr("00000000",0,8-strlen($ip3)).$ip3;
$ip4 = substr("00000000",0,8-strlen($ip4)).$ip4;

echo "IP $ip en binario es ".$ip1.".".$ip2.".".$ip3.".".$ip4;


?>
</BODY>
</HTML>
