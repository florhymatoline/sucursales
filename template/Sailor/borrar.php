<?php
require 'conexion.php';

$nmb=$_POST['nmb_comp'];

$q="delete from usuarios where nmb_comp='$nmb'";
$r=mysqli_query($con,$q);

if ($r){

echo ('1');

}
    else{

echo ('0');

}
?>