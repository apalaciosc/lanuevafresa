<?php
    include('conexion.php');
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $sentencia= "CALL mensaje (?,?,?)";
    $resultado = $conexion->prepare($sentencia);
    $resultado->bindParam(1,$nombre, PDO:: PARAM_STR,100);
    $resultado->bindParam(2,$email, PDO:: PARAM_STR,150);
    $resultado->bindParam(3,$mensaje, PDO:: PARAM_STR,2000);
    $result=$resultado->execute();
?>