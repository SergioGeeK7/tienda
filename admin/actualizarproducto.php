
<?php

include "../php/config.inc.php";


$conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
$peticion = mysqli_query($conexion, "UPDATE productos SET
nombre='".$_POST["nombre"]."',
precio='".$_POST["precio"]."',
peso='".$_POST["peso"]."',
longitud='".$_POST["longitud"]."',
anchura='".$_POST["anchura"]."',
altura='".$_POST["altura"]."',
existencias='".$_POST["existencias"]."',
activado='".$_POST["activado"]."' WHERE id=".$_POST["id"]);

echo mysqli_error($conexion);


mysqli_close($conexion);

?>

<script>
  window.location="productos.php";
</script>