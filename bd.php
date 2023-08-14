<?php

$servidor="localhost";//127.0.0.1
$baseDatos="intento1";
$usuario="root";
$contrasena="";
$puerto="3306";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos;port=$puerto",$usuario,$contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "Conexion exitosa";
}catch(Exeption $ex){
    echo "Conexion fallida: ".$ex->getMessage();
}



?>