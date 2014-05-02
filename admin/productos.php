

<table>
    <style>input[type='text']{width: 100px;}</style>
<?php
include "header.inc";
include "../php/config.inc.php";


$conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
$peticion = mysqli_query($conexion, "SELECT * FROM productos");

while ($fila = mysqli_fetch_array($peticion)) {


    echo("
    <form action='actualizarproducto.php' method='post'>
            <td> <input type='text' name='nombre' value='". $fila["nombre"]."'/></td>
            <td> <input type='text' name='precio' value='". $fila["precio"]."'/></td>
            <td> <input type='text' name='peso' value='". $fila["peso"]."'/></td>
            <td> <input type='text' name='longitud' value='". $fila["longitud"]."'/>x
             <input type='text' name='anchura' value='". $fila["anchura"]."'/>x
             <input type='text' name='altura' value='". $fila["altura"]."'/></td>
            <td> <input type='text' name='existencias' value='". $fila["existencias"]."'/></td>
            <td> <input type='text' name='activado' value='". $fila["activado"]."'/></td>
                 <input type='hidden' name='id' value='".$fila["id"]."'/>
            <td>  <input type='submit' value='Actualizar'>  </td>
    </form>
         <td>  <a href='eliminarproducto.php?id=".$fila["id"]."'> <button>Eliminar</button> </a>  </td>
          </tr>

    ");


}

mysqli_close($conexion);

?>
    <!-- enctype="multipart/form-data" no solo resive texto sino informacion tipo archivo de imagen  -->

    <tr>
        <form action="nuevoproducto.php" method="POST" enctype="multipart/form-data">
            <td><input type="text" name="nombre"/></td>
            <td><input type="text" name="precio"/></td>
            <td><input type="text" name="peso"/></td>
            <td><input type="text" name="longitud"/> <input type="text" name="anchura"/> <input type="text" name="altura"/> </td>
            <td><input type="text" name="existencias"/></td>
            <td><input type="text" name="activado"/></td>
            <td><input type="file" name="imagen"/></td>
            <td><input type="submit"/></td>
        </form>
    </tr>




</table>


<?php include "footer.inc"; ?>












