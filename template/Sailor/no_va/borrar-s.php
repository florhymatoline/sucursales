<?php
require 'conexion.php';

$nmb=$_POST['sucursal'];

$q="delete from sucursales where sucursal='$nmb'";
$r=mysqli_query($con,$q);

if ($r){

echo ('1');

}
    else{

echo ('0');

}
?>