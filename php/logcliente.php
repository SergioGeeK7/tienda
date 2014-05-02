
<?php

include "header.inc";
include "config.inc.php";

// USAR LA VARIABLE REQUEST

$contador=0;
$conexion = mysqli_connect($servidor,$usuario,$contrasena,$db);
$peticion = mysqli_query($conexion,"SELECT * FROM clientes
WHERE usuario='".$_REQUEST["usuario"]."' AND contrasena='".$_REQUEST["password"]."' ");

while($fila = mysqli_fetch_array($peticion)){ // guardo el id del usuario

    $contador++;
    $_SESSION["usuario"] = $fila["id"];
}

if($contador>0){ // si si logeo "encontro el id"

    $peticion = mysqli_query($conexion,"INSERT INTO pedidos VALUES(NULL,".$_SESSION["usuario"] .",".date("U").",'0') "); // graba el pedido
    // aberiguamos el id del ultimo pedido acabado de realizar el la consulta anterior
    $peticion2 = mysqli_query($conexion,"SELECT * FROM pedidos WHERE idcliente = ".$_SESSION["usuario"]." ORDER BY fecha DESC LIMIT 1");

    while($fila = mysqli_fetch_array($peticion2)){

        $contador++;
        $_SESSION["idpedido"] = $fila["id"];
    }

    echo $_SESSION["idpedido"]; // id consulta anterior

    for($i=0;$i<$_SESSION["contador"];$i++){ // $_SESSION["contador"] numero de productos comprados
        //echo "Producto: ".$_SESSION["producto"][$i]."<br>";

        $peticion = mysqli_query($conexion,"INSERT INTO lineaspedido VALUES (null,".$_SESSION["idpedido"].",".$_SESSION["producto"][$i].",
                                 ".$_SESSION["cantidad"][$i].") ");

        $peticion = mysqli_query($conexion,"SELECT * FROM productos WHERE id=".$_SESSION["producto"][$i]);


        while($fila = mysqli_fetch_array($peticion)){
             $existencias = $fila["existencias"];
             mysqli_query($conexion,"UPDATE productos SET existencias =".($existencias-1)." WHERE id=".$_SESSION["producto"][$i]);
        }


    }


    echo "Tu pedido se ha realizado sactisfactoriamente, redirigiendo a la pagina principal en 5 segundos...";
    session_destroy();
    echo("
    <script>
    setTimeout(function (){
        window.location='../index.php';
    },5000);
    </script>


    ");





}else{

    echo "el usuario no existe, redirigiendo a la pagina de login en 5 segundos...";
    echo("
    <script>
    setTimeout(function (){
        window.location='../confirmar.php';
        var lala;
    },5000);
    </script>


    ");



}

mysqli_close($conexion);
include "footer.inc";
?>