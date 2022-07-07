<?php


$nm= $_POST['nmb_comp']; 
$em=$_POST['email'];
$p= MD5($_POST['contra']);
$tp= $_POST['tipo_user']; 


require 'conexion.php';
$q="INSERT INTO usuarios (nmb_comp,email,contra,tipo_user)VALUES ('$nm','$em','$p','$tp')";
$r= mysqli_query($con,$q);

?>