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

    
    /****************************************/
    /***************** Test *****************/
    /****************************************/

    $('#test-ia a span, #test-ia #quests input[type="button"]').click(function () {
        $('#test-ia audio#click')[0].play();
    });

    $('#test-begin').click(function(){
        $('#test-ia').css('background','url(media/bg/2.jpg) center no-repeat').css('background-size','cover');
        $('#test-ia main').addClass('bye-bye');
        $('#test-ia #quests').removeClass('hello').addClass('present');
        $('#loader').fadeIn(500).delay(1000).fadeOut(500);
    });

    $( "select" ).change(function() {
        $("#slct-1 option[value='1']:selected").each(function () {
            $('.but-rep1').click(function(){
                $('#q-1-2, #q-1').removeClass('hello');
                $('#q-2, #q-3').remove();
                $("#slct-1").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $("#slct-1 option[value='2']:selected").each(function () {
            $('.but-rep1').click(function(){
                $('#q-2-2,#q-2').removeClass('hello');
                $('#q-1, #q-3').remove();
                $("#slct-1").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $("#slct-1 option[value='3']:selected").each(function () {
            $('.but-rep1').click(function(){
                $('#q-3-2, #q-3').removeClass('hello');
                $('#q-1, #q-2').remove();
                $("#slct-1").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
    });

    $('#attention').click(function() {
        $('#attention').fadeOut(500);
    });


    $('.but-rep2').click(function() {
        if ($('.q-2 select').val() == 'null') {
            $('#attention').fadeIn(500);
        } else {
            $('.q-3').removeClass('hello');
            $('#loader').fadeIn(500).delay(500).fadeOut(500);
        }
    });

    $('.but-rep3').click(function() {
        if ($('.q-3 select').val() == 'null' || $('.q-3 input').val() == '' )  {
            $('#attention').fadeIn(500);
        } else {
            $('#test-ia .quest, #test-ia .intro-qn ').fadeOut(1000);
            $('#loader').fadeIn(500).delay(5000).fadeOut(500);
            $('.reps').delay(5000).fadeIn(500);
        }
    });

});
