  $(window).scroll(function(){
    $('nav').toggleClass('scrolled',$(this).scrollTop() > 20)
  });


  jQuery(window).load(function() {
 
    /*
        Stop carousel
    */
    $('.carousel').carousel('pause');
 
});