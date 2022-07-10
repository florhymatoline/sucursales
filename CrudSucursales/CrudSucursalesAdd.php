<?php

require 'conexion.php';


$sucursal = $_POST['sucursal'];
$localizacion = $_POST['localizacion'];
$capacidad_max = $_POST['capacidad_max'];
//$encargado = $_POST['encargado'];
$id_user = $_POST['id_user'];





$q = "INSERT INTO sucursales (`sucursal`, `localizacion`, `capacidad_max`,`id_user`) VALUES ('$sucursal','$localizacion','$capacidad_max','$id_user')";

echo mysqli_query($con, $q);

$q = "UPDATE `usuarios` SET `ocupado`='SI' WHERE `id_user` ='$id_user '";

echo mysqli_query($con, $q);



?>