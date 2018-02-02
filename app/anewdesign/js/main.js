(function($) {
	"use strict"; // Start of use strict

	var offset = 300,
      //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
      offset_opacity = 1200,
      //duration of the top scrolling animation (in ms)
      scroll_top_duration = 700,
      //grab the "back to top" link
      $back_to_top = $('.back-to-top');

  //hide or show the "back to top" link
  $(window).scroll(function(){
      ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('back-to-top-is-visible') : $back_to_top.removeClass('back-to-top-is-visible back-to-top-fade-out');
      if( $(this).scrollTop() > offset_opacity ) {
          $back_to_top.addClass('back-to-top-fade-out');
      }
  });

	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$('.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: ($($anchor.attr('href')).offset().top)
		}, scroll_top_duration, 'easeInOutExpo');
		event.preventDefault();
	});

	// Closes the Responsive Menu on Menu Item Click
	$('.navbar-collapse ul li a').not('.navbar-collapse ul li.dropdown a').click(function(){ 
			$('.navbar-toggle:visible').click();
	});

	// Offset for Main Navigation
	$('#mainNav').affix({
		offset: {
			top: 100
		}
	});

	// Slide up the navbar to be hidden as scrolling down and slide it down (show it) as scrolling up
	var lastScroll = 0;
	$(window).scroll(function(){
		var curScroll = $(this).scrollTop();
		if ( ( curScroll > 620 ) && ( curScroll > lastScroll) ) {
			$('.navbar-fixed-top').addClass('out');
		}
		else {
			$('.navbar-fixed-top').removeClass('out');
		} 
		lastScroll = curScroll;
	});


	// Hides the page loader when the page load completely
	$(window).on('load', function() {
		$(".page-loading").fadeOut();
		// Body overflow is hidden by default. The next line adds to the body
		// the class .loaded{overflow-x: hidden; overflow-y: auto;}
		$('body').toggleClass('loaded');
	});

})(jQuery); // End of use strict
