<?php

$sucursal = $_POST['sucursal'];

require 'conexion.php';



$q = "SELECT * FROM sucursales";

$r = mysqli_query($con, $q);

if (mysqli_num_rows($r) > 0){
  
    while ($valores = mysqli_fetch_assoc($r)){
       $array[]= $valores;
       //echo($array[1]);
      }
      //envio respuesta a ajax como json

      echo (json_encode($array)); 
      header('Content-Type: application/json');
      
    }

mysqli_close($con);

?>