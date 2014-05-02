
<?php

include "../php/config.inc.php";


$conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
$peticion = mysqli_query($conexion, "UPDATE clientes SET
nombre='".$_POST["nombre"]."',
apellido='".$_POST["apellido"]."',
email='".$_POST["email"]."',
usuario='".$_POST["usuario"]."',
contrasena='".$_POST["contrasena"]."',
telefono='".$_POST["telefono"]."',
movil='".$_POST["movil"]."',
fax='".$_POST["fax"]."',
direccioncalle='".$_POST["direccioncalle"]."',
codigopostal='".$_POST["codigopostal"]."',
poblacion='".$_POST["poblacion"]."',
pais='".$_POST["pais"]."',
dniinf='".$_POST["dniinf"]."' WHERE id=".$_POST["id"]);

echo mysqli_error($conexion);


mysqli_close($conexion);

?>

<script>
    window.location="clientes.php";
</script>