<?php

include 'conexiondb.php';

$conexion = db_conexion();

$resultado = $conexion->query("SELECT * FROM registro");







?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuarios</title>
    <link rel="stylesheet" href="fonts/style.css">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    
<br>

<a href="nuevo_registro.php" class="btn btn-danger" style="margin-top:2%;margin-left:36%;margin-right:5%">Registrar usuario</a>

<br>
<br>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Dni</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
while($registros = $resultado -> fetch_assoc()){

    ?>
    <tr>
      <th scope="row"><?php echo $registros["id"]; ?></th>
      <td><?php echo $registros["nombre"]; ?></td>
      <td><?php echo $registros["apellido"]; ?></td>
      <td><?php echo $registros["dni"]; ?></td>
      <td>
      <a href="eliminar.php?id=<?php echo $registros['id']; ?>">Eliminar</a>

<a href="actualizar.php?id=<?php echo $registros['id']; ?>">Editar</a>
      </td>
    </tr>
    <?php
}
    ?>
  </tbody>
</table>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>




































</form>
</html>