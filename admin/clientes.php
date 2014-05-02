

<table border="1">
    <style>input[type='text']{width: 100px;}</style>
    <?php
    include "header.inc";
    include "../php/config.inc.php";
    $contador=0;

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $db);
    $peticion = mysqli_query($conexion, "SELECT * FROM clientes");

    while ($fila = mysqli_fetch_array($peticion)) {


        echo ("<tr");

        echo $contador==1 ? "class='sombreado'>":">";



        echo("
    <form action='actualizarcliente.php' method='post'>
            <td> <input type='text' name='nombre' value='". $fila["nombre"]."'/></td>
            <td> <input type='text' name='apellido' value='". $fila["apellido"]."'/></td>
            <td> <input type='text' name='email' value='". $fila["email"]."'/></td>
            <td> <input type='text' name='usuario' value='". $fila["usuario"]."'/></td>
            <td> <input type='text' name='contrasena' value='". $fila["contrasena"]."'/></td>
            <td> <input type='text' name='telefono' value='". $fila["telefono"]."'/></td>
            <td> <input type='text' name='movil' value='". $fila["movil"]."'/></td>
            <td> <input type='text' name='fax' value='". $fila["fax"]."'/></td>
            <td> <input type='text' name='direccioncalle' value='". $fila["direccioncalle"]."'/></td>
            <td> <input type='text' name='codigopostal' value='". $fila["codigopostal"]."'/></td>
            <td> <input type='text' name='poblacion' value='". $fila["poblacion"]."'/></td>
            <td> <input type='text' name='pais' value='". $fila["pais"]."'/></td>
            <td> <input type='text' name='dniinf' value='". $fila["dniinf"]."'/></td>

                   <input type='hidden' name='id' value='".$fila["id"]."'/>
            <td>  <input class='boton' type='submit' value='Actualizar'>  </td>
    </form>
             <td>  <a href='eliminarcliente.php?id=".$fila["id"]."'> <button>Eliminar</button> </a>  </td>      </tr>

    ");

        $contador = $contador == 0 ? 1:0;

    }

    mysqli_close($conexion);

    ?>

    <tr>
        <form action="nuevocliente.php" method="POST">
            <td> <input type='text' name='nombre' /></td>
            <td> <input type='text' name='apellido' /></td>
            <td> <input type='text' name='email' /></td>
            <td> <input type='text' name='usuario'/></td>
            <td> <input type='text' name='contrasena' /></td>
            <td> <input type='text' name='telefono'/></td>
            <td> <input type='text' name='movil' /></td>
            <td> <input type='text' name='fax' /></td>
            <td> <input type='text' name='direccioncalle' /></td>
            <td> <input type='text' name='codigopostal' /></td>
            <td> <input type='text' name='poblacion' /></td>
            <td> <input type='text' name='pais' /></td>
            <td> <input type='text' name='dniinf' /></td>
            <td><input class='boton' type="submit"/>   </td>
        </form>
    </tr>

// 01_02_08


</table>
<?php include "footer.inc"; ?>
