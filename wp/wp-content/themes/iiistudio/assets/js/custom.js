(function($) {

	jQuery(document).ready(function(){
		// prettyPhoto
		jQuery('a[data-gal]').each(function() {
			jQuery(this).attr('rel', jQuery(this).data('gal'));
		});  	
		jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
			animationSpeed:'slow',
			theme:'light_square',
			slideshow:false,
			overlay_gallery: false,
			social_tools:false,
			deeplinking:false
		});

		// show contact
		jQuery('a#request-info').click(function() {
			jQuery(this).addClass('animated bounceOutLeft');
			jQuery('.contact-info').addClass('animated bounceInUp');
		});
	});


})(jQuery);