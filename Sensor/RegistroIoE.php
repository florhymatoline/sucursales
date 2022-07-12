<?php
require 'conexion.php';

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$i_e = $_POST['i_e'];
$id_sucursal = $_POST['id_sucursal'];








$q = "INSERT INTO registro (fecha, hora, i_e, id_sucursal) VALUES ('$fecha','$hora','$i_e','$id_sucursal')";

echo mysqli_query($con, $q);


?>
