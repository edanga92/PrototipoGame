<?php
include "ConexionBD.php";

$uss     = $_GET['uss'];
$pss     = $_GET['pss'];
if(!$conexion)
{
    echo "error";
}else {

  $sql  = "SELECT * FROM usuarios WHERE userName LIKE '$uss' AND password LIKE '$pss'";
  $resultado  = mysqli_query($conexion, $sql);
  if (mysqli_num_rows($resultado)>0)
  {
    echo "200";//si existe
  }else {
    echo "400";// no existe
  }
}


 ?>
