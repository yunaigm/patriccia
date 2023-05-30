<?php 
$host = "localhost"; 
$database = "bbddyunai"; 
$user = "root"; 
$password = "";
$conexion = mysqli_connect($host, $user, $password,$database);

if (!$conexion) 
  die("No ha podido realizarse la conexión".mysqli_connect_error());
else
  echo "Conexion correcta";

//mysqli_close($conexion); //cierra la BBDD
?>
