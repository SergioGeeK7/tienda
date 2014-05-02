
<?php

include "../php/config.inc.php";


$conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
$peticion = mysqli_query($conexion, "INSERT INTO productos VALUES (NULL,'".$_POST["nombre"]."','','".$_POST["precio"]."','".$_POST["peso"]."',
                         '".$_POST["longitud"]."','".$_POST["anchura"]."','".$_POST["altura"]."','".$_POST["existencias"]."','".$_POST["activado"]."')");



$peticion = mysqli_query($conexion, "SELECT * FROM productos ORDER BY id DESC LIMIT 1");

$id = mysqli_fetch_array($peticion)["id"];

// PONER SEGURIDAD PORQUE ME PUEDEN SUBIR UN SCRIPT MALISIOSO Y LUEGO EJECUTARLO

$peticion = mysqli_query($conexion, "INSERT INTO imagenesproductos VALUES(null,$id,'".$_FILES["imagen"]["name"]."')");


if($_FILES["imagen"]["type"] == "image/gif" || $_FILES["imagen"]["type"] == "image/jpg" || $_FILES["imagen"]["type"] == "image/jpeg"
   || $_FILES["imagen"]["type"] == "image/png"){

    // imagen == nombrequepasoporpost , tmp_name nombre de la imagen.png or whatever
    move_uploaded_file($_FILES["imagen"]["tmp_name"],"../photo/".$_FILES["imagen"]["name"]); // los archivos se guardan en el array $_FILES segundo parametro es adonde guardalo
}





mysqli_close($conexion);

?>

<script>
    //window.location="productos.php";
</script>






















