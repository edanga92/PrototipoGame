<?php
$servidor = 'localhost';
$usuario  = 'root';
$pass     ='';
$baseDatos = 'game';


$conexion = new mysqli($servidor,$usuario,$pass,$baseDatos);

$uss     = $_GET['uss'];
$nScore  = $_GET['nScore'];
if(!$conexion)
{
    echo "400";// no conexion
}else {

  $sql  = "SELECT * FROM usuarios WHERE userName LIKE '$uss'";
  $resultado  = mysqli_query($conexion, $sql);
  if (mysqli_num_rows($resultado)>0)
  {
    $sql  = "UPDATE usuarios SET Points= '$nScore' WHERE userName LIKE '$uss'";
    $resultado  = mysqli_query($conexion, $sql);
    echo "202";
    
    //Actualizacion exitosa
  }else {
    echo "401";// no encontro datos
  }
}


 ?>
