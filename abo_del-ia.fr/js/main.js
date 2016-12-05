/*** Welcome ***/

$(window).load(function(){
    $('.fade').addClass('active');
    $('.effect').each(function(){
        $(this).addClass('active');
    })
    $('#test-ia main #hi')[0].play();
    $('#loader').fadeOut(500);
});


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
        }, 500);
    });

    $('.first').bind('mousewheel', function(e){
        return false;
    });


    /****************************************/
    /***************** Test *****************/
    /****************************************/

    $('#test-ia a span, #test-ia #quests input[type="button"]').click(function () {
        $('audio#click')[0].play();
    });

    $('#test-begin').click(function(){
        $('#test-ia').css('background','url(media/bg/test-ia/2.jpg) center no-repeat').css('background-size','cover');
        $('main').addClass('bye-bye');
        $('#quests').removeClass('hello').addClass('present');
        $('#loader').fadeIn(500).delay(1000).fadeOut(500);
    });

    $( "#slct-1" ).change(function() {
        $("#slct-1 option[value='1']:selected").each(function () {
            $('.but-rep1').click(function(){
                $('#test-ia').css('background','url(media/bg/test-ia/3.jpg) center no-repeat').css('background-size','cover');
                $('#q-1-2, #q-1').removeClass('hello');
                $('#q-2, #q-3').remove();
                $("#slct-1").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $("#slct-1 option[value='2']:selected").each(function () {
            $('.but-rep1').click(function(){
                $('#test-ia').css('background','url(media/bg/test-ia/3.jpg) center no-repeat').css('background-size','cover');
                $('#q-2-2,#q-2').removeClass('hello');
                $('#q-1, #q-3').remove();
                $("#slct-1").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $("#slct-1 option[value='3']:selected").each(function () {
            $('.but-rep1').click(function(){
                $('#test-ia').css('background','url(media/bg/test-ia/3.jpg) center no-repeat').css('background-size','cover');
                $('#q-3-2, #q-3').removeClass('hello');
                $('#q-1, #q-2').remove();
                $("#slct-1").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
    });

    $( ".q-2 select" ).change(function() {
        $(".q-2 select option[value='1']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/test-ia/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-2, .props-3, .props-4, .props-5').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $(".q-2 select option[value='2']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/test-ia/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-1, .props-3, .props-4, .props-5').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $(".q-2 select option[value='3']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/test-ia/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-1, .props-2, .props-4, .props-5').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $(".q-2 select option[value='4']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/test-ia/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-1, .props-2, .props-3, .props-5').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $(".q-2 select option[value='5']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/test-ia/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-1, .props-2, .props-3, .props-4').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
    });


    $('.but-rep3').click(function() {
        if ($('.q-3 select').val() == 'null' || $('.q-3 input').val() == '' )  {
            $('#attention').fadeIn(500);
        } else {
            $('#test-ia').delay(2000).delay(1500).css('background','url(media/bg/test-ia/5.jpg) center no-repeat').css('background-size','cover');
            $('#test-ia .quest, #test-ia .intro-qn ').delay(1000).addClass('bye-bye').delay(1000).fadeOut();
            $('#loader').fadeIn(500).delay(3000).fadeOut(500);
            $('.reps').delay(3000).fadeIn(500);
        }
    });

    $('.props li').click(function() {
        $('#test-ia').css('background','url(media/bg/test-ia/2.jpg) center no-repeat').css('background-size','cover');
        $('#quests').addClass('bye-bye');
        $('#message').removeClass('hello').addClass('present');
        $('#loader').fadeIn(500).delay(1000).fadeOut(500);
        $('.p1').delay(2000).fadeIn(500).delay(2000).fadeOut(500);
        $('.p2').delay(5000).fadeIn(500).delay(4000).fadeOut(500);
        $('.p3').delay(10000).fadeIn(500).delay(5000).fadeOut(500);
    });




});













