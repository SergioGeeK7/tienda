<?php

// echo $_GET["p"] // @p idProducto

session_start();


if(isset($_GET["p"])){

    $_SESSION["producto"][$_SESSION["contador"]] = $_GET["p"];
    $_SESSION["contador"]++;
}

$suma = 0;
$conexion = mysqli_connect("localhost","root","","tiendaonline");





echo "<table border='1'>";
for($i=0;$i<$_SESSION["contador"];$i++){
    //echo "Producto: ".$_SESSION["producto"][$i]."<br>";

    $peticion = mysqli_query($conexion,"SELECT * FROM productos WHERE id= ".$_SESSION["producto"][$i]." ");

    while($fila = mysqli_fetch_array($peticion)){
        echo "<tr> <td>".$fila["nombre"]."</td> <td> ".$fila["precio"]."</td> </tr>";
        $suma += $fila["precio"];
    }

}
echo "<tr> <td> Su total es : </td> <td> ".number_format($suma,2).".00</td> </tr>";


echo "</table>";


mysqli_close($conexion);