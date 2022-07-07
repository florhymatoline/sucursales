<?php
require 'conexion.php';

$id=$_POST['id'];
$nmb=$_POST['nombre'];
$eml=$_POST['email'];
$us=$_POST['user'];
$ps=MD5($_POST['pass']);
$tp=$_POST['tipo'];
$fn=$_POST['fch_n'];

$q="UPDATE usuarios SET id_usuario='$id', nmb_cmp='$nmb', email='$eml', usuario='$us',contra='$ps', tipo='$tp', fch_nac='$fn' WHERE id_usuario='$id'";

$r=mysqli_query($con, $q);

if ($r){

    echo ('1');
    
    }
        else{
    
    echo ('0');
    
    }
?>