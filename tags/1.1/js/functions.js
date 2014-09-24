
	jQuery(document).ready(function(){

		var full_width = 0;
 
		jQuery("div.main-navigation > ul > li").each(function( index ) {    
	 
			if((jQuery(this).width() + full_width) > 960) {
	 
				jQuery(this).remove();
	 
			}
	 
			full_width = full_width + jQuery(this).width(); 
	 
		});
		
		jQuery(".main-navigation > ul").tinyNav();

	});
