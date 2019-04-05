(function ($) {
// init Wow
wow = new WOW( {
   animateClass:'animated',
   offset:   100});
  wow.init();
    //Navigation scrolls
$('.navbar-nav li a').bind('click',function(event) {
    $('.navbar-navli').removeClass('active');
$(this).closest('li').addClass('active');
var $anchor = $(this);
    var nav = $($anchor.attr('href'));
   if (nav.lenght) {
  $('html, body').stop().animate({
       scrollTop: $
($anchor.attr('href')).offset().top
 }, 1500, 'easelnOutExpo');
          event.preventDefault();
    }
  });
// About section scroll
   $(".overlay-detail a").on('click',
function(event) {
    event.preventDefault();
var hash = this.hash;
    $('html,body').animate({
  scrollTop:$(hash).offset().top
 }, 900, function(){
 window.location.hash = hash;
 });
});
         //jQuery to ollapse the navbar on scroll
    $(window).scroll(function(){
  if ($(".navbar-default").offset().top >
 50){
     $(".navbar-fixed-
    top").addClass("top-nav-collapse");
     } else {
$(".navbar-fixed-
    top").removeClass("top-nav-collapse");
}
});
  // Testimonials Slider
 $('.bxslider').bxSlider({
adaptiveHeight: true,
     mode: 'fade' 
     });
})(jQuery);