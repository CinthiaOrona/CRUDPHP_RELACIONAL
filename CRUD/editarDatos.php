<?php

include('../config/conexion.php');

$id = $_POST['Id'];
$marca = $_POST['marcas'];
$categoria = $_POST['categorias'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$nombre = $_POST['nombre'];

$sql = "UPDATE productos SET 
MarcaId = '$marca',
CategoriaId = '$categoria',
Precio = '$precio',
DescripcionProducto = '$descripcion',
Nombre = '$nombre'
WHERE IdProducto = '$id'";

$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    header('Location: ../index.php');
} else {
    echo "Error al editar datos";
}
