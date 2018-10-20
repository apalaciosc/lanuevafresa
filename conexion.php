<?php
$usuario = 'root';
$contra = 'fatigare21';
$host = 'localhost';
$base = 'negorest_fresa';

try {
    $conexion = new PDO('mysql:host='.$host.';dbname='.$base, $usuario,$contra, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    catch(PDOException $e){
        print "Error: " . $e->getMessage() . "<br/>";
        die();
    }
?>