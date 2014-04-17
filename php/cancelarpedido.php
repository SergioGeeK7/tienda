<?php

include "../php/config.inc.php";


$conexion = mysqli_connect($servidor,$usuario,$contrasena,$db);
$peticion = mysqli_query($conexion,"UPDATE pedidos SET estado=2 WHERE id =".$_GET["id"]);
mysqli_close($conexion);

echo("
    <script>
    setTimeout(function (){
        window.location='../admin/pedidos.php';
    },5000);
    </script>


    ");


?>