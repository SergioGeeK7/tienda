<?php session_start();
if(!isset($_SESSION["contador"])){
    $_SESSION["contador"]=0;
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estiloadmin.css"  >
</head>
<body>

<!-- cross site scripting-->

<div id="contenedor">

    <header>
        <a href="index.php"> <h1>Panel de control</h1></a>
        <h2>Tienda Online</h2>

        <nav>
            <a href="pedidos.php" class="botonmenu">Gestionar pedidos </a>
            <a href="clientes.php" class="botonmenu">Gestionar clientes</a>
            <a href="productos.php" class="botonmenu">Gestionar productos</a>
            <a href="estadisticas.php" class="botonmenu">Obtener estadisticas</a>
        </nav>
        <div style="clear:both;"></div> <!--PARA ASEGURAR QUE SE DETENGA LA FLOTACION-->

    </header>

    <section>



















