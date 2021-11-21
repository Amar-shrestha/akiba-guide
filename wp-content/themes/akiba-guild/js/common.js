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


jQuery(document).ready(function ($) {
	jQuery('nav').meanmenu();
});


// function wheel(event) {
//       var delta = 0;
//       if (event.wheelDelta) {(delta = event.wheelDelta / 120);}
//       else if (event.detail) {(delta = -event.detail / 3);}

//       handle(delta);
//       if (event.preventDefault) {(event.preventDefault());}
//       event.returnValue = false;
//   }

//   function handle(delta) {
//       var time = 300;
//       var distance = 300;

//       $('html, body').stop().animate({
//           scrollTop: $(window).scrollTop() - (distance * delta)
//       }, time );
//   }

//   if (window.addEventListener) {window.addEventListener('DOMMouseScroll', wheel, false);}
//     window.onmousewheel = document.onmousewheel = wheel;