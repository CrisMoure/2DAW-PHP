<?php

function test_input($data){ #limpiamos los input
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function mostrarFichero($fichero){
    $archivo = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");    
    $res = "<html><body><table style: cellpadding='10px'>";
    while(!feof($archivo)){
        $datos = fgets($archivo);
        $res .="<tr>";
        $valor = substr($datos,0, 24-1);
        $ult = substr($datos,24-1, 34-25);
        $var1 = substr($datos,(34-25)+(24-1), 41-34);
        $var2 = substr($datos,(41-34)+(34-25)+(24-1), 49-41);
        $ac = substr($datos,(49-41)+(41-34)+(34-25)+(24-1), 61-49);
        $max = substr($datos,(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 70-61);
        $min = substr($datos,(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 79-70);
        $vol = substr($datos,(79-70)+(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 92-79);
        $capit = substr($datos,(92-79)+(79-70)+(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 101-92);
        $res.= "<td>".$valor."</td><td>".$ult."</td><td>".$var1."</td><td>".$var2."</td><td>".$ac."</td><td>".$max."</td><td>".$min."</td><td>".$vol."</td><td>".$capit."</td>";
        //$res .= "<td>".$datos."</td>";
        $res .="</tr>";
    }    
    $res .= "</table></body></html>";
    return $res;
    fclose($archivo);
}

function mostrarValor($fichero, $valor){
    $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    #$res = "<html><body><table border='0'>";
    $leido = file_get_contents($fichero);
    #$res .="<tr><th>Valor</th><th>Ultimo</th><th>Var.%</th><th>Var.</th><th>Ac.%año</th><th>Max.</th><th>min</th><th>vol</th><th>capit</th><th>hora</th></tr><tr>";
    $pos = strpos($leido, $valor);
    $linea = substr($leido, $pos, 106);
    // $valor = substr($linea,0, 24-1);
    // $ult = substr($linea,24-1, 34-25);
    // $var1 = substr($linea,(34-25)+(24-1), 41-34);
    // $var2 = substr($linea,(41-34)+(34-25)+(24-1), 49-41);
    // $ac = substr($linea,(49-41)+(41-34)+(34-25)+(24-1), 61-49);
    // $max = substr($linea,(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 70-61);
    // $min = substr($linea,(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 79-70);
    // $vol = substr($linea,(79-70)+(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 92-79);
    // $capit = substr($linea,(92-79)+(79-70)+(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 101-92);
    #$res.= "<td>".$valor."</td><td>".$ult."</td><td>".$var1."</td><td>".$var2."</td><td>".$ac."</td><td>".$max."</td><td>".$min."</td><td>".$vol."</td><td>".$capit."</td>";
    //$res .= "<td>".$datos."</td>";
    #$res .="</tr>";
    #$res = $valor."<br>Ultimo".$ult."<br>Var.%".$var1."<br>Var.".$var2."<br>Ac.%año".$ac."<br>Max.".$max."<br>Min.".$min."<br>Vol.".$vol.""
    return $linea;
}

function mostrarCotizacion($fichero, $valor){
    $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    $leido = file_get_contents($fichero);
    $pos = strpos($leido, $valor);
    $linea = substr($leido, $pos, 106);
    $res = substr($linea,24-1, 34-25);
    return $res;
}

function mostrarVar1($fichero, $valor){
    $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    $leido = file_get_contents($fichero);
    $pos = strpos($leido, $valor);
    $linea = substr($leido, $pos, 106);
    $res = substr($linea,(34-25)+(24-1), 41-34);
    return $res;
}

function mostrarVar2($fichero, $valor){
    $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    $leido = file_get_contents($fichero);
    $pos = strpos($leido, $valor);
    $linea = substr($leido, $pos, 106);
    $res = substr($linea,(41-34)+(34-25)+(24-1), 49-41);
    return $res;
}

function mostrarAc($fichero, $valor){
    $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    $leido = file_get_contents($fichero);
    $pos = strpos($leido, $valor);
    $linea = substr($leido, $pos, 106);
    $res = substr($linea,(49-41)+(41-34)+(34-25)+(24-1), 61-49);
    return $res;
}

function mostrarCotizacionMax($fichero, $valor){
    $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    $leido = file_get_contents($fichero);
    $pos = strpos($leido, $valor);
    $linea = substr($leido, $pos, 106);
    $res = substr($linea,(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 70-61);
    return $res;
}

function mostrarCotizacionMin($fichero, $valor){
    $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    $leido = file_get_contents($fichero);
    $pos = strpos($leido, $valor);
    $linea = substr($leido, $pos, 106);
    $res = substr($linea,(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 79-70);
    return $res;
}

function mostrarVol($fichero, $valor){
    $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    $leido = file_get_contents($fichero);
    $pos = strpos($leido, $valor);
    $linea = substr($leido, $pos, 106);
    $res = substr($linea,(79-70)+(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 92-79);
    return $res;
}

function mostrarCapit($fichero, $valor){
    $file = fopen("$fichero", "r") or die ("No se pudo abrir el fichero");
    $leido = file_get_contents($fichero);
    $pos = strpos($leido, $valor);
    $linea = substr($leido, $pos, 106);
    $res = substr($linea,(92-79)+(79-70)+(70-61)+(61-49)+(49-41)+(41-34)+(34-25)+(24-1), 101-92);
    return $res;
}

?>