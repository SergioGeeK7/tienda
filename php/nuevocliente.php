<?php

include "config.inc.php";

$contador = 0;
$conexion = mysqli_connect($servidor,$usuario,$contrasena,$db);
$peticion = mysqli_query($conexion, "SELECT * FROM clientes WHERE usuario='".$_POST["usuario"]."'");

echo mysqli_error($conexion);

if (!mysqli_fetch_array($peticion)) {


    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
    $peticion = mysqli_query($conexion, "INSERT INTO clientes VALUES (
                            NULL,
                            '" . $_POST["nombre"] . "',
                            '" . $_POST["apellido"] . "',
                            '" . $_POST["email"] . "',
                            '" . $_POST["usuario"] . "',
                            '" . $_POST["contrasena"] . "',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '',
                            '')");


    echo("
        <script>
            setTimeout(function (){
                window.location='logcliente.php?usuario=" . $_POST["usuario"] . "&password=" . $_POST["contrasena"] . "';
            },5000);
        </script>
        ");


    echo mysqli_error($conexion);
    mysqli_close($conexion);


}else{


    echo "ya hay un usuario con ese nombre, porfavor intente again";
    echo("
    <script>
    setTimeout(function (){
        window.location='../confirmar.php';
        var lala;
    },5000);
    </script>


    ");
}



?>

