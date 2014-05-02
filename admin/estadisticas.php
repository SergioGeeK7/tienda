
    <style>input[type='text']{width: 100px;}</style>
    <?php

    include "../php/config.inc.php";
    include "header.inc";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
    $peticion = mysqli_query($conexion, "SELECT nombre,COUNT(idproducto) AS veces_comprado
                             FROM lineaspedido LEFT JOIN productos ON productos.id=lineaspedido.idproducto
                             GROUP BY idproducto
                             ORDER BY veces_comprado DESC LIMIT 1");

    while ($fila = mysqli_fetch_array($peticion)) {


        echo "El producto mas comprado es".$fila["nombre"];


    }

    echo "<br>";
    echo("LOS PRODUCTOS MAS COMPRADOS");
    echo "<table >";
    $peticion = mysqli_query($conexion, "SELECT nombre,COUNT(idproducto) AS veces_comprado
                             FROM lineaspedido LEFT JOIN productos ON productos.id=lineaspedido.idproducto
                             GROUP BY idproducto
                             ORDER BY veces_comprado DESC");

    while ($fila = mysqli_fetch_array($peticion)) {

        echo ("<tr> <td> ".$fila["nombre"]." </td> <td> ".$fila["veces_comprado"]." </td> </tr>");

    }

    echo("</table>");


    echo "<br>";
    echo("LOS CLIENTES MAS GUEVAS");
    echo "<table border='1'>";
    $peticion = mysqli_query($conexion, "SELECT clientes.nombre,SUM(unidades*precio) AS despilfarrado
                             FROM lineaspedido JOIN pedidos ON lineaspedido.idpedido = pedidos.id
                             JOIN productos ON lineaspedido.idproducto = productos.id JOIN clientes ON pedidos.idcliente = clientes.id
                             GROUP BY idcliente ORDER BY despilfarrado DESC LIMIT 10");

    while ($fila = mysqli_fetch_array($peticion)) {

        echo ("<tr> <td> ".$fila["nombre"]." </td> <td> ".$fila["despilfarrado"]." </td> </tr>");

    }

    echo("</table>");



    mysqli_close($conexion);
    include "footer.inc";
    ?>
