<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta Operaciones bolsa</title>
    </head>
    <body>
        <h1>Consulta Operaciones Bolsa</h1>
        <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="consulta">Mostrar </label>
            <select name="consulta">
                <option value="volumen">Total Volumen</option>
                <option value="capit">Total Capitalizacion</option>
            </select>
            <br><br>
            <input type="submit" value="Visualizar" name="submit">
            <input type="reset" value="Borrar">
            </form>
            <?php
            require "funciones_bolsa.php";
            $bolsa = "ibex35.txt";      
        if(isset($_POST["submit"])){    #comprobamos si se ha hecho un submit para que no de error si no se ha introducidp valor aún      
            $option = $_POST["consulta"];
            $total = calcularTotal($bolsa, $option);
            if($option == "volumen"){
                echo "<br><br>";
                echo "<p><b>Total Volumen </b>".$total."</p>";
            }
            if($option == "capit"){
                echo "<br><br>";
                echo "<p><b>Total Capitalizacion </b>".$total."</p>";
            }
        }
        ?>
    </body>
</html>