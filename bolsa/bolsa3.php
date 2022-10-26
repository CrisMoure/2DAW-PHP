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
        <?php
        require "funciones_bolsa.php";
        $bolsa = "ibex35.txt";
        generarSelect($bolsa);
        ?>
            <br>
            <br>
            <br><br>
            <input type="submit" value="Visualizar" name="submit">
            <input type="reset" value="borrar">
            </form>
             <?php      
        if(isset($_POST["submit"])){    #comprobamos si se ha hecho un submit para que no de error si no se ha introducidp valor aún      
            $valor = $_POST["valores"];
            $cot = mostrarDatos($bolsa, $valor, "Ultimo");
            $max = mostrarDatos($bolsa, $valor, "MAx.");
            $min = mostrarDatos($bolsa, $valor, "MIn.");
                echo "<br><br>";
                echo "<p>El valor  <b>Cotizacion</b> de ".$valor." es ".$cot."</p>";
                echo "<p><b>Cotizacion Maxima</b> de ".$valor." es ".$max."</p>";
                echo "<p><b>Cotizacion Minima</b> de ".$valor." es ".$min."</p>";
        }
        ?> 
    </body>
</html>