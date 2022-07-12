<?php

require 'conexion.php';



$q = "SELECT id_sucursal FROM sucursales";

$r =  mysqli_query($con, $q);

if (mysqli_num_rows($r) > 0){
  
    while ($valores = mysqli_fetch_assoc($r)){
       $array[]= $valores;
       //echo($array[1]);
      }
      //envio respuesta a ajax como json

      echo (json_encode($array)); 
      
      header('Content-Type: application/json');
      //↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑       
      //Función necesaria para que php envie el array correctamente a ajax
    }

mysqli_close($con);


?>
