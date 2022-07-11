<?php
require 'conexion.php';

$id = $_POST['id'];
$su= $_POST['sucursal'];
$l= $_POST['localizacion'];
$cp= $_POST['capacidad_max'];
$us= $_POST['id_user'];

$q="UPDATE sucursales SET id_sucursal='$id', sucursal='$su', localizacion='$l', capacidad_max='$cp',id_user='$us' WHERE id_sucursal='$id'";
$r=mysqli_query($con, $q);
$c="UPDATE usuarios SET ocupacion='O' WHERE id_user='$us'";
$s=mysqli_query($con, $c);


if ($r && $c){

    echo ('1');
    
    }
        else{
    
    echo ('0');
    
    }
?>