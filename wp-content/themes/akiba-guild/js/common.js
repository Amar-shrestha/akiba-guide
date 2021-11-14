jQuery(document).ready(function () {
	function setHeight() {
		windowHeight = jQuery(window).innerHeight();
        // leaveHeight = jQuery('#main-header').innerHeight();
        // bannerHeight = windowHeight-leaveHeight; 
		bannerHeight = windowHeight; 
		jQuery('#main-banner .table-wrapper').css('height', bannerHeight);  
	} 
	setHeight();

	jQuery(window).resize(function () {
		setHeight();
	});
});

  
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
	event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});



jQuery(document).ready(function () {
	jQuery('nav').meanmenu();
});
