<?php
session_start();
$DB_HOST=$_ENV["mysql.railway.internal"];
$DB_USER=$_ENV["root"];
$DB_PASSWORD=$_ENV["dXoUyHEkCIPDBDyqPMKtQpbxloRTJGgF"];
$DB_NAME=$_ENV["railway"];
$DB_PORT=$_ENV["3306"];

$db=mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT");

$uss     = $_GET['uss'];
$pss     = $_GET['pss'];

if(!$conexion)
{
    echo "400";// no se puedo establecer conexion
}else {
  $sql  = "SELECT * FROM usuarios WHERE userName LIKE '$uss'";
  $resultado  = mysqli_query($conexion, $sql);
  if (mysqli_num_rows($resultado)>0)
  {
    echo "402";// el usuario ya existe
  }else {
    $sql  = "INSERT INTO usuarios (id,userName,password,Points) VALUES (NULL,'$uss','$pss',0)";
    $resultado  = mysqli_query($conexion, $sql);
    echo "201";// se creo el registro exitosamente
  }
}


 ?>
