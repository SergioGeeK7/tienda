
<?php include "php/header.inc"?>
<br/>
Ya eres usuario ? <br/>

<form action="php/logcliente.php" method="post">
<input type="text" name="usuario" placeholder="usuario"/>
<input type="password" name="password" placeholder="contrasena"/>
<input type="submit"/>
</form>
Eres nuevo usuario ? <br/>

<?php include "php/footer.inc"?>