jQuery(document).ready(function(){
	

  
// Adds an inner wrapper div to the dekstop wordpress menu drop down, so it can scroll on small screens

jQuery( ".desktop_menu_wrapper ul#menu-menu-1 > li > ul.sub-menu" ).wrapInner( "<div class='inner_drown_wrapper'></div>");


// This scans the list items on the desktop menu and add <div class="menu_col"></div> around every two items. This creates Four coulmns that will stack the items vertically 


var divs = jQuery(".desktop_menu_wrapper ul#menu-menu-1 > li > ul.sub-menu > .inner_drown_wrapper > li");
for(var i = 0; i < divs.length; i+=2) {
  divs.slice(i, i+2).wrapAll("<div class='menu_col'></div>");
}

// This adds a see all link inside the wordpress menu, without messing up the function up above

jQuery( "<a class='see_all_products' href='/shop'>See All Products</a>" ).insertBefore( ".menu_col:first-of-type" );



// Dropdown Cart 


jQuery('.dropdown-total').click(function(){
	
	jQuery(this).toggleClass('open');
	
	// Disables Search if its open
	
	
	jQuery('.desktop_menu').removeClass('hide');
	jQuery('.mysearch_wrapper.desktop').removeClass('show');
	

	});

jQuery('html').click(function(event){
	
	jQuery('.dropdown-total').removeClass('open');

});



  // New Arrivals
  
  jQuery('.new_arrival_slideshow').slick({
    prevArrow: ".prev",
    nextArrow: ".next",
    slidesToShow: 5,
    slidesToScroll: 5,
    responsive: [
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1
        
      }
    }
  ]
  });
  
  
  
  // Upsell Products 
  

  jQuery('.up-sells ul.products').slick({
    
    slidesToShow: 5,
    slidesToScroll: 5,
    responsive: [
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1,
         slidesToScroll: 1
      }
    }
  ]
  });

  
  
  
  
  // Cookie that displays a special offer to first time users 
  

  if($.cookie('popup') != 'seen'){
    
    $.cookie('popup', 'seen', { expires: 7, path: '/' }); 
    
    jQuery(".mycookie").delay(2000).fadeIn();
    
    
    jQuery('.mycookie_close').click(function(e) {
        jQuery('.mycookie').fadeOut(); 
    });
    
   
   };
  
  


// Cookie that hides all Add to Cart buttons on the site if the user confirms they are not in san diego 
   
   
jQuery(function() {
 
 
 if($.cookie('disablecart') == null) {
 
 	jQuery(".single_add_to_cart_button").show();
 
 };
 
 
 if($.cookie('disablecart') == 'activated') {
 
 	jQuery(".single_add_to_cart_button").hide();
 
 };
 

 jQuery(".ssl_icon").click(function() {
 	
 		jQuery(".single_add_to_cart_button").hide();
 	
 		$.cookie('disablecart', 'activated', { expires: 7, path: '/' }); 
 	
 });


});

   

   
   // Special Deal Overlay
   
   jQuery('.header_special_deal').click(function() {
	   
	   jQuery('.discount_verbiage').fadeIn();
	   
	   
   });
   
   jQuery('.discount_close').click(function() {
	   
	   jQuery('.discount_verbiage').fadeOut();
	   
	  });
	  
	  // Join Email (in top nav)
	  
	  jQuery('li.menu-item-7459').click(function() {
	   
	   jQuery('.join_email_verbiage').fadeIn();
	   
	  });
	  
	  
	  jQuery('.join_email_close').click(function() {
	   
	   jQuery('.join_email_verbiage').fadeOut();
	   
	  });
	  
	  
	  // Keyholder Overlay 
	  
	  
	  jQuery('.keyholder span.transparent_button, .member_banner span.transparent_button').click(function() {
	   
	   jQuery('.keyholder_verbiage').fadeIn();
	   
	  });
	  
	  
	  jQuery('.keyholder_close').click(function() {
	   
	   jQuery('.keyholder_verbiage').fadeOut();
	   
	  });
	  
   
   
   // Zip Code Validation 
   
   jQuery(function(){
    
    var zipCodes = ['92056', '90210', '92121', '92101','19148'];
    jQuery('#zip_code_confirmation, #zip_code_no_access').hide();
    
    jQuery('#zip_form').submit(function(){
        jQuery('#zip_code_confirmation, #zip_code_no_access').hide();
        
        
        if(jQuery.inArray(jQuery('#id_zip_code').val(), zipCodes) > -1) {
            
            
            
            jQuery('.zipcode_checker input[type="text"]').css('background', '#effaee');
            
            
            jQuery('.inital_content, .overlay_inner').fadeOut();
            
            
            jQuery('#zip_code_confirmation').delay(300).fadeIn();
            
            
            
            
            
            jQuery('.overlay_inner').fadeIn();
            
            
            
            jQuery('.zip_code_button').click(function(){
	            
	            jQuery('.overlay').fadeOut();
	            
            
            });
        
        
        } else {
            
            jQuery('#zip_code_no_access').css('display', 'inline');
            
            jQuery('.zipcode_checker input[type="text"]').css('background', '#ebbbc3');
            
        }
        
        return false;
    });
    
		});
		
		
		

		var height = jQuery(".inital_content").height();
    
     jQuery(".overlay_inner").css("min-height", height+'px');

    

   
// Fixed Mobile Menu 
   
   
   


var sticky = new Waypoint.Sticky({
  element: jQuery('.mobile_fixed_wrapper')[0]
})



/*
var stickytwo = new Waypoint.Sticky({
  element: jQuery('#outer_wrapper_id')[0],
  offset:63
})
*/


	// Slidetoggle on mobile menu 
	
	jQuery('.mobile_dropdown_inner ul#menu-menu-2 > li.menu-item-has-children > a').click(function(){
		
		jQuery(this).next('ul.sub-menu').slideToggle(200);
		jQuery(this).toggleClass('active');
		
	});
	
	
	// Click to Open Mobile Menu
	
	
	
	
	jQuery('.mobile_menu_wrapper').click(function(){
		
		jQuery('.mobile_dropdown_wrapper').slideToggle(200);
		jQuery(this).toggleClass('open');
		jQuery('.menu_bar').toggleClass('open');
		
		jQuery('.mysearch_wrapper.mobile').fadeOut(200);
		
	});
	
	
 // Product Filter Suff
 
 	
 //opens top level
 
 
	 jQuery('.filter_header_wrapper.mobile').click(function(){
	 
	 	jQuery(this).next('ul').slideToggle(200);
	 	jQuery('.my_filter_title').toggleClass('open');
	 
		});


// Searchbar for Mobile Click

	
jQuery('img.search_img.mobile').click(function(){
	
	jQuery('.mysearch_wrapper.mobile').slideToggle(200);
	

	jQuery('.mobile_dropdown_wrapper').fadeOut(200);
	jQuery('.mobile_menu_wrapper').removeClass('open');

	
});



// Searchbar for Desktop Click


jQuery('img.search_img.desktop').click(function(){
	
	jQuery('.desktop_menu').toggleClass('hide');
	jQuery('.mysearch_wrapper.desktop').toggleClass('show');
	
});


// Gives the Illusion of two separate Variation titles on the single product page


 jQuery('[data-term="start-of-quick-ship-fabrics"]').addClass('variation_seperator');
 jQuery('.variation_seperator').before("<strong style='margin-top:15px' class='ivpa_title'>Quick Ship Fabrics</strong>");
 


// Custom Overlays for the Color Pattern Variations on the single product page





	jQuery('.ivpa_term').mouseenter(function() {
		
		jQuery(this).children('img').clone().appendTo( ".overlay_pattern_inner" );
		
		jQuery('.overlay_pattern').fadeIn(500);
		
		jQuery('.overlay_pattern_inner img').show();
		
	});
	
	
	jQuery('.ivpa_term').mouseleave(function() {
		
		jQuery('.overlay_pattern').hide();

		jQuery('.overlay_pattern_inner').find('img').remove().end().appendTo('.overlay_pattern_inner');
		
	});
    



}); // Document Ready
		