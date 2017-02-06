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
        slidesToShow: 1,
        slidesToScroll: 1
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
	  
	  
	  jQuery('.keyholder, .member_banner span.transparent_button').click(function() {
	   
	   jQuery('.keyholder_verbiage').fadeIn();
	   
	  });
	  
	  
	  jQuery('.keyholder_close').click(function() {
	   
	   jQuery('.keyholder_verbiage').fadeOut();
	   
	  });
	  
   
   
   // Zip Code Validation 
   
   jQuery(function(){
    
    var zipCodes = [
'91901','91902','91903','91905','91906','91908','91909','91910','91911','91912','91913','91914','91915','91916','91917','91921','91931','91932','91933','91934','91935','91941','91942','91943','91944','91945','91946','91947','91948','91950','91951','91962','91963','91976','91977','91978','91979','91980','91987','91990','92003','92004','92007','92008','92009','92010','92011','92013','92014',
'92018','92019','92020','92021','92022','92023','92024','92025','92026','92027','92028','92029','92030','92033','92036','92037','92038','92039','92040','92046','92049','92051','92052','92054','92055','92056','92057','92059','92060','92061','92064','92065','92066','92067','92068','92069','92070','92072','92074','92075','92078','92079','92081','92082','92083','92084','92085','92086','92088','92090','92091','92092','92093','92096','92101','92102','92103','92104','92105','92106','92107','92108','92109','92110','92111','92112','92113','92114','92115','92116','92117','92118','92119','92120','92121','92122',
'92123','92124','92126','92127','92128','92129','92130','92131','92132','92133','92134','92135','92136','92137','92138','92139','92140','92142','92143','92145','92147','92149','92150','92152','92153',
'92154','92155','92158','92159','92160','92161','92162','92163','92164','92165','92166','92167','92168','92169','92170','92171','92172','92173','92174','92175','92176','92177','92178','92179','92182',
'92184','92186','92187','92190','92191','92192','92193','92194','92195','92196','92197','92198','92199'

];
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
            
            jQuery('#zip_code_no_access').css('display', 'block');
            
            jQuery('.zipcode_checker input[type="text"]').css('background', '#ebbbc3');
            
             jQuery('#myvalidation').delay(300).fadeIn().css("display","block");
            
        }
        
        return false;
    });
    
		});
		
		
		

		var height = jQuery(".inital_content").height();
    
     jQuery(".overlay_inner").css("min-height", height+'px');
     
     
     
    // Cookie that hides all Add to Cart buttons on the site if the user confirms they are not in san diego 
   
   
		jQuery(function() {
 
 
		 if($.cookie('disablecart') == null) {
 
		 	jQuery(".single_add_to_cart_button").show();
 
		 	};
 
 
		 	if($.cookie('disablecart') == 'activated') {
 
		 		jQuery(".single_add_to_cart_button").hide();
		 		jQuery(".zipcode_checker").hide();
 
 			};
 

 			jQuery(".remove_add_to_cart").click(function() {
 	
 				jQuery(".single_add_to_cart_button").hide();
 				jQuery('.zipcode_checker').fadeOut();
 	
 				$.cookie('disablecart', 'activated', { expires: 7, path: '/' }); 
 	
 		});


	});
	
	
	 // Cookie that hides hides the zip code overlay because the user correctly entered a zip code withn san diego 
	 
	 
	 
	 
	 jQuery(function() {
 
 
/*
		 if($.cookie('zipcodesuccess') == null) {
 
		 	jQuery(".zipcode_checker").show();
 
		 	};
*/
 
 
		 	if($.cookie('zipcodesuccess') == 'success') {
 
		 		
		 		jQuery(".zipcode_checker").hide();
 
 			};
 

 			jQuery(".zip_code_button").click(function() {
 	
 				
 				jQuery('.zipcode_checker').fadeOut();
 	
 				$.cookie('zipcodesuccess', 'success', { expires: 7, path: '/' }); 
 	
 		});


	});
    

   
// Fixed Mobile Menu 
   
   
   


var sticky = new Waypoint.Sticky({
  element: jQuery('.mobile_fixed_wrapper')[0]
})






// Sticky bar for the Product Filter


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
 
 jQuery('.my_filter_title').addClass('open');
//  jQuery('div.myfilter_wrapper ul').hide();
 
 
	 
	 
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


function checkWidth() {
    
    if (jQuery(window).width() > 1150) {
        
       jQuery('.ivpa_term').mouseenter(function() {
		
		jQuery(this).children('img').clone().appendTo( ".overlay_pattern_inner" );
		
		jQuery('.overlay_pattern').fadeIn(500);
		
		jQuery('.overlay_pattern_inner img').show();
		
	});
	
	
	jQuery('.ivpa_term').mouseleave(function() {
		
		jQuery('.overlay_pattern').hide();

		jQuery('.overlay_pattern_inner').find('img').remove().end().appendTo('.overlay_pattern_inner');
		
	});

    		
    	   		
    		
    } else {

    }
};


checkWidth();



		
	
	// Hacky fix that corrects a bug that doesn't show the dimensions tabs on simple products
	
	
	jQuery('#tab-additional_information').hide();
	
	jQuery('#tab-description').show();
	
	
	// SVG Footer Social Icons
	
	jQuery('.social_icons a').mouseenter(function(){
		
		jQuery(this).find('.social_icon').fadeOut(200);
		jQuery(this).find('.social_icon_hover').fadeIn(200);
		
	});
	
	
	jQuery('.social_icons a').mouseleave(function(){
		
		jQuery(this).find('.social_icon').fadeIn(200);
		jQuery(this).find('.social_icon_hover').fadeOut(200);
		
	});
	
	
	// Awards fadeIn on Page Load
	
	




	jQuery('.awards_wrapper').delay(2000).queue(function(){
		
		jQuery(this).addClass('awards_animate');
		
	});
	
	
	
	jQuery('.awards').mouseenter(function(){
		
		jQuery('.awards_inner_swing').addClass('open');
		
		
		
	});


	jQuery('.awards_wrapper').mouseleave(function(){
		
		jQuery('.awards_inner_swing').removeClass('open');
		
		
	});


	
// Logo







jQuery('img.logo').delay(400).queue(function(){
	
	jQuery(this).addClass('fade');
	
	
});



jQuery('.logo_wrapper').delay(400).queue(function(){
	
	jQuery(this).addClass('tagline_fade');
	
	
});
	
	

	




    



}); // Document Ready
		