<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operaciones ficheros</title>
    </head>
    <body>
        <h1>Operaciones Ficheros</h1>
        <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="fichero">Fichero (Path/nombre): </label>
            <input type="text" name="fichero">
            <br>
            <br>
            <legend>Operaciones: </legend>
                <input type="radio" name="operacion" value="fich">Mostrar fichero
                <br>
                <input type="radio" name="operacion" value ="linea">Mostrar línea <input type="number" name ="linea1" size="5">fichero
                <br>
                <input type="radio" name="operacion" value="nlineas">Mostrar <input type="number" name ="linea2" size="5">primeras lineas

            <br><br>
            <input type="submit" value="enviar" name="submit">
            <input type="reset" value="borrar">

            </form>
            <?php
        $select = $res = "";       
        if(isset($_POST["submit"])){    #comprobamos si se ha hecho un submit para que no de error si no se ha introducidp valor aún      
        $fichero = test_input($_POST["fichero"]);
        $linea1 = test_input($_POST["linea1"]);
        $linea2 = test_input($_POST["linea2"]);
        $select = $_POST["operacion"];
        if(file_exists($fichero)){
            if($select == "fich"){
                $res = mostrarfichero($fichero);
            }
            if($select == "linea"){
                $res = mostrarLinea($fichero, $linea1);
            }
            if($select == "nlineas"){
                $res = mostrarNLineas($fichero, $linea2);
            }
            echo "<br><br>";
            echo "<h3>Operaciones Ficheros</h3>";
            echo "<p>".$res."</p>";
        }else{  #si el fichero no existe mostramos un mensaje de error
            echo "<br><br>";
            echo "El fichero ".$fichero." no existe";
        }
        }

        function test_input($data){ #limpiamos los input
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function mostrarfichero($f){    #funcion que muestra el fichero completo
            $archivo = fopen("$f", "r") or die ("No se pudo abrir el fichero");
            $leido = fread($archivo, filesize("$f"));
            return $leido;
            fclose($archivo);
        }
        function mostrarLinea($f, $linea){  #funcion que muestra la linea del fichero
            $archivo = fopen("$f", "r") or die ("No se pudo abrir el fichero");
            $cont = 0;
            while(!feof($archivo) && $cont != $linea){  #recorremos el fichero mientras el puntero no llegue al final y el contador no iguale a la linea introducida
                $datos = fgets($archivo);   #recuperamos informacion linea a linea
                $cont++;
            }
            $res = $datos;
            return $res;
            fclose($archivo);
        }
        function mostrarNLineas($f, $num){  #funcion que muestra las n primeras lineas de un fichero
            $archivo = fopen("$f", "r") or die ("No se pudo abrir el fichero");
            $cont = 0;
            $res = "";
            while(!feof($archivo) && $cont < $num){     #recorremos el fichero mientras el puntero no llegue al final y el contador sea menor que la linea introducida
                $datos = fgets($archivo);
                $res .= $datos;     #concatenamos cada linea leida
                $cont++;
            }
            return $res;
            fclose($archivo);
        }
        ?>

    </body>
</html>