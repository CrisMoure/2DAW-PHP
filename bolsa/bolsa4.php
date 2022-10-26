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
        <?php
        require "funciones_bolsa.php";
        $bolsa = "ibex35.txt";
        generarSelect($bolsa);
        ?>
            <br>
            <br>
            <label for="consulta">Mostrar </label>
            <select name="consulta">
                <option value="Ultimo">Ultimo valor</option>
                <option value="Var. %">Variacion %</option>
                <option value="Var.">Variacion</option>
                <option value="Ac.% año">Ac%Anual</option>
                <option value="MAx.">Maximo</option>
                <option value="MIn.">Minimo</option>
                <option value="Vol.">Volumen</option>
                <option value="Capit.">Capitalizacion</option>
            </select>
            <br><br>
            <input type="submit" value="Visualizar" name="submit">
            <input type="reset" value="borrar">
            </form>
            <?php     
        if(isset($_POST["submit"])){    #comprobamos si se ha hecho un submit para que no de error si no se ha introducidp valor aún      
            $valor = $_POST["valores"];
            $option = $_POST["consulta"];
            $res = mostrarDatos($bolsa, $valor, $option);
            echo "<br><br>";
            echo "<p>El valor  <b>".$option."</b> de ".$valor." es ".$res."</p>";
        }
        ?>
    </body>
</html>