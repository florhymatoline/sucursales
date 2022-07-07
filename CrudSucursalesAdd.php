<?php

require 'conexion.php';


$sucursal = $_POST['sucursal'];
$localizacion = $_POST['localizacion'];
$capacidad_max = $_POST['capacidad_max'];
$encargado = $_POST['encargado'];
$id_user = $_POST['id_user'];





$q = "INSERT INTO sucursales (`sucursal`, `localizacion`, `capacidad_max`, `encargado`, `id_user`) VALUES ('$sucursal','$localizacion','$capacidad_max','$encargado','$id_user')";

echo mysqli_query($con, $q);



?>