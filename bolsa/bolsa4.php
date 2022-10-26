<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta Operaciones bolsa</title>
    </head>
    <body>
        <h1>Consulta Operaciones Bolsa</h1>
        <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="valores">Valores </label>
            <select name="valores">
                <option value="ACCIONA">ACCIONA</option>
                <option value="ACERINOX">ACERINOX</option>
                <option value="ACS">ACS</option>
                <option value="AENA">AENA</option>
                <option value="AMADEUS IT GROUP">AMADEUS IT GROUP</option>
                <option value="ARCELORMITTAL">ARCELORMITTAL</option>
                <option value="BANCO SABADELL">BANCO SABADELL</option>
                <option value="BANKIA">BANKIA</option>
                <option value="BANKINTER">BANKINTER</option>
                <option value="BBVA">BBVA</option>
                <option value="CAIXABANK">CAIXABANK</option>
                <option value="CELLNEX TELECOM">CELLNEX TELECOM</option>
                <option value="CIE. AUTOMOTIVE">CIE. AUTOMOTIVE</option>
                <option value="COLONIAL">COLONIAL</option>
                <option value="DIA">DIA</option>
                <option value="ENAGAS">ENAGAS</option>
            </select>
            <br>
            <br>
            <label for="consulta">Mostrar </label>
            <select name="consulta">
                <option value="ultimo">Ultimo valor</option>
                <option value="var1">Variacion %</option>
                <option value="var2">Variacion</option>
                <option value="ac">Ac%Anual</option>
                <option value="max">Maximo</option>
                <option value="min">Minimo</option>
                <option value="vol">Volumen</option>
                <option value="capit">Capitalizacion</option>
            </select>
            <br><br>
            <input type="submit" value="Visualizar" name="submit">
            <input type="reset" value="borrar">
            </form>
            <?php
            require "funciones_bolsa.php";
            $bolsa = "ibex35.txt";      
        if(isset($_POST["submit"])){    #comprobamos si se ha hecho un submit para que no de error si no se ha introducidp valor aún      
            $valor = $_POST["valores"];
            $option = $_POST["consulta"];
            switch($option){
                case "ultimo":
                    $cot = mostrarCotizacion($bolsa, $valor);
                    echo "<br><br>";
                    echo "<p>El valor  <b>Ultimo valor</b> de ".$valor." es ".$cot."</p>";
                    break;
                case "var1":
                    $var1 = mostrarVar1($bolsa, $valor);
                    echo "<br><br>";
                    echo "<p>El valor  <b>Variacion %</b> de ".$valor." es ".$var1."</p>";
                    break;
                case "var2":
                    $var2 = mostrarVar2($bolsa, $valor);
                    echo "<br><br>";
                    echo "<p>El valor  <b>Variacion</b> de ".$valor." es ".$var2."</p>";
                    break;
                case "ac":
                    $ac = mostrarAc($bolsa, $valor);
                    echo "<br><br>";
                    echo "<p>El valor  <b>Ac % Anual</b> de ".$valor." es ".$ac."</p>";
                    break;
                case "max":
                    $max = mostrarCotizacionMax($bolsa, $valor);
                    echo "<br><br>";
                    echo "<p>El valor <b>Maximo</b> de ".$valor." es ".$max."</p>";
                    break;
                case "min":
                    $min = mostrarCotizacionMin($bolsa, $valor);
                    echo "<br><br>";
                    echo "<p>El valor <b>Minimo</b> de ".$valor." es ".$min."</p>";
                    break;
                case "vol":
                    $vol = mostrarVol($bolsa, $valor);
                    echo "<br><br>";
                    echo "<p>El valor  <b>Volumen</b> de ".$valor." es ".$vol."</p>";
                    break;
                case "capit":
                    $capit = mostrarCapit($bolsa, $valor);
                    echo "<br><br>";
                    echo "<p>El valor  <b>Capitalizacion</b> de ".$valor." es ".$capit."</p>";
                    break;
            }
        }
        ?>
    </body>
</html>