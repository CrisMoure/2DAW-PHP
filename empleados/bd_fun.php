<?php

function test_input($data){ #limpiamos los input
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function connect(){
    #credenciales conexion a la bd
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "empleadosnn";

    #pdo php database object
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); #establecemos la captura de excepciones
        return $conn;
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}

function selectDpto(){
    $conn = connect();
    $sth = $conn->prepare("SELECT * FROM dpto");
    $sth->execute();

    /* Fetch all of the values */
    $result = $sth->fetchAll();
    echo '<select name="dpto">';
    echo '<option value ="0">Selecciona un departamento</option>';
    //foreach ($result as $key => $value) {
        for ($i=0; $i < count($result); $i++) { 
            echo "<option value='".$result[$i][0]."'>".$result[$i][1]."</option>";
        }
    //}
    echo '</select>';

}

function insert_emple($dni, $nombre, $salario, $fecha_nac, $conn){  #funcion que inserta en la tabla empleado
        #preparacion sentencia sql
        try{
            $stmt = $conn->prepare("INSERT INTO emple (dni,nombre,salario,fecha_nac) VALUES (:dni,:nombre,:salario,:fecha_nac)");
            $stmt->bindParam(':dni', $dni);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':salario', $salario);
            $stmt->bindParam(':fecha_nac', $fecha_nac);
            
        
            #ejecucion sentencia
            $stmt->execute();
            echo "Alta Empleado correcta<br>";
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }

}

function insert_emple_dpto($cod_dpto, $dni, $fecha_inic, $conn){ #funcion que inserta un empleado en la tabla emple_dpto
        #preparacion sentencia sql
        try{
            $stmt = $conn->prepare("INSERT INTO emple_dpto (cod_dpto,dni,fecha_inicio) VALUES (:cod_dpto,:dni,:fecha_inicio)");
            $stmt->bindParam(':dni', $dni);
            $stmt->bindParam(':cod_dpto', $cod_dpto);
            $stmt->bindParam(':fecha_inicio', $fecha_inic);
            
        
            #ejecucion sentencia
            $stmt->execute();
            echo "Alta Empleado correcta<br>";
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
}

function selectDni(){
    try{
        $conn = connect();
        $sth = $conn->prepare("SELECT * FROM emple");
        $sth->execute();
    
        /* Fetch all of the values of the first column*/
        $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
    
        echo '<select name="emple">';
        echo '<option value ="0">Selecciona un DNI</option>';
        foreach ($result as $key => $dni) {
            echo "<option value='".$dni."'>".$dni."</option>";
            
        }
        echo '</select>';
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }


}

function update_dpto_nuevo($dni, $cod_dpto, $fecha_inic, $conn){    #recibe el dni, el cod del dpto al que se va a cambiar, la fecha de inicio y la conexion y hace un update del cod de depto y la fecha de inicio
        #preparacion sentencia sql
        try{
            $stmt = $conn->prepare("INSERT INTO emple_dpto (cod_dpto,dni,fecha_inicio) VALUES (:cod_dpto,:dni,:fecha_inicio)");
            $stmt->bindParam(':dni', $dni);
            $stmt->bindParam(':fecha_inic', $fecha_inic);
            $stmt->bindParam(':cod_dpto', $cod_dpto);
        
            #ejecucion sentencia
            $stmt->execute();
            echo "Cambio departamento correcto <br>";
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
}

function update_dpto_act($dni, $cod_dpto, $fecha_fin, $conn){   #update de la fecha de fin del depto anterior
        #preparacion sentencia sql
        try{
            $stmt = $conn->prepare("UPDATE emple_dpto SET fecha_fin=:fecha_fin WHERE dni=:dni AND cod_dpto=:cod_dpto");
            $stmt->bindParam(':dni', $dni);
            $stmt->bindParam(':fecha_fin', $fecha_fin);
            $stmt->bindParam(':cod_dpto', $cod_dpto);
            
        
            #ejecucion sentencia
            $stmt->execute();
            echo "Cambio <br>";
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
}

function mostrarDepAct($dni){   #recibe el dni del empleado y muestra el departamento en el que se encuentra actualmente
    try{
        $conn = connect();
        $sth = $conn->prepare("SELECT cod_dpto FROM emple_dpto WHERE dni=:dni");
        $sth->bindParam(':dni', $dni);
        $sth->execute();
    
        /* Fetch all of the values of the first column*/
        $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
        $dep = implode($result);
        
        return $dep;
    
        
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
}


?>