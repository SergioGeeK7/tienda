
<?php include "php/header.inc"?>
<br/>
Ya eres usuario ? <br/>

<form action="php/logcliente.php" method="post">
<input type="text" name="usuario" placeholder="usuario"/>
<input type="password" name="password" placeholder="contrasena"/>
<input type="submit"/>
</form>
Eres nuevo usuario ? <br/>
<form action="php/nuevocliente.php" method="post">
    <input type="text" name="usuario" placeholder="usuario"/>
    <input type="text" name="contrasena" placeholder="contrasena"/>
    <input type="text" name="nombre" placeholder="nombres"/>
    <input type="text" name="apellido" placeholder="apellidos"/>
    <input type="text" name="email" placeholder="email"/>
    <input type="submit"/>
</form>




<?php include "php/footer.inc"?>

