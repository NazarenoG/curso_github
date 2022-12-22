<?php

include "conexiondb.php";

$conexion = db_conexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];

$conexion->query("INSERT INTO `registro` (`nombre` , `apellido` , `dni`) VALUES ('$nombre' , '$apellido' , '$dni')");

header('Location: index.php');



?>