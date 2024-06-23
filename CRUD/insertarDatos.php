<?php

include('../config/conexion.php');

$marca = $_POST['marcas'];
$categoria = $_POST['categorias'];  //recibimos el valor del name="categorias" del formulario
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$nombre = $_POST['nombre'];

//Estos nombres deben ser identicos a como los ingresamos en la base de datos
$sql = "INSERT INTO productos (MarcaId, CategoriaId, Precio, DescripcionProducto, Nombre) 
VALUES ('$marca', '$categoria', '$precio', '$descripcion', '$nombre')";

$resultado = mysqli_query($conexion, $sql);

if($resultado){
    header('Location: ../index.php');
}else{
    echo "Error al insertar datos";
}
