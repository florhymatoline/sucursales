<?php

$id = $_POST['id'];

require 'conexion.php';
$q = "SELECT * FROM  usuarios WHERE id_user='$id'";


$r = mysqli_query($con, $q);
//se arma un array asociativo(nombre campo , valor) que despues se
//va a trasformar en un json para devolver

if (mysqli_num_rows($r) > 0){
    while ($valores = mysqli_fetch_assoc($r)){
        $array[]= $valores;
    }
    //envio respuesta a ajax como json
    echo json_encode($array);
  }
else
  {

  }
mysqli_close($con);

?>