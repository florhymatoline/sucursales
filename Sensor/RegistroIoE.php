<?php
require 'conexion.php';

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$i_e = $_POST['i_e'];






$q = "INSERT INTO registro(fecha, hora, i_e) VALUES ('$fecha','$hora','$i_e')'";

echo mysqli_query($con, $q);


?>
