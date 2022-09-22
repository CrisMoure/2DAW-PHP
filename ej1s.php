<HTML> 

    <HEAD>

        <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>

    </HEAD>

    <BODY>

        <?php
        /* Convertir la IP a su representación en binario haciendo uso de la función printfo sprintf.
        Únicamente se podrán utilizar funciones de cadenas de caracteres.*/
        $ip="10.33.161.2";
        $pri = strpos($ip,"." ,0);
        $seg = strpos($ip,".",($pri+1));
        $ter = strpos($ip,".",($seg+1));
       
        $ip1=substr($ip, 0, $pri);
        $ip2=substr($ip, ($pri+1), $seg-1);
        $ip3=substr($ip, ($seg+1), $ter-1);
        $ip4=substr($ip, ($ter+1));
      
        //otra forma
        /*$ip1=substr($ip,0,$pri);
        $ip2=substr($ip,($pri+1),($seg-$pri)-1);
        $ip3=substr($ip,($seg+1),($ter-$seg)-1);
        $ip4=substr($ip,($ter+1));*/

        #Con printf:
        printf("IP $ip en binario es %08b", $ip1);
        printf(".%08b", $ip2);
        printf(".%08b", $ip3);
        printf(".%08b <br>", $ip4);

        #Con sprintf:
        $valor=sprintf("IP $ip en binario es %08b.%08b.%08b.%08b",$ip1,$ip2,$ip3,$ip4);
        echo $valor;
           
      
      ?> 

    </BODY> 

</HTML>
