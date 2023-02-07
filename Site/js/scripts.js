$(function(){
     $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        if(listaMenu.is(':hidden') == true){
        var icone = $('.botao-menu-mobile').find('i'); 
        icone.removeClass('fa-solid fa-bars');
        icone.addClass('fa-sharp fa-solid fa-xmark');
        listaMenu.slideToggle();
     }
        else{
        var icone = $('.botao-menu-mobile').find('i'); 
        icone.removeClass('fa-sharp fa-solid fa-xmark');
        icone.addClass('fa-solid fa-bars ');
        listaMenu.slideToggle();
        }
    })
    }) 