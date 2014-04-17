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
    <link rel="stylesheet" href="css/movil.css" media="screen and (min-width: 1px) and (max-width:800px)" >
    <link rel="stylesheet" href="css/pcmac.css" media="screen and (min-width: 801px) and (max-width:4000px)" >

</head>
<body>

<!-- cross site scripting-->

<div id="contenedor">

    <header>
        <a href="index.php"> <h1>Tienda</h1></a>
        <h2>sub titulo tienda</h2>
    </header>

    <section>

        <div id="contienecarrito">

        <div id="carrito" style="background: rgb(200,200,200);color: #000000">Carrito </div>
        <a href="destruir.php"><button>Vaciar carrito</button></a>
        <a href="confirmar.php"><button>Confirmar compra</button></a>

        </div>
<?php
