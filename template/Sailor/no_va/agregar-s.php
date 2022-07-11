<?php

$su= $_POST['sucursal1'];
$l= $_POST['localizacion1'];
$cp= $_POST['capacidad_max1'];
$us= $_POST['id_user1'];

require 'conexion.php';
$q="INSERT INTO sucursales (sucursal,localizacion,capacidad_max,id_user)VALUES ('$su','$l','$cp','$us')";
$r= mysqli_query($con,$q);

$c="UPDATE usuarios SET ocupacion='O' WHERE id_user='$us'";
$e= mysqli_query($con,$c);
if ($r && $e){

    echo ('1');
    
    }
        else{
    
    echo ('0');
    
    }
?>