<?php

include('../config/conexion.php');

$Id = $_GET['Id'];

$sql = "DELETE FROM productos WHERE IdProducto = $Id";

$query = mysqli_query($conexion, $sql);


if ($query) {
    header('Location: ../index.php');
} else {
    echo "Error al eliminar datos";
}