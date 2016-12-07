$(window).load(function(){
    
//    Page d'accueil
    $('.fade').addClass('active');
    $('.effect').each(function(){
        $(this).addClass('active');
    })
})

/**** Caroussel ****/
$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
            $('.fadein :first-child').fadeOut()
                .next('img').fadeIn()
                .end().appendTo('.fadein');},
        3000);
});

/**/

$(document).ready(function(){

//    EVENEMENT SUR PAGE ACCUEIL
    $('.cta').click(function(){
        $('html, body').animate({
            scrollTop: $("#anchor").offset().top}, 1000);
    });
    
    $("#fleche").click(function(){
        $('html, body').animate({
            scrollTop: $("#anchor").offset().top},1000);
    });

    $('.first').bind('mousewheel', function(e){
        return false;
    });

    
    
//    EVENEMENT SUR CONTACT
    $("#contact").click(function(){
        $("#modal-contact").fadeIn(300);
    });
    
    $("#modal-quit").click(function(){
        $("#modal-contact").fadeOut(300); 
    });
});





