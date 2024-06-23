<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_relacional";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    echo "Error de conexión: " . $conexion->connect_error;
    die("Error de conexión: " . $conexion->connect_error);
}


?>