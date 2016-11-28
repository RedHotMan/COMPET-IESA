$(window).load(function(){
    $('.fade').addClass('active');
    $('.effect').each(function(){
        $(this).addClass('active');
    })
})

$(document).ready(function(){

    $('.cta').click(function(){
        $('html, body').animate({
            scrollTop: $("#anchor").offset().top
        }, 1000);
    });

    $('#question1').click(function(){
        $(this).addClass('hvr-push');
    });

    $('.first').bind('mousewheel', function(e){
        return false;
    });

});

