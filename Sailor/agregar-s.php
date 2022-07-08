<?php

$su= $_POST['sucursal'];
$l= $_POST['localizacion'];
$cp= $_POST['capacidad_max'];
$us= $_POST['id_user'];

require 'conexion.php';
$q="INSERT INTO sucursales (sucursal,localizacion,capacidad_max,id_user)VALUES ('$su','$l','$cp','$us')";
$r= mysqli_query($con,$q);

?>