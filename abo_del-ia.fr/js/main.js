/*** Welcome ***/

$(window).load(function(){
    $('.fade').addClass('active');
    $('.effect').each(function(){
        $(this).addClass('active');
    })
})


/*** Caroussel home ***/

$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
            $('.fadein :first-child').fadeOut()
                .next('img').fadeIn()
                .end().appendTo('.fadein');},
        3000);
});

/*** divers ***/

$(document).ready(function(){

    $('#explorer').click(function(){
        $('html, body').animate({
            scrollTop: $("#anchor").offset().top
        }, 1000);
    });

    $('.first').bind('mousewheel', function(e){
        return false;
    });

    /*** Test ***/

    $('#test-begin').click(function(){
        $('#test-ia').css('background','url(media/bg/1.jpg) center no-repeat').css('background-size','cover');
        $('#test-ia main').addClass('bye-bye');
        $('#test-ia #quests').removeClass('hello').addClass('present');
    });

    $('#but-rech').click(function(){
        $('#test-ia').css('background','url(media/bg/2.jpg) center no-repeat').css('background-size','cover');
        $('#quest2').removeClass('hello');
        $('#select-rech').attr('disabled','disabled');
        $(this).addClass('hold');
    });

    $('#but-lieu').click(function(){
        $('#test-ia').css('background','url(media/bg/3.jpg) center no-repeat').css('background-size','cover');
        $('#quest3').removeClass('hello');
        $('#text-lieu').attr('disabled','disabled');
        $(this).addClass('hold');
    });

    $('#but-time').click(function(){
        $('#test-ia').css('background','url(media/bg/4.jpg) center no-repeat').css('background-size','cover');
        $('#loader').fadeIn(500).delay(2000).fadeOut(500);
        $('#test-ia #quests').delay(3000).addClass('bye-bye');
        $('#test-ia #rep').removeClass('hello').addClass('present');
        $('#test-ia #rep .p1').delay(4000).fadeIn(500).delay(2000).fadeOut();
        $('#test-ia #rep .p2').delay(7000).fadeIn(500).delay(3000).fadeOut();
    });

});













