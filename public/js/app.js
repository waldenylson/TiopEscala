$(document).ready(function()
{
    $('.fancybox').fancybox(
    {
        'overlayShow'     : true,
        'autoScale'       : true,
        'autoDimensions'  : false,
        'modal'           : true,
        'type'            : 'iframe',
        'autoSize'        : false,
        'width'           : '90%',
        'showCloseButton' : true,
        afterShow         : function()
        {
            $('.fancybox-skin').append('<a title="Fechar" class="fancybox-item fancybox-close" id="teste" onclick="$.fancybox.close();"></a>');
        }
    });

    //swal({   title: "Error!",   text: "Here's my error message!",   type: "error",   confirmButtonText: "Cool" });

    $("#btn-cancelar").click(function()
    {
        parent.$.fancybox.close();
    });
});
