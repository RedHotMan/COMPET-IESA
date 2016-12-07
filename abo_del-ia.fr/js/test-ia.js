
/****************************************/
/***************** Test *****************/
/****************************************/

/******* Welcome *******/
$(window).load(function(){

    $('.fade').addClass('active');
    $('.effect').each(function(){
        $(this).addClass('active');
    });

    $('#loader').fadeOut(500);


    /******* Sounds *******/
    if (window.matchMedia("(min-width: 960px)").matches) {
        $('#hi')[0].play();
        $('#d-1')[0].delay(4000).play();
        $('#test-ia a span, #test-ia #quests input[type="button"], .props li').click(function () {
            $('audio#click')[0].play();
        });
    } else {
        $('audio').remove();
    }

});



$(document).ready(function(){

    $('#test-begin').click(function(){
        $('#test-ia').css('background','url(media/bg/2.jpg) center no-repeat').css('background-size','cover');
        $('main').addClass('bye-bye');
        $('#quests').removeClass('hello').addClass('present');
        $('#loader').fadeIn(500).delay(1000).fadeOut(500);
    });

    /******* Question 1 *******/
    $( "#slct-1" ).change(function() {
        $("#slct-1 option[value='1']:selected").each(function () {
            $('.but-rep1').click(function(){
                $('#test-ia').css('background','url(media/bg/3.jpg) center no-repeat').css('background-size','cover');
                $('#q-1-2, #q-1').removeClass('hello');
                $('#q-2, #q-3').remove();
                $("#slct-1").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $("#slct-1 option[value='2']:selected").each(function () {
            $('.but-rep1').click(function(){
                $('#test-ia').css('background','url(media/bg/3.jpg) center no-repeat').css('background-size','cover');
                $('#q-2-2,#q-2').removeClass('hello');
                $('#q-1, #q-3').remove();
                $("#slct-1").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $("#slct-1 option[value='3']:selected").each(function () {
            $('.but-rep1').click(function(){
                $('#test-ia').css('background','url(media/bg/3.jpg) center no-repeat').css('background-size','cover');
                $('#q-3-2, #q-3').removeClass('hello');
                $('#q-1, #q-2').remove();
                $("#slct-1").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
    });

    /******* Question 2 *******/
    $( ".q-2 select" ).change(function() {
        $(".q-2 select option[value='1']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-2, .props-3, .props-4, .props-5').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $(".q-2 select option[value='2']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-1, .props-3, .props-4, .props-5').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $(".q-2 select option[value='3']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-1, .props-2, .props-4, .props-5').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $(".q-2 select option[value='4']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-1, .props-2, .props-3, .props-5').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
        $(".q-2 select option[value='5']:selected").each(function () {
            $('.but-rep2').click(function(){
                $('#test-ia').css('background','url(media/bg/4.jpg) center no-repeat').css('background-size','cover');
                $('.props-1, .props-2, .props-3, .props-4').remove();
                $('.q-3').removeClass('hello');
                $(".q-2 select").attr('disabled','disabled');
                $('#loader').fadeIn(500).delay(500).fadeOut(500);
            });
        });
    });

    /******* Question 3 *******/
    $( ".q-3 select" ).change(function() {
        $(".q-3 select option[value='null']:selected").each(function () {
            $('.but-rep3').click(function() {
                $('#attention').delay(3000).fadeIn(500);
            });
        });
        $(".q-3 select option[value='1']:selected").each(function () {
            $('.but-rep3').click(function() {
                $('#test-ia').delay(2000).delay(1500).css('background','url(media/bg/5.jpg) center no-repeat').css('background-size','cover');
                $('#test-ia .quest, #test-ia .intro-qn ').delay(1000).addClass('bye-bye').delay(1000).fadeOut();
                $('.l2, .l3, .l4, .l5').remove();
                $('#loader').fadeIn(500).delay(3000).fadeOut(500);
                $('.reps').delay(3000).fadeIn(500);
            });
        });
        $(".q-3 select option[value='2']:selected").each(function () {
            $('.but-rep3').click(function() {
                $('#test-ia').delay(2000).delay(1500).css('background','url(media/bg/5.jpg) center no-repeat').css('background-size','cover');
                $('#test-ia .quest, #test-ia .intro-qn ').delay(1000).addClass('bye-bye').delay(1000).fadeOut();
                $('.l1, .l3, .l4, .l5').remove();
                $('#loader').fadeIn(500).delay(3000).fadeOut(500);
                $('.reps').delay(3000).fadeIn(500);
            });
        });
        $(".q-3 select option[value='3']:selected").each(function () {
            $('.but-rep3').click(function() {
                $('#test-ia').delay(2000).delay(1500).css('background','url(media/bg/5.jpg) center no-repeat').css('background-size','cover');
                $('#test-ia .quest, #test-ia .intro-qn ').delay(1000).addClass('bye-bye').delay(1000).fadeOut();
                $('.l1, .l2, .l4, .l5').remove();
                $('#loader').fadeIn(500).delay(3000).fadeOut(500);
                $('.reps').delay(3000).fadeIn(500);
            });
        });
        $(".q-3 select option[value='4']:selected").each(function () {
            $('.but-rep3').click(function() {
                $('#test-ia').delay(2000).delay(1500).css('background','url(media/bg/5.jpg) center no-repeat').css('background-size','cover');
                $('#test-ia .quest, #test-ia .intro-qn ').delay(1000).addClass('bye-bye').delay(1000).fadeOut();
                $('.l1, .l2, .l3, .l5').remove();
                $('#loader').fadeIn(500).delay(3000).fadeOut(500);
                $('.reps').delay(3000).fadeIn(500);
            });
        });
        $(".q-3 select option[value='5']:selected").each(function () {
            $('.but-rep3').click(function() {
                $('#test-ia').delay(2000).delay(1500).css('background','url(media/bg/5.jpg) center no-repeat').css('background-size','cover');
                $('#test-ia .quest, #test-ia .intro-qn ').delay(1000).addClass('bye-bye').delay(1000).fadeOut();
                $('.l1, .l2, .l3, .l4').remove();
                $('#loader').fadeIn(500).delay(3000).fadeOut(500);
                $('.reps').delay(3000).fadeIn(500);
            });
        });
    });

    /******* Reponsess Chargement *******/
    $('.but-rep3.inbut').click(function() {
        if ($('#text-loation').val() == '') {
            alert('Remplissez le champ texte.');
        } else {
            $('#test-ia').delay(2000).delay(1500).css('background','url(media/bg/5.jpg) center no-repeat').css('background-size','cover');
            $('#test-ia .quest, #test-ia .intro-qn ').delay(2000).addClass('bye-bye');
            $('#loader').fadeIn(500).delay(3000).fadeOut(500);
            $('.reps').delay(3000).fadeIn(500);
        }
    });

    /******* Montrer message *******/
    $('.props li').click(function() {
        $('#test-ia').css('background','url(media/bg/2.jpg) center no-repeat').css('background-size','cover');
        $('#quests').addClass('bye-bye');
        $('#message').removeClass('hello').addClass('present');
        $('#loader').fadeIn(500).delay(1000).fadeOut(500);
        $('.p1').delay(2000).fadeIn(500).delay(2000).fadeOut(500);
        $('#test-ia').delay(4000).css('background','url(media/bg/6.jpg) center no-repeat').css('background-size','cover');
        $('.p2').delay(5000).fadeIn(500).delay(4000).fadeOut(500);
        $('.p3').delay(10000).fadeIn(500).delay(5000).fadeOut(500);
        $('.p4').delay(16000).fadeIn(500);
    });

    /******* Modal vidéo *******/
    $('#if-cta').click(function(ev) {
        $('#modal-video').fadeIn(500);
        $("#video")[0].src += "?rel=0&autoplay=1";
        ev.preventDefault();
    });

    /******* End *******/
    $('#modal-video span').click(function() {
        $('#modal-video').fadeOut(500).delay(1000).remove();
        $('.p4').fadeOut(500);
        $('.p5').delay(1000).fadeIn(500).delay(5000).fadeOut(500);
        $('#message').delay(8000).addClass('bye-bye');
        $('#end').delay(8000).removeClass('hello').addClass('present');
    });


});













/**
 * Created by User on 06/12/2016.
 */
