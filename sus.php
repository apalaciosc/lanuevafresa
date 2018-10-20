<?php
    include('conexion.php');
    
    $telefono = $_POST['telefono'];
    
        $sentencia= "CALL suscriptores (?)";
    $resultado = $conexion->prepare($sentencia);
    $resultado->bindParam(1,$telefono, PDO:: PARAM_STR,12);
    $resultado->execute();
    echo 1;
    
?>