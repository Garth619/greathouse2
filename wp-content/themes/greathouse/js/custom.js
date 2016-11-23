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
  
  
  
  // Related Products 
  
  jQuery('.up-sells ul.products').slick({
    //prevArrow: ".prev",
    //nextArrow: ".next",
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
    $.cookie('popup', 'seen', { expires: 365, path: '/' }); 
    jQuery(".mycookie").delay(2000).fadeIn();
    jQuery('.mycookie_close').click(function(e)
        {
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
	  
	  
	  jQuery('.keyholder span.transparent_button, .member_banner span.transparent_button').click(function() {
	   
	   jQuery('.keyholder_verbiage').fadeIn();
	   
	  });
	  
	  
	  jQuery('.keyholder_close').click(function() {
	   
	   jQuery('.keyholder_verbiage').fadeOut();
	   
	  });
	  
   
   
   
   
   
   
   // Fixed Mobile Menu 
   
   
   

var sticky = new Waypoint.Sticky({
  element: jQuery('.mobile_fixed_wrapper')[0]
})



/*
var waypoints = jQuery('.outer_wrapper').waypoint(function(direction) {
  notify(this.element.id + ' hit 25% from top of window') 
}, {
  offset: '25%'
})
*/




/*

var sticky = new Waypoint.Sticky({
  element: jQuery('.outer_wrapper')[0],
  offset:62
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


  
  
    



}); // Document Ready
		