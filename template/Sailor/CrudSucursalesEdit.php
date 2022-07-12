<?php
require 'conexion.php';

$id_sucursal = $_POST['id_sucursalEdit'];
$sucursalEdit = $_POST['sucursalEdit'];
$localizacion = $_POST['localizacionEdit'];
$capacidad_max = $_POST['capacidad_maxEdit'];
#$encargado = $_POST['encargadoEdit'];
$id_userNew = $_POST['id_userEditNew'];
$id_userAct = $_POST['id_userEditAct'];






$q = "UPDATE sucursales SET sucursal='$sucursalEdit',localizacion='$localizacion',capacidad_max='$capacidad_max',id_user='$id_userNew' WHERE id_sucursal = '$id_sucursal'";

echo mysqli_query($con, $q);

$q = "UPDATE usuarios SET ocupado = 'SI' WHERE id_user = '$id_userNew'";

echo mysqli_query($con, $q);

$q = "UPDATE usuarios SET ocupado = 'NO' WHERE id_user = '$id_userAct'";

echo mysqli_query($con, $q);

?>