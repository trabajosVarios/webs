$(document).ready(function() {
  $("#owl-works").owlCarousel({
    items : 4,
    margin: 8,
    itemsDesktop : [1199,5],
    itemsDesktopSmall : [980,5],
    itemsTablet: [768,5],
    itemsTabletSmall: [550,2],
    itemsMobile : [480,2]
  });

  new WOW().init();

  $('.owl-carousel .item a').nivoLightbox({
		effect: 'fadeScale',                             // The effect to use when showing the lightbox
		theme: 'default',                           // The lightbox theme to use
		keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
		clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
		onInit: function(){},                       // Callback when lightbox has loaded
		beforeShowLightbox: function(){},           // Callback before the lightbox is shown
		afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
		beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
		afterHideLightbox: function(){},            // Callback after the lightbox is hidden
		onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
		onNext: function(element){},                // Callback when the lightbox gallery goes to next item
		errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
	});

  $(".flexslider").flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 600,
    itemMargin: 2,
    minItems: 1,
    maxItems: 4
  });
});
