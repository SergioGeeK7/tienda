
<?php

include "../php/config.inc.php";


$conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
$peticion = mysqli_query($conexion, "DELETE FROM productos WHERE id=".$_GET["id"]." ");

mysqli_close($conexion);

?>

<script>
    window.location="productos.php";
</script>