<?php

function test_input($data){ #limpiamos los input
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function mostrarFichero($fichero){
    $leido = file($fichero);    #usamos file para leer el fichero y convertirlo en array
    foreach($leido as $valor){  
        echo $valor."<br>";    
    }
    #SOLUCION CON FOPEN()
    // $archivo = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");    
    // $res = "<html><body><table style: cellpadding='10px'>";
    // while(!feof($archivo)){
    //     $datos = fgets($archivo);
    //     $res .="<tr>";
    //     $valor = substr($datos,0, 24-1);
    //     $ult = substr($datos,24-1, 34-25);
    //     $var1 = substr($datos,(34-25)+(24-1), 41-34);
    //     $var2 = substr($datos,(41-34)+(34-25)+(24-1), 49-41);
    //     $ac = substr($datos,(49-41)+(41-34)+(34-25)+(24-1), 61-49);
    //     $max = substr($datos,(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 70-61);
    //     $min = substr($datos,(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 79-70);
    //     $vol = substr($datos,(79-70)+(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 92-79);
    //     $capit = substr($datos,(92-79)+(79-70)+(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 101-92);
    //     $res.= "<td>".$valor."</td><td>".$ult."</td><td>".$var1."</td><td>".$var2."</td><td>".$ac."</td><td>".$max."</td><td>".$min."</td><td>".$vol."</td><td>".$capit."</td>";
    //     $res .="</tr>";
    // }    
    // $res .= "</table></body></html>";
    // return $res;
    // fclose($archivo);
}

function mostrarValor($fichero, $valor){
    $leido = file($fichero);
    foreach($leido as $value){  
        if(strpos($value, $valor) !== false){
            return $value;
        }   
    }


    #SOLUCION CON FOPEN()
    // $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    // $leido = file_get_contents($fichero);
    // $pos = strpos($leido, $valor);
    // $linea = substr($leido, $pos, 106);
    // return $linea;
    // fclose($file);
}

function generarSelect($fichero){
    $leido = file($fichero);
    echo '<select name="valores">';
    $cont = 0;
    foreach($leido as $value){ 
        if($cont == 0) $cont++;
        else{
            $valor = substr($value,0, 24-1);
            echo "<option value=$valor>$valor</option>"; 
        } 
         
    } 
    echo '</select>';

}

function mostrarDatos($fichero, $empresa, $tipo){  # siendo $tipo el valor que queremos consultar
    $leido = file($fichero);
    foreach($leido as $value){
        if(strpos($value, $empresa) !== false){
            switch($tipo){
                case "Ultimo":
                    $res = substr($value, 24-1, 34-25);
                    break;
                case "Var. %":
                    $res = substr($value, 32, 41-34);
                    break;
                case "Var.":
                    $res = substr($value, 40, 49-41);
                    break;
                case "Ac.% año":
                    $res = substr($value, 48, 61-49);
                    break;
                case "MAx.":
                    $res = substr($value, 60, 70-61);
                    break;
                case "MIn.":
                    $res = substr($value, 69, 79-70);
                    break;
                case "Vol.":
                    $res = substr($value, 78, 92-79);
                    break;
                case "Capit.":
                    $res = substr($value, 91, 101-92);
                    break;

            }

        }
    }
    return $res;
}

function calcularTotal($fichero, $opcion){
    $leido = file($fichero);
    $res =0;
    $cont = 0;
    switch($opcion){
        case "volumen":
            foreach($leido as $value){
                if($cont == 0) $cont++;
                else{
                    $num = substr($value, 78, 92-79);
                    $num2 = str_replace(".","",$num); 
                    $res += (int)$num2; 
                }
                
            }
            break;
        case "capit":
            foreach($leido as $value){
                if($cont == 0) $cont++;
                else{
                    $num = substr($value, 91, 101-92);
                    $num2 = str_replace(".","",$num); 
                    $res += (int)$num2;           
                }       
            }
            break;
    }
    
    return $res;
}

function maxMinVol($fichero){
    $leido = file($fichero);
    $max = 0;
    $min= 1000000;
    $cont = 0;
    foreach($leido as $value){
        if($cont == 0) $cont++;
        else{
            $vol = substr($value, 78, 92-79);
            $vol = (int)str_replace(".","",$vol); 
        if($vol > $max){
            $max = $vol;
        }if ($vol<$min) {
            $min = $vol;
        }
        }   
    }
    foreach($leido as $value){ 
        $name = substr($value, 0,24-1); 
        $vol2 = substr($value, 78, 92-79); 
        $vol = str_replace(".","",$vol2); 
        if(strpos($vol, strval($min)) !== false){
            echo "$name el minimo es $min <br>";
        }   
        if(strpos($vol, strval($max)) !== false){
            echo "$name el maximo es $max <br>";
        }   
    }
}

function maxMinCapi($fichero){
    $leido = file($fichero);
    $max = 0;
    $min= 1000000;
    $cont = 0;
    foreach($leido as $value){
        if($cont == 0) $cont++;
        else{
            $vol = substr($value, 91, 101-92);
            $vol = (int)str_replace(".","",$vol); 
        if($vol > $max){
            $max = $vol;
        }if ($vol<$min) {
            $min = $vol;
        }
        }   
    }
    foreach($leido as $value){ 
        $name = substr($value, 0,24-1); 
        $vol2 = substr($value, 91, 101-92); 
        $vol = str_replace(".","",$vol2); 
        if(strpos($vol, strval($min)) !== false){
            echo "$name el minimo es $min <br>";
        }   
        if(strpos($vol, strval($max)) !== false){
            echo "$name el maximo es $max <br>";
        }   
    }
}
?>