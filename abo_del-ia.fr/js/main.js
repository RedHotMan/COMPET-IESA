$(window).load(function(){
    
//    Page d'accueil
    $('.fade').addClass('active');
    $('.effect').each(function(){
        $(this).addClass('active');
    })
    
    
    if (window.matchMedia("(min-width: 960px)").matches) {
        $('#wlc')[0].play();
    } else {
        $('audio').remove();
    }

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
    $("#shadow").on("mousewheel",function(e){
        e.preventDefault() && e.stopImmediatePropagation();
    });
    
    $("#contact").click(function(){
        $("#shadow").show();
        $("#modal-contact").fadeIn(300);
    });
    
    $("#shadow,#modal-quit").on("click",function(e){
        e.preventDefault() && e.stopImmediatePropagation();
        $("#shadow").hide();
        $("#modal-contact").fadeOut(300); 
    });
    
});


function stopAnim(){
    $('html,body').bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(){
    $('html, body').stop();
  });
}





