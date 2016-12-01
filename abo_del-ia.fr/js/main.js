$(window).load(function(){
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

    $('.cta-intro').click(function(){
        $('html, body').animate({
            scrollTop: $("#anchor").offset().top}, 1000);
    });

    $('.first').bind('mousewheel', function(e){
        return false;
    });

});





