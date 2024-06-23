<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="bg-dark p-2 text-light text-center">Agregar Producto</h1>

    <form class="container p-5" action="../CRUD/insertarDatos.php" method="POST">

        <div class="mb-3">
            <label class="form-label">Marca</label>
            <select class="form-select" name="marcas">
                <option selected>--Seleccionar Marca--</option>
                <?php
                include('../config/conexion.php');

                $sql = $conexion->query("SELECT * FROM marcas");

                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['Id'] . "'>" . $resultado['NombreMarca'] . "</option>";
                ?>

                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select class="form-select" name="categorias">
                <option selected>--Seleccionar Categoria--</option>
                <?php
                include('../config/conexion.php');

                $sql = $conexion->query("SELECT * FROM categorias");

                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['Id'] . "'>" . $resultado['NombreCategoria'] . "</option>";
                ?>

                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" class="form-control" maxlength="20" name="precio">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="../index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>