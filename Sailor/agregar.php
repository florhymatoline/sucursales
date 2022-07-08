<?php


$nm= $_POST['nmb_comp1']; 
$em=$_POST['email1'];
$p= MD5($_POST['contra1']);
$tp= $_POST['tipo_user1']; 
$oc= $_POST['ocupacion1']; 


require 'conexion.php';
$q="INSERT INTO usuarios (nmb_comp,email,contra,tipo_user, ocupacion)VALUES ('$nm','$em','$p','$tp','$oc')";
$r= mysqli_query($con,$q);

?>