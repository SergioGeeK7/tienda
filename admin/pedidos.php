

<table>

<?php
include "header.inc";
include "../php/config.inc.php";


$conexion = mysqli_connect($servidor,$usuario,$contrasena,$db);
$peticion = mysqli_query($conexion,"SELECT pedidos.id AS idpedido,fecha,nombre,apellido,estado FROM pedidos LEFT JOIN clientes ON pedidos.idcliente = clientes.id ORDER BY estado,fecha ASC");

while($fila = mysqli_fetch_array($peticion)){




    switch($fila["estado"]){

        case 1:
            $estado = "servido";
            echo "<tr style='background:rgb(200,255,200)'>";
        break;
        case 2:
            $estado = "anulado";
            echo "<tr style='background:rgb(255,255,200)'>";
        break;
        default:
            $estado = "no esta servido";
            echo "<tr style='background:rgb(255,200,200)'>";
    }






    echo ("  <td>".$fila["nombre"]." ".$fila["apellido"]."</td>
            <td>".date("M d Y H:i:s",$fila["fecha"])."</td>
            <td>".$estado."</td>
            <td>  <a href='gestionpedido.php?id=".$fila["idpedido"]."'>  <button> Gestionar </button> </a> </td>
            <td>  <a href='../php/pedidoservido.php?id=".$fila["idpedido"]."'>  <button> Pedido servido </button> </a> </td>
             <td>  <a href='../php/cancelarpedido.php?id=".$fila["idpedido"]."'>  <button> Cancelar Pedido</button> </a> </td>
            </tr>");


}

mysqli_close($conexion);


echo "</table>";
include "footer.inc";