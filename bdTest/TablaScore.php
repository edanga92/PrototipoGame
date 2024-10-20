<?php
$servidor = 'localhost';
$usuario  = 'root';
$pass     ='';
$baseDatos = 'game';


$conexion = new mysqli($servidor,$usuario,$pass,$baseDatos);

//$uss     = $_GET['uss'];

if(!$conexion)
{
    echo "400";// no conexion
}else {

  $sql  = "SELECT * FROM usuarios";
  $resultado  = mysqli_query($conexion, $sql);
  if (mysqli_num_rows($resultado)>0)
  {//mostrar datos obtenidos
    while ($row = mysqli_fetch_assoc($resultado)) {
      echo $row['userName']."|".$row['Points'].'@';
    }
    //si existe
  }else {
    echo "401";// no encontro datos
  }
}


 ?>
