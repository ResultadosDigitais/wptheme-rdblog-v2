/*Scroll to top*/
jQuery(document).ready(function(){
  jQuery(window).scroll(function(){
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup').fadeIn();
    } else {
      jQuery('.scrollup').fadeOut();
    }
  });

  jQuery('.scrollup').click(function(){
    jQuery("html, body").animate({ scrollTop: 0 }, 700);
    return false;
  });

  $("#carousel").owlCarousel({
      autoPlay : 8000,
      slideSpeed : 900,
      paginationSpeed : 400,
      singleItem: true
  });

});
