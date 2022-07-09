<?php
require 'conexion.php';

$id_sucursal = $_POST['id_sucursalEdit'];
$sucursalEdit = $_POST['sucursalEdit'];
$localizacion = $_POST['localizacionEdit'];
$capacidad_max = $_POST['capacidad_maxEdit'];
#$encargado = $_POST['encargadoEdit'];
$id_user = $_POST['id_userEdit'];






$q = "UPDATE sucursales SET sucursal='$sucursalEdit',localizacion='$localizacion',capacidad_max='$capacidad_max',id_user='$id_user' WHERE id_sucursal = '$id_sucursal'";

echo mysqli_query($con, $q);

?>