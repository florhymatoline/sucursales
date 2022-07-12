<?php

require 'conexion.php';

$id_sucursal = $_POST['id_sucursal'];
$fecha = $_POST['fecha'];

$q = "INSERT INTO `datos_diarios` (`id_datos`, `id_sucursal`, `fecha_registro`, `cant_personas`) VALUES ('','$id_sucursal','$fecha','0')";

echo mysqli_query($con, $q);





?>