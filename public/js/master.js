$(document).ready(function() 
{

    $('.navbar a.dropdown-toggle').on('click', function(e) 
    {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if(!$parent.parent().hasClass('nav')) 
        {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth()});
        }
        $('.nav li.open').not($(this).parents("li")).removeClass("open");
        return false;
    });
    
    $('#causa').change(function(){
    var cambio = $(this).val();
    if (cambio == '') 
    {
        $('#envio').attr("disabled",'');

    }else{
        $('#envio').removeAttr("disabled");
    }

});

    modal_editar();
    modal_eliminar();
    ventana();
});


function modal_editar()
{
    $('.editar').click(function(){
        var link= $(this).attr('data-link');

        $.ajax({
            
            url:  link,
            type: 'get',
            success:  function (dregistro) {
                $("#peso").val(dregistro.peso);
                $("#descripcion").val(dregistro.descripcion);
                $("#pesoa").val(dregistro.pesoa);
                $("#tipo").text(dregistro.tipo);
                $(".tipo").val(dregistro.id_tipo);
                $("#numero").val(dregistro.numero);     
                $("#rutal").attr('action',dregistro.linkl);     
            }
        });
    });
}


function modal_eliminar()
{
    $('.ruta').click( function(){
        var action = $(this).attr('data-action');
        $('#fenvio').attr('action',action);
        
        var row = $(this).attr('data-row');
        $('#fenvio').attr('data-row',row);
    });

    $('#envio').click(function(e){
        e.preventDefault();
        var form =$('#fenvio');
        var link =$('#fenvio').attr('action');

        $.post(link,form.serialize(),function(resul){
            var elim =form.attr('data-row');
            $(elim).fadeOut();
            $('#cantidad').html(result.cantidad);
        })
    });

}

function ventana()
{   
        var $hventana= $(window).height()-110;
        var $hprincipal= $(".pcontent").height()+30;
           
        if( $hprincipal > $hventana )
        {
            $(".principal").css({"height":"auto"});
        }else{
            $(".principal").css({"height": $hventana});
        }

    $(window).resize(function(){    
        var $hventana= $(window).height()-110;
        var $hprincipal= $(".pcontent").height()+30;
           
        if( $hprincipal > $hventana )
        {
            $(".principal").css({"height":"auto"});
        }else{
           
            $(".principal").css({"height": $hventana});
        }
    });
}