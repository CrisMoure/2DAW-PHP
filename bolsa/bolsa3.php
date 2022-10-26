<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operaciones bolsa</title>
    </head>
    <body>
        <h1>Operaciones bolsa</h1>
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
            <br><br>
            <input type="submit" value="Visualizar" name="submit">
            <input type="reset" value="borrar">
            </form>
            <?php
            require "funciones_bolsa.php";
            $bolsa = "ibex35.txt";      
        if(isset($_POST["submit"])){    #comprobamos si se ha hecho un submit para que no de error si no se ha introducidp valor aún      
            $valor = $_POST["valores"];
            $cot = mostrarCotizacion($bolsa, $valor);
            $max = mostrarCotizacionMax($bolsa, $valor);
            $min = mostrarCotizacionMin($bolsa, $valor);
                echo "<br><br>";
                echo "<p>El valor  <b>Cotizacion</b> de ".$valor." es ".$cot."</p>";
                echo "<p><b>Cotizacion Maxima</b> de ".$valor." es ".$max."</p>";
                echo "<p><b>Cotizacion Minima</b> de ".$valor." es ".$min."</p>";
        }
        ?>
    </body>
</html>