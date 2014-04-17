
<?php include "php/header.inc"?>

<?php include "php/config.inc.php"?>



        <?php

        $conexion = mysqli_connect($servidor,$usuario,$contrasena,$db);
        $peticion = mysqli_query($conexion,"SELECT * FROM productos WHERE ID=".$_GET["id"]."");

        while($fila = mysqli_fetch_array($peticion)){
            echo "<article>";
            echo "<h3>  <a href='producto.php?id=".$fila["id"]."'> ".$fila["nombre"]."</h3> </a>";
            echo "<p>".$fila["descripcion"]." </p>";
            echo "<p> Precio $".$fila["precio"]." </p>";

            $peticion2 = mysqli_query($conexion,"SELECT * FROM imagenesproductos WHERE idproducto= ".$fila["id"]." ");

            while($fila2 = mysqli_fetch_array($peticion2)){
                echo "<img src='photo/".$fila2["imagen"]."' width='100px'/>";
            }

            echo "  <a href='producto.php?id=".$fila["id"]."'> <button>Mas informacion</button></a> ";
            echo "<button>Comprar ahora</button> ";
            echo "</article>";
        }

        mysqli_close($conexion);

        ?>

    </section>


<?php include "php/footer.inc"; ?>