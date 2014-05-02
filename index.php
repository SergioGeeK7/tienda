<?php include "php/header.inc"?>

<?php include "php/config.inc.php"?>

    <section>

<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$db);
$peticion = mysqli_query($conexion,"SELECT * FROM productos WHERE existencias>0");

while($fila = mysqli_fetch_array($peticion)){
    echo "<article>";

    $peticion2 = mysqli_query($conexion,"SELECT * FROM imagenesproductos WHERE idproducto= ".$fila["id"]." LIMIT 1");

    while($fila2 = mysqli_fetch_array($peticion2)){
        echo "<img src='photo/".$fila2["imagen"]."' width='100px'/>";
    }

    echo "<h3>  <a href='producto.php?id=".$fila["id"]."'> ".$fila["nombre"]."</h3> </a>";
    echo "<p>".$fila["descripcion"]." </p>";
    echo "<p> Precio $".$fila["precio"]." </p>";
    echo("  <input type='number' value='1' min='1' max='10' id='num".$fila["id"]."'/>  "); // en el maximo podemos especificar y validar de una vez cuanto es el maximo en inventario

    echo "  <a href='producto.php?id=".$fila["id"]."'> <button>Mas informacion</button></a> ";
    echo "<button class='botoncompra' value='".$fila["id"]."'>Comprar ahora</button> ";
    echo "</article>";
}

mysqli_close($conexion);

?>

    </section>


<?php include "php/footer.inc";?>