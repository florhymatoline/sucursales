<?php

require 'conexion.php';






$q = "SELECT * FROM sucursales";

echo mysqli_query($con, $q);



?>