<?php

function db_conexion(){

$hostname = "localhost";
$username = "root";
$password = "";
$database = "trabajo";

$conexion = new mysqli($hostname,$username,$password,$database);

return $conexion;


}




?>