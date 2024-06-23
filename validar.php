<?php

require('config/conexion.php');

$name = $_POST['name'];
$password = $_POST['password'];
session_start();
$_SESSION['name'] = $name;

$sql = "SELECT * FROM user WHERE name = '$name' AND password = '$password'";
$resultado = mysqli_query($conexion, $sql);
$filas = mysqli_fetch_array($resultado);


if ($filas['id_rol'] == 1) {  //admin
    var_dump($filas['id_rol']);
    header('Location: admin/principal.php');
} else if ($filas['id_rol'] == 2) { //user
    header('Location: user/user.php');
} else {
?>
    <?php
    include('index.php');
    ?>
    <h1 class="bad">ERROR EN LA AUTENTICACION</h1>
<?php
}
// Remove the line that calls the 'mysqli_result' function
mysqli_close($conexion);
