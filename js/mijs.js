$(document).on("ready",function (){
    $("#carrito").load("php/poncarrito.php");

    $(".botoncompra").on("click",function(){

        //$("#carrito").append($(this).val());
        $("#carrito").load("php/poncarrito.php?p="+$(this).val());

    });


});
