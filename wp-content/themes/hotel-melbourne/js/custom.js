$(function() {
	 /*--Menu Dropdown--------*/ 
	   jQuery('.nav li.dropdown').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   }); 
   //WOW animation	   
	new WOW().init();   
/*-- Page Scroll To Top Section ---------------*/
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.hc_scrollup').fadeIn();
			} else {
				jQuery('.hc_scrollup').fadeOut();
			}
		});
	
		jQuery('.hc_scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	
	 //Menu fixed top	
	  $('.navbar').affix({
      offset: {
        top: $('.header-top-section').height()
			  }
		});	
		
    /*------PhotoBox Js------------*/		
     !(function(){
          'use stnonerict';
		// finally, initialize photobox on all retrieved images
		jQuery('#gallery').photobox('.photobox_a');
	jQuery('#gallery').photobox('.photobox_a:first', { thumbs:false, time:0 }, imageLoaded);
	function imageLoaded(){
		console.log('image has been loaded...'
		);
	}
    
})();		
		
});

