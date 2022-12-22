<?php

include 'conexiondb.php';

$id = $_GET['id'];

$conexion = db_conexion();

$resultado = $conexion->query("SELECT * FROM registro WHERE id = '$id' ");





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar producto</title>
</head>
<body>
<form method="POST" action="guardar.php">
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre">
        </div>

        <div>
            <label>Apellido:</label>
            <input type="text" name="apellido">
        </div>

        <div>
            <label>DNI:</label>
            <input type="text" name="dni">
        </div>
<button type="submit">Guardar</button>
    </form>
</body>
</html>