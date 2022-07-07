<?php
$nmb_comp = $_GET['nmb_comp'];
require 'conexion.php';
$q = "select * from usuarios where UPPER(nmb_comp) like '" . strtoupper($nmb_comp) . "%'";

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