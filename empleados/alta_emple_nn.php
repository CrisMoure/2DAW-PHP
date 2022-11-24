<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta empleados</title>
</head>
<body>
    <h1>ALTA EMPLEADO</h1>
    <form name="altaemple" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="dni">DNI</label>
        <input type="text" name="dni">
        <br><br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br><br>
        <label for="salario">Salario</label>
        <input type="text" name="salario">
        <br><br>
        <label for="fecha_nac">Fecha de nacimiento</label>
        <input type="text" name="fecha_nac" value="aaaa-mm-dd">
        <br><br>
        <label for="fecha_inic">Fecha de inicio</label>
        <input type="text" name="fecha_inic" value="aaaa-mm-dd">
        <br><br>
        <label for="dpto">Departamento</label>
        <?php
            require "bd_fun.php";
            selectDpto();
        ?>
        <br><br>
        <input type="submit" value="Dar de alta" name="insert">
        <input type="reset" value="Borrar">
    </form>

    <?php
    if(isset($_POST["insert"])){
        #recogida parametros
        $dni = test_input($_POST["dni"]);
        $nombre = test_input($_POST["nombre"]);
        $salario = test_input($_POST["salario"]);
        $fecha_nac = test_input($_POST["fecha_nac"]);
        $fecha_inic = test_input($_POST["fecha_inic"]);
        $dpto = $_POST["dpto"];
        $conn = connect();
        //echo "dni $dni nombre $nombre salario $salario fecha $fecha_nac dpto $dpto";
        insert_emple($dni, $nombre, $salario, $fecha_nac, $conn);
        insert_emple_dpto($dpto, $dni, $fecha_inic, $conn);
    }

        ?>

</body>
</html>


