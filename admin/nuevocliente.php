
<?php

include "../php/config.inc.php";


$conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
$peticion = mysqli_query($conexion, "INSERT INTO clientes VALUES (NULL,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["email"]."',
                         '".$_POST["usuario"]."','".$_POST["contrasena"]."','".$_POST["telefono"]."','".$_POST["movil"]."','".$_POST["fax"]."',
                         '".$_POST["direccioncalle"]."','".$_POST["codigopostal"]."','".$_POST["poblacion"]."','".$_POST["pais"]."',
                         '".$_POST["dni"]."')");

mysqli_close($conexion);

?>

<script>
    window.location="clientes.php";
</script>