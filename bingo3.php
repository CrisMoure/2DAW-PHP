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

sacarbola();
function sacarbola(){
    $cont1 = 0;
    $cont2 = 0;
    $cont3 = 0;
    $bombo1 = girarbombo();
    var_dump($bombo1);
    echo "<br><br>";
    $jugador1 = array(generarCarton(), generarCarton(), generarCarton());
    var_dump($jugador1);
    echo "<br><br>";


    do{  
        for($i = 0; $i < count($bombo1); $i++){               
            if(in_array($bombo1[$i], $jugador1[0])){
                $cont1++;               
            }else if(in_array($bombo1[$i], $jugador1[1])){
                $cont2++;
            }else if(in_array($bombo1[$i], $jugador1[2])){
                $cont3++;
            }
                
        }
    } while(($cont1 < 15) && ($cont2 < 15) && ($cont3 < 15));

    
        echo $cont1."<br>";
        echo $cont2."<br>";
        echo $cont3."<br>";
        if($cont1 == 15){
            echo "ganador: pepe1 <br>";
        }else if($cont2 == 15){
            echo "ganador: pepe2 <br>";

            }else echo "ganador: pepe3 <br>";
    

    }

?>
</BODY>
</HTML>