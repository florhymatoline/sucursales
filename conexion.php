<?php
//parametros para la conexión
$dbip = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sucursales";
//conexió
//api mysql para php
$con = mysqli_connect($dbip, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno())
{
    echo 'conexion fallida : ', mysqli_connect_error();
    exit(); 
}
else
{
   echo "<script> alert('conexión exitosa')</script>";
}
?>
