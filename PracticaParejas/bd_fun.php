<?php

function test_input($data){ #limpiamos los input
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function connect(){ #conexion a la base de datos
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

function insert_dpto($nombre,$conn){

    try {
        $stmt = $conn->prepare("INSERT INTO DPTO (NOMBRE) 
                                    VALUES (:nombre)");
        $stmt->bindParam(':nombre', $nombre);

        $stmt->execute();

        echo "Alta Departamento correcta";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

function selectDpto(){  #select de la tabla departamento y crea un desplegable con los departamentos
    $conn = connect();
    $sth = $conn->prepare("SELECT * FROM dpto");
    $sth->execute();

    /* Fetch all of the values */
    $result = $sth->fetchAll();
    echo '<select name="dpto">';
    echo '<option value ="0">Selecciona un departamento</option>';
    //foreach ($result as $key => $value) {
        var_dump($result);
        for ($i=0; $i < count($result); $i++) { 
            echo "<option value='".$result[$i][0]."'>".$result[$i][2]."</option>";
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
            $stmt = $conn->prepare("INSERT INTO emple_dpto (id_dpto,dni_emple,fecha_inicio) VALUES (:cod_dpto,:dni,:fecha_inicio)");
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

function selectDni(){   #select de la tabla empleado y crea un desplegable con los dni
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
            $stmt = $conn->prepare("INSERT INTO emple_dpto (id_dpto,dni_emple,fecha_inicio) VALUES (:cod_dpto,:dni,:fecha_inicio)");
            $stmt->bindParam(':dni', $dni);
            $stmt->bindParam(':fecha_inicio', $fecha_inic);
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
            $stmt = $conn->prepare("UPDATE emple_dpto SET FECHA_FIN=:fecha_fin WHERE dni_emple=:dni AND id_dpto=:cod_dpto");
            $stmt->bindParam(':dni', $dni);
            $stmt->bindParam(':fecha_fin', $fecha_fin);
            $stmt->bindParam(':cod_dpto', $cod_dpto);
            
        
            #ejecucion sentencia
            $stmt->execute();
            echo "Cambio realizado correctamente<br>";
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
}

function salario_act($dni){
    try {
        $conn = connect();

        $sth = $conn->prepare("SELECT * FROM emple WHERE DNI=:dni ;");
        $sth->bindParam(':dni', $dni);
        $sth->execute();

        $salario = $sth->fetchAll(PDO::FETCH_COLUMN, 2);
        $salario1 = $salario[0];

        echo " <br>El salaro actual es : $salario1 €";
        
    }catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
    

}

function salario_nuevo($salario_new , $dni){
    try {
        $conn = connect();

        $sth = $conn->prepare("Update emple set salario=:salario where dni=:dni");
        $sth->bindParam(':salario', $salario_new);
        $sth->bindParam(':dni', $dni);
        $sth->execute();

        echo "Cambio de Salario Realizado correctamente";

    }catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    
} 

function mostrarDepAct($dni){   #recibe el dni del empleado y muestra el departamento en el que se encuentra actualmente
    try{
        $conn = connect();
        $sth = $conn->prepare("SELECT dpto.id, dpto.nombre FROM dpto, emple_dpto WHERE dni_emple=:dni AND emple_dpto.id_dpto=dpto.id AND emple_dpto.fecha_fin IS NULL");
        $sth->bindParam(':dni', $dni);
        $sth->execute();
    
        /* Fetch all of the values of the first column*/
        $result = $sth->fetchAll(\PDO::FETCH_NUM);
        //$dep = implode($result);

        foreach ($result as $key => $value) {
           echo "<br>El departamento actual es: ".$value[1];
        }
        return $value[0];
        
        
    
        
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
}

function listarEmple($cod_dpto, $conn){ #recibe el cod_dpto y muestra un listado con todos los empleados que pertenecen a el
    try{
        $sth = $conn->prepare("SELECT emple.* , emple_dpto.id_DPTO FROM `emple` INNER JOIN emple_dpto on emple.dni=emple_dpto.DNI_EMPLE where emple_dpto.ID_DPTO =:cod_dpto AND emple_dpto.FECHA_FIN IS NULL;");
        $sth->bindParam(':cod_dpto', $cod_dpto);
        $sth->execute();

        /* Fetch all of the values of the first column*/
        $result = $sth->fetchAll(\PDO::FETCH_NUM);
        return $result;
  
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
}

function mostrarLista($arr){
    echo "<table cellpadding='8%'><tr><th>DNI</th><th>NOMBRE</th><th>SALARIO</th><th>FECHA NAC</th><th>ID DPTO</th></tr>";
    foreach ($arr as $key => $value) {
        echo "<tr>";
        for ($i=0; $i < count($value); $i++) { 
            echo "<td>".$value[$i] ."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

}