<?php
$arch = fopen($_POST['archivo'].'.txt','w');

$t = $_POST['texto'];
$t = str_replace("/","",$t); // sin barras
$t = str_replace(chr(92),"",$t); // sin barras invertidas


fwrite($arch, $t);
fclose($arch);
echo 'ok';
 ?>
