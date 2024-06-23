<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1 class="bg-dark p-2 text-light text-center">Editar Producto</h1>

    <form class="container p-5" action="../CRUD/editarDatos.php" method="POST">
        <?php
        include('../config/conexion.php');

        $sql = "SELECT * FROM productos WHERE IdProducto = " . $_REQUEST['Id'];
        $resultado = $conexion->query($sql);

        $row = $resultado->fetch_assoc();
        ?>

        <!-- Input con el IdProducto en hidden porque se envia con el formulario al editar -->
        <input type="hidden" name="Id" value="<?php echo $row['IdProducto']; ?>">

        <!-- TRAER DATOS MARCA -->

        <div class="mb-3">
            <label class="form-label">Marca</label>
            <select class="form-select" name="marcas">
                <option selected>--Seleccionar Marca--</option>
                <?php
                include('../config/conexion.php');
                $sql1 = "SELECT * FROM marcas WHERE Id = " . $row['MarcaId']; //Traemos la marca que tiene el producto
                $resultado1 = $conexion->query($sql1);
                $row1 = $resultado1->fetch_assoc();
                echo "<option selected value='" . $row1['Id'] . "'>" . $row1['NombreMarca'] . "</option>";

                $sql1b = "SELECT * FROM marcas WHERE Id != " . $row['MarcaId'];
                $resultado1b = $conexion->query($sql1b);

                while ($pila = $resultado1b->fetch_assoc()) {
                    echo "<option value='" . $pila['Id'] . "'>" . $pila['NombreMarca'] . "</option>";
                }
                ?>
            </select>
        </div>

        <!-- TRAER DATOS CATEGORIA -->

        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select class="form-select" name="categorias">
                <option selected>--Seleccionar Categoria--</option>
                <?php
                include('../config/conexion.php');
                $sql2 = "SELECT * FROM categorias WHERE Id = " . $row['CategoriaId']; //Traemos la categoria que tiene el producto
                $resultado2 = $conexion->query($sql2);
                $row2 = $resultado2->fetch_assoc();
                echo "<option selected value='" . $row2['Id'] . "'>" . $row2['NombreCategoria'] . "</option>";

                $sql2b = "SELECT * FROM categorias WHERE Id != " . $row['CategoriaId'];
                $resultado2b = $conexion->query($sql2b);

                while ($pila = $resultado2b->fetch_assoc()) {
                    echo "<option value='" . $pila['Id'] . "'>" . $pila['NombreCategoria'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" class="form-control" maxlength="20" name="precio" value="<?php echo $row['Precio']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="<?php echo $row['DescripcionProducto']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['Nombre']; ?>">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="../index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
<html>