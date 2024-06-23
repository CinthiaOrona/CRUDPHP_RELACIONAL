<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUDPHP RELACIONAL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <br>

    <!-- COMENTAR EL SIGUIENTE FORM PARA VER LA TABLA DEL CRUD. CASO CONTRARIO VER EL LOGIN -->

  <form action="validar.php" method="POST">
    <h1>
      Sistema de Inventario
    </h1>
    <label for="usuario">
      Usuario:
      <input type="text" name="name" id="name">
    </label>
    <label for="password">
      Contraseña:
      <input type="password" name="password" id="password">
    </label>
    <input type="submit" value="Ingresar">
  </form>

  <!-- DESCOMENTAR ABAJO PARA VER LA TABLA DEL CRUD -->

  <!-- <div class="container">
    <h1 class="text-center bg-dark text-light">LISTADO DE PRODUCTOS</h1>
  </div>
  <br>
  <div class="container-fluid">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Categoria</th>
          <th scope="col">Marca</th>
          <th scope="col">Precio</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Nombre</th>
          <th scope="col">Imagen</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        require('config/conexion.php');
        $sql = $conexion->query("SELECT * FROM productos
                    INNER JOIN categorias ON productos.CategoriaId = categorias.Id
                    INNER JOIN marcas ON productos.MarcaId = marcas.Id
                    ");

        while ($resultado = $sql->fetch_assoc()) {
        ?>

          <tr>
            <th scope="row"><?php echo $resultado['IdProducto'] ?></th>
            <th scope="row"><?php echo $resultado['NombreCategoria'] ?></th>
            <th scope="row"><?php echo $resultado['NombreMarca'] ?></th>
            <th scope="row"><?php echo $resultado['Precio'] ?></th>
            <th scope="row"><?php echo $resultado['DescripcionProducto'] ?></th>
            <th scope="row"><?php echo $resultado['Nombre'] ?></th>

            <th scope="row"><img src="data:image/jpg;base64,<?php echo base64_encode($resultado['Imagen']); ?>" width="100" height="100"></th>
            <th scope="row">
              <a href="./formularios/EditarForm.php?Id=<?php echo $resultado['IdProducto'] ?>" class="btn btn-warning">Editar</a>
              <a href="./CRUD/eliminarDatos.php?Id=<?php echo $resultado['IdProducto'] ?>" class="btn btn-danger">Eliminar</a>
            </th>
          </tr>
        <?php
        }
        ?>


      </tbody>
    </table>
    <a href="./formularios/AgregarForm.php" class="btn btn-primary">Agregar Producto</a>
  </div> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>