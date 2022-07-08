<?php
require 'conexion.php';

$id=$_POST['id'];
$nm= $_POST['nmb_comp']; 
$em=$_POST['email'];
$p= MD5($_POST['contra']);
$tp= $_POST['tipo_user']; 
$oc= $_POST['ocupacion']; 

$q="UPDATE usuarios SET id_user='$id', nmb_comp='$nm', email='$em', contra='$p', tipo_user='$tp', ocupacion='$oc' WHERE id_user='$id'";

$r=mysqli_query($con, $q);

if ($r){

    echo ('1');
    
    }
        else{
    
    echo ('0');
    
    }
?>