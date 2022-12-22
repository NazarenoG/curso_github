<?php

include 'conexiondb.php';

$conexion = db_conexion();

$id = $_GET['id'];

$conexion->query("DELETE FROM registro WHERE id = '$id' ");

header('Location: index.php');



?>