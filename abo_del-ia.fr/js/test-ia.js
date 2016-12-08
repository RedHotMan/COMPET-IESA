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
        $('#test-ia a span, #test-ia #quests input[type="button"], .props li').on('click',function () {
            $('audio#click')[0].play();
        });
    } else {
        $('audio').remove();
    }

});


$(document).ready(function(){

    $('#test-begin').on('click',function(){
        $('#test-ia').css('background','url(media/bg/2.jpg) center no-repeat').css('background-size','cover');
        $('main').addClass('bye-bye');
        $('#quests').removeClass('hello').addClass('present');
        $('#loader').fadeIn(500).delay(1000).fadeOut(500);
    });

    /******* Question 1 *******/
    $('.but-rep1').on('click',function(){
        $('#test-ia').css('background','url(media/bg/3.jpg) center no-repeat').css('background-size','cover');
        $("#slct-1").attr('disabled','disabled');
        $('')
        if($("#slct-1").val() == 1){
            $('#q-1-2, #q-1').removeClass('hello');
            $('#q-2, #q-3').remove();
        }
        if($("#slct-1").val() == 2){
            $('#q-2-2, #q-2').removeClass('hello');
            $('#q-1, #q-3').remove();
        }
        if($("#slct-1").val() == 3){
            $('#q-3-2, #q-3').removeClass('hello');
            $('#q-1, #q-2').remove();
        }

    });


    /******* Question 2 *******/
    $('.but-rep2').on('click',function(){
        $('#test-ia').css('background','url(media/bg/4.jpg) center no-repeat').css('background-size','cover');
        $(".q-2 select").attr('disabled','disabled');
        $('.q-3').removeClass('hello');
        if($(".q-2 select").val() == 1){
            $('.props-2, .props-3, .props-4, .props-5').remove();
        }
        if($(".q-2 select").val() == 2){
            $('.props-1, .props-3, .props-4, .props-5').remove();
        }
        if($(".q-2 select").val() == 3){
            $('.props-1, .props-2, .props-4, .props-5').remove();
        }
        if($(".q-2 select").val() == 4){
            $('.props-1, .props-2, .props-3, .props-5').remove();
        }
        if($(".q-2 select").val() == 5){
            $('.props-1, .props-2, .props-3, .props-4').remove();
        }

    });


    /******* Question 3 *******/

    $('.but-rep3.slct').on('click',function(){
        $('#test-ia').css('background','url(media/bg/4.jpg) center no-repeat').css('background-size','cover');
        $('#loader').fadeIn(500).delay(5000).fadeOut(500);
        $(".q-3 select").attr('disabled','disabled');
        $('#test-ia .quest, #test-ia .intro-qn ').delay(1000).addClass('bye-bye').delay(1000).fadeOut();
        $('.reps').delay(5000).fadeIn('hello');
        if($(".q-3 select").val() == 1){
            $('.l2, .l3, .l4, .l5').remove();
        }
        if($(".q-3 select").val() == 2){
            $('.l1, .l3, .l4, .l5').remove();
        }
        if($(".q-3 select").val() == 3){
            $('.l1, .l2, .l4, .l5').remove();
        }
        if($(".q-3 select").val() == 4){
            $('.l1, .l2, .l3, .l5').remove();
        }
        if($(".q-3 select").val() == 5){
            $('.l1, .l2, .l3, .l4').remove();
        }

    });


    /******* Reponsess Chargement *******/
    $('.but-rep3.inbut').on('click',function() {
        if ($('#text-loation').val() == '') {
            alert('Remplissez le champ texte.');
        } else {
            $('#test-ia').delay(2000).delay(1500).css('background','url(media/bg/5.jpg) center no-repeat').css('background-size','cover');
            $('#test-ia .quest, #test-ia .intro-qn ').addClass('bye-bye').removeClass('present').delay(2000).fadeOut();
            $('#loader').fadeIn(500).delay(3000).fadeOut(500);
            $('.reps').delay(3000).fadeIn(500);
        }
    });

    /******* Montrer message *******/
    $('.props li').on('click',function() {
        $('#test-ia').css('background','url(media/bg/2.jpg) center no-repeat').css('background-size','cover');
        $('#quests').addClass('bye-bye');
        $('#message').removeClass('hello').addClass('present');
        $('#loader').fadeIn(500).delay(1000).fadeOut(500);
        $('#test-ia').delay(4000).css('background','url(media/bg/6.jpg) center no-repeat').css('background-size','cover');
        $('.p1').delay(2000).fadeIn(500).delay(4000).fadeOut(500);
        $('.p2').delay(7000).fadeIn(500).delay(5000).fadeOut(500);
        $('.p3').delay(13000).fadeIn(500).delay(5000).fadeOut(500);
        $('.p4').delay(19000).fadeIn(500).delay(5000).fadeOut(500);
        $('.p5').delay(25000).fadeIn(500).delay(3000).fadeOut(500);
        $('.p6').delay(29000).fadeIn(500);
    });

    /******* Modal vidéo *******/
    $('.if-cta').on('click',function(ev) {
        $('#modal-video').fadeIn(500);
        $("#video")[0].src += "?rel=0&autoplay=1";
        ev.preventDefault();
        $('.p3').fadeOut(500);
    });

    /******* End *******/
    $('.cross').on('click', function() {
        $('#modal-video').fadeOut(500);
        $("#video").attr('src','https://www.youtube.com/embed/TBl3kniA89Y');
        $('#end').removeClass('hello').delay(17000).addClass('present');
        $('#message').addClass('bye-bye').delay(17000);
    });

    $('.cross').on('click', function() {

    });

    //    EVENEMENT SUR CONTACT
    $("#shadow").on("mousewheel",function(e){
        e.preventDefault() && e.stopImmediatePropagation();
    });

    $(".contact").click(function(){
        $("#shadow").show();
        $("#modal-contact").fadeIn(300);
    });

    $("#shadow,#modal-quit").on("click",function(e){
        e.preventDefault() && e.stopImmediatePropagation();
        $("#shadow").hide();
        $("#modal-contact").fadeOut(300);
    });


});
