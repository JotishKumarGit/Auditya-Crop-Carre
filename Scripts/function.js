 

$("#back-top").hide();	
$(function () {$(window).scroll(function () {if ($(this).scrollTop() > 100) {$('#back-top').fadeIn();} else {$('#back-top').fadeOut();}});
$('#back-top a').click(function () {$('body,html').animate({scrollTop: 0}, 800);return false;});
});

 

 
$('.mob_link_dd').click(function() {
    $(this).next().fadeToggle('fast');
    $(this).toggleClass('mob_link_dd_act');
    return false;
})



 $('#myCarousel').carousel({
    interval: 10000,
 pause: false,

}); 
 
 
$(document).ready(function () {
        $('#map_canvas1').addClass('scrolloff');
        $('#canvas1').on('click', function () {
            $('#map_canvas1').removeClass('scrolloff');
        });

        $("#map_canvas1").mouseleave(function () {
            $('#map_canvas1').addClass('scrolloff'); 
        });
    });
	




 $(document).ready(function(){
    $("#myUl").endlessRiver();
});




 

$(document).ready(function(e){
wow = new WOW({animateClass: 'animated', mobile: false, offset: 0 });
wow.init();

$.srSmoothscroll();});

