<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>

    <script src="https://kit.fontawesome.com/fea68348bd.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <form method="POST" action="guardar.php">
    <div class="form-floating mb-3" style="margin-top:2%;margin-left:2%;margin-right:65%;">
  <input type="text" name="nombre" class="form-control">
  <label for="floatingInput">Nombre:</label>
</div>

<div class="form-floating mb-3" style="margin-top:2%;margin-left:2%;margin-right:65%;">
  <input type="text" name="apellido" class="form-control">
  <label for="floatingInput">Apellido:</label>
</div>

<div class="form-floating mb-3" style="margin-top:2%;margin-left:2%;margin-right:65%;">
  <input type="text" name="dni" class="form-control">
  <label for="floatingInput">DNI:</label>
</div>


<button type="submit" class="btn btn-danger" style="margin-top:1%;margin-left:14%;margin-right:65%;">Guardar</button>
    </form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>