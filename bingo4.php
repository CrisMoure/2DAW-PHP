<HTML>
    <BODY>
<?php

//$jugador1 = array(generarCarton($carton1), generarCarton($carton2), generarCarton($carton3));


function generarCarton(){   //funcion para generar los cartones
    $i=0;
    $carton = array();
    while($i<15)
    {
        $numerosCarton=rand(1,60);
        if(in_array($numerosCarton,$carton)===false)
        {
            array_push($carton,$numerosCarton);
            $i++;
        }
    }
    return $carton;
}

function girarbombo(){  //funcion para crear el bombo y mezclarlo
    $bombo = array();
    for($i =0; $i < 60; $i++){
        $bombo[$i] = $i+1;
    }

    //movemos el bombo
    shuffle($bombo);
    return $bombo;
}



// $jugador2 = array(generarCarton(), generarCarton(), generarCarton());
// var_dump($jugador2);
echo "<br><br>";

//$carton=generarCarton(); 
$jugador = array (array(generarCarton(), generarCarton(), generarCarton()), array(generarCarton(), generarCarton(), generarCarton()));
$bombo1=girarbombo();
var_dump($jugador);     
var_dump($bombo1);

$cont1=0;
$cont2=0;
$cont3=0;
$cont4=0;
$cont5=0;
$cont6=0;

$i=0;
 do{  

     $bola=$bombo1[$i];
     if(in_array($bola, $jugador[0][0])) 
        $cont1++; 
    if(in_array($bola, $jugador[0][1])) 
        $cont2++; 
    if(in_array($bola, $jugador[0][2])) 
        $cont3++; 
    if(in_array($bola, $jugador[1][0])) 
        $cont4++; 
    if(in_array($bola, $jugador[1][1])) 
        $cont5++; 
    if(in_array($bola, $jugador[1][2])) 
        $cont6++; 
    
     $i++; 
     echo "CARTON 1 <BR>";   
     echo "La bola ".$i." número ".$bola."-".$cont1."<br>";
     echo "CARTON 2 <br>"; 
     echo"La bola ".$i." número ".$bola."-".$cont2."<br>";
     echo "CARTON 3 <br>"; 
     echo "La bola ".$i." número ".$bola."-".$cont3."<br>";
     echo "CARTON 4 <BR>";   
     echo "La bola ".$i." número ".$bola."-".$cont4."<br>";
     echo "CARTON 5 <br>"; 
     echo"La bola ".$i." número ".$bola."-".$cont5."<br>";
     echo "CARTON 6 <br>"; 
     echo "La bola ".$i." número ".$bola."-".$cont6."<br>";
    } while(($cont1 < 15) && ($cont2 < 15) && ($cont3 < 15) && ($cont4 < 15) && ($cont5 < 15) && ($cont6 < 15));
    if($cont1 == 15)
    echo "GANADOR: Cartón 1 <br>";
    else if($cont2 == 15)
    echo "GANADOR: Cartón 2 <br>";
    if($cont3 == 15)
    echo "GANADOR: Cartón 3 <br>";
    else if($cont4 == 15)
    echo "GANADOR: Cartón 4 <br>";
    if($cont5 == 15)
    echo "GANADOR: Cartón 5 <br>";
    else if($cont6 == 15)
    echo "GANADOR: Cartón 6 <br>";
    
        


        



// sacarbola();
// function sacarbola(){
//     $cont1 = 0;
//     $cont2 = 0;
//     $cont3 = 0;
//     $bombo1 = girarbombo();
//     var_dump($bombo1);
//     echo "<br><br>";
//     $jugador1 = array(generarCarton(), generarCarton(), generarCarton());
//     var_dump($jugador1);
//     echo "<br><br>";



//     do{  
//         for($i = 0; $i < count($bombo1); $i++){               
//             if(in_array($bombo1[$i], $jugador1[0])){
//                 $cont1++;               
//             }else if(in_array($bombo1[$i], $jugador1[1])){
//                 $cont2++;
//             }else if(in_array($bombo1[$i], $jugador1[2])){
//                 $cont3++;
//             }
                
//         }
//     } while(($cont1 < 15) && ($cont2 < 15) && ($cont3 < 15));


//         echo $cont1."<br>";
//         echo $cont2."<br>";
//         echo $cont3."<br>";
//         if($cont1 == 15){
//             echo "ganador: pepe1 <br>";
//         }else if($cont2 == 15){
//             echo "ganador: pepe2 <br>";

//             }else echo "ganador: pepe3 <br>";
    

//     }

?>
</BODY>
</HTML>