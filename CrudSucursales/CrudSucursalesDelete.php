<?php
require 'conexion.php';

$id_sucursal = $_POST['id_sucursalDelete'];
$sucursal = $_POST['sucursalDelete'];
$localizacion = $_POST['localizacionDelete'];
$capacidad_max = $_POST['capacidad_maxDelete'];
$encargado = $_POST['encargadoDelete'];
$id_user = $_POST['id_userDelete'];






$q = "DELETE FROM sucursales WHERE id_sucursal = '$id_sucursal'";

echo mysqli_query($con, $q);


?>