$(document).on("ready",function (){
    $("#carrito").load("php/poncarrito.php");

    $(".botoncompra").on("click",function(){

        //$("#carrito").append($(this).val());


        var idnumero = $(this).val(); // saco el id del producto
        var cantidad = $("#num"+idnumero).val(); // saco el id del typenumber para saber que cantidad quiere de ese producto
        //alert(cantidad);
        // pasamos al carrito el producto para que lo calcule en todas las paginas "include"
        $("#carrito").load("php/poncarrito.php?p="+$(this).val()+"&cantidad="+cantidad);



    });


});
