<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de departamento</title>
</head>
<body>
    <h1>CAMBIO DE DEPARTAMENTO</h1>
    <form name="cambiodpto" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	    <input type="text" name="dni" placeholder="dni" hidden>
        <label for="dni">DNI</label>
        <?php
            require "bd_fun.php";
            selectDni();
        ?>
        <br><br>
        <label for="dpto_act">Departamento actual</label>
        <input type="submit" name="most_dep" value="Mostrar">
        <?php        
        if(isset($_POST["most_dep"])){
            $dni = $_POST["emple"];
			echo "<input type='text' name='dni' placeholder='dni' hidden value=".$dni.">";
            echo "Has seleccionado el DNI ".$dni."<br>";
            $dpto_act = mostrarDepAct($dni);
            echo "<br>El departamento actual es: ".$dpto_act;        
        }
        ?>
        <br><br>
        <label for="dpto_nuevo">Departamento nuevo</label>
        <?php
            selectDpto();
        ?>
        <br><br>
        <label for="fecha_inic">Fecha</label>
        <input type="text" name="fecha_inic" value="aaaa-mm-dd">
        <br><br>
        <input type="submit" value="Realizar cambios" name="insert">
        <input type="reset" value="Borrar">
    </form>    
    <?php    
    if(isset($_POST["insert"])){
		#var_dump($_POST);
		$dni = $_POST["dni"];
		
        $dpto_act = mostrarDepAct($dni);
        $fecha_inic = test_input($_POST["fecha_inic"]);
        #recogida parametros
        $fecha_inic = test_input($_POST["fecha_inic"]);
        $dpto_nuevo = $_POST["dpto"];
        $conn = connect();           
        update_dpto_act($dni, $dpto_act, $fecha_inic, $conn);
        update_dpto_nuevo($dni, $dpto_nuevo, $fecha_inic, $conn);
    }        
    ?>
    </body>
</html>