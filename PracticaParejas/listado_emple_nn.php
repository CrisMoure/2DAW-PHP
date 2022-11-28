<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO EMPLEADOS</title>
</head>
<body>
    <h1>LISTADO EMPLEADOS</h1>
    <form name="listemple" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="dpto">Departamento</label>
        <?php
            require "bd_fun.php";
            selectDpto();
        ?>
        <br><br>
        <input type="submit" value="Mostrar" name="mostrar">
        <input type="reset" value="Borrar">
    </form>

    <?php
    if(isset($_POST["mostrar"])){
        #recogida parametros
        $dpto = $_POST["dpto"];
        $conn = connect();
        listarEmple($dpto, $conn);
    }

        ?>

</body>
</html>