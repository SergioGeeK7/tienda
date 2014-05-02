
<?php


$utc=date('U');
$ip=$_SERVER['REMOTE_ADDR'];
$navegador=$_SERVER['HTTP_USER_AGENT'];
$currentpage=$_SERVER['REQUEST_URI'];



$conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
$peticion = mysqli_query($conexion, "INSERT INTO registros VALUES ('".$utc."','".$ip."','".$navegador."','".$currentpage."')");

echo mysqli_error($conexion);
mysqli_close($conexion);

?>
