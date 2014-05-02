<?php

// echo $_GET["p"] // @p idProducto

session_start();


if(isset($_GET["p"])){

    $_SESSION["producto"][$_SESSION["contador"]] = $_GET["p"]; // guardo los productos en un array
    $_SESSION["cantidad"][$_SESSION["contador"]] = $_GET["cantidad"]; // guardo las cantidades en otro array
    $_SESSION["contador"]++;
}

$suma = 0;
$conexion = mysqli_connect("localhost","root","","tiendaonline");





echo "<table border='0'>";
for($i=0;$i<$_SESSION["contador"];$i++){
    //echo "Producto: ".$_SESSION["producto"][$i]."<br>";

    $peticion = mysqli_query($conexion,"SELECT * FROM productos WHERE id= ".$_SESSION["producto"][$i]." "); // pinto los productos del array de productos

    while($fila = mysqli_fetch_array($peticion)){

        echo ("<tr> <td>".$_SESSION["cantidad"][$i]." </td> <td>".$fila["nombre"]."</td> <td> ".
            number_format($_SESSION["cantidad"][$i]*$fila["precio"],2)."</td> </tr>");

        $suma += $_SESSION["cantidad"][$i]*$fila["precio"]; // sumo la cantidad de los productos actuales
    }

}
echo "<tr> <td></td> <td> Su total es : </td> <td> ".number_format($suma,2).".00</td> </tr>";


echo "</table>";


mysqli_close($conexion);