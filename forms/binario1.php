<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversor binario</title>
    </head>
    <body>
        <h1>CONVERSOR BINARIO</h1>
        <form name="form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <label for="decimal">Número decimal: </label>
            <input type="text" name="decimal">
            <br>
            <br>
            <input type="submit" value="enviar" name="submit">
            <input type="reset" value="borrar">

            </form>
            <?php
               
        if(isset($_POST["submit"])){    #comprobamos si se ha hecho un submit para que no de error si no se ha introducidp valor aún
            $numdec = $_POST["decimal"];
            $decimal = test_input($numdec);
            $bin = a_binario($decimal);
            echo "<br><br>";
            echo "Número decimal: <input type=\"text\" name=\"decimal\" value=\"".$numdec."\">";
            echo "Número binario: <input type=\"text\" name=\"binario\" value=\"".$bin."\">";
        }

        function test_input($data){ #limpiamos los input
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function a_binario($n){
            $res = decbin($n);
            return $res;
        }
        ?>

    </body>
</html>
