<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MODIFICAR SALARIO</title>
</head>
<body>
    <H2>MODIFICAR SALARIO</H2>
   
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="dni">DNI</label>
    <?php
        require "bd_fun.php";
        
        if(isset($_POST["salario"])){
            $dni = $_POST['emple'];
            echo "<br> El DNI Seleccionado es : $dni";
            echo "<input type='text' name='dni' placeholder='dni' hidden value=".$dni.">";
            
        }else{
            selectDni();
            echo "<br><label for='sal_act'>Salario Actual</label>";
            echo "<input type='submit' name ='salario' value='Ver salario'>";
        }
        
    
    ?>
    <?php
        if(isset($_POST["salario"])){
            $dni = $_POST['emple'];
            echo "<input type='text' name='dni' placeholder='dni' hidden value=".$dni.">";
            salario_act($dni);
            
        }
    ?>
    <br>
    <label for="sal_new">Salario Nuevo</label>
    <input type="number" name="nuevo">
    <br>
    <br>
    <input type="submit" value="Cambiar" name="cambio">
    </form>

</body>
</html>

<?php 
    if (isset($_POST["cambio"])) {
        $dni = $_POST['dni'];
        $salario_new = test_input($_POST['nuevo']);
        salario_nuevo($salario_new,$dni);
    }
    
?>
