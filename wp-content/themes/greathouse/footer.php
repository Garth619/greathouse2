
</main>

<footer>
	
	<div class="inner_footer">
		
		<div class="dekstop_logo_menu_wrapper">
		
		
			<div class="footer_logo">
				
				<a href="">
					<img src="<?php bloginfo('template_directory');?>/images/footer-logo.jpg"/>
					<span>indoor + outdoor</span>
				</a>
				
			</div><!-- footer_logo -->
			
			
			<div class="footer_menu tablet">
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'footer' ) ); ?>
				
			</div><!-- footer_menu -->
		
		
		</div><!-- dekstop_logo_menu_wrapper -->
		
		
		<div class="locations mobile">
			
			<span class="large_header">store locations</span><!-- large_header -->
			
			<div class="location">
				
				<a href="<?php the_field('location_1_address_link', 2436);?>" class="address" target="_blank"><?php the_field('location_1_address', 2436);?></a><!-- address -->
				<a href="tel:<?php the_field('phone_number',2436);?>" class="phone"><?php the_field('phone_number',2436);?></a><!-- phone -->
				
				<a href="<?php the_field('location_1_address_link', 2436);?>" class="get_directions" target="_blank">Get Directions</a>
				
			</div><!-- location -->
			
			<div class="location">
				
				<a href="<?php the_field('location_2_address_link', 2436);?>" class="address" target="_blank"><?php the_field('location_2_address', 2436);?></a><!-- address -->
				<a href="tel:<?php the_field('phone_number_2', 2436);?>" class="phone"><?php the_field('phone_number_2', 2436);?></a><!-- phone -->
				
				<a href="<?php the_field('location_2_address_link', 2436);?>" class="get_directions" target="_blank">Get Directions</a>
				
			</div><!-- location -->
			
		</div><!-- locations -->
		
		<div class="follow_us">
			
			<span class="large_header">follow us</span><!-- large_header -->
			
			<div class="social_icons">
				
				<a href="<?php the_field('facebook','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_fb.svg"/>
					<img class="social_icon_hover" src="<?php bloginfo('template_directory');?>/images/social_fb_hover.svg"/>
				</a>
				
				<a href="<?php the_field('twitter','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_twitter.svg"/>
					<img class="social_icon_hover" src="<?php bloginfo('template_directory');?>/images/social_twitter_hover.svg"/>
				</a>
				
				<a href="<?php the_field('pinterest','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_pinterest.svg"/>
					<img class="social_icon_hover" src="<?php bloginfo('template_directory');?>/images/social_pinterest_hover.svg"/>
				</a>
				
				<a href="<?php the_field('yelp','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_yelp.svg"/>
					<img class="social_icon_hover" src="<?php bloginfo('template_directory');?>/images/social_yelp_hover.svg"/>
				</a>
				
				<a href="<?php the_field('instagram','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_instagram.svg"/>
					<img class="social_icon_hover" src="<?php bloginfo('template_directory');?>/images/social_instagram_hover.svg"/>
				</a>
				
				<a class="google_plus" href="<?php the_field('google_plus','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_google.svg"/>
					<img class="social_icon_hover" src="<?php bloginfo('template_directory');?>/images/social_google_hover.svg"/>
				</a>
				
			</div><!-- social_icons -->
			
		</div><!-- follow_us -->
		
		
		<div class="locations desktop">
			
			<span class="large_header">store locations</span><!-- large_header -->
			
			<div class="inner_location_wrapper">
			
			<div class="location">
				
				<a href="<?php the_field('location_1_address_link', 2436);?>" class="address" target="_blank"><?php the_field('location_1_address', 2436);?></a><!-- address -->
				<a href="tel:<?php the_field('phone_number', 2436);?>" class="phone"><?php the_field('phone_number', 2436);?></a><!-- phone -->
				
				<a href="<?php the_field('location_1_address_link', 2436);?>" class="get_directions" target="_blank">Get Directions</a>
				
			</div><!-- location -->
			
			<div class="location">
				
				<a href="<?php the_field('location_2_address_link', 2436);?>" class="address" target="_blank"><?php the_field('location_2_address', 2436);?></a><!-- address -->
				<a href="tel:<?php the_field('phone_number_2', 2436);?>" class="phone"><?php the_field('phone_number_2', 2436);?></a><!-- phone -->
				
				<a href="<?php the_field('location_2_address_link', 2436);?>" class="get_directions" target="_blank">Get Directions</a>
				
			</div><!-- location -->
			
			</div><!-- inner_location_wrapper -->
			
		</div><!-- locations -->
		
		
		
		
		<div class="footer_menu mobile">
			
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'footer' ) ); ?>
			

			
		</div><!-- footer_menu -->
		
	</div><!-- inner_footer -->
	
</footer>

<div class="copyright">
	
	<img class="ssl_icon" src="<?php bloginfo('template_directory');?>/images/ssl.png"/>
	
	<span>Copyright 2017&copy; Greathouse Furniture. <br class="copy_mobile"/>All rights reserved. <!-- Sitemap --> &nbsp;|&nbsp; <a href="<?php bloginfo('url');?>/private-policy">Private Policy</a> &nbsp;|&nbsp; <a href="<?php bloginfo('url');?>/terms-and-conditions">Terms & Conditions</a></span>
	
	
	
	<a href="http://highrankwebsites.com" target="_blank">
		<img class="highrank_logo" src="<?php bloginfo('template_directory');?>/images/footer-highrank.png"/>
	</a>

</div><!-- copyright -->

<div class="overlay mycookie">
	
	<div class="overlay_inner">
		<img class="overlay_close mycookie_close" src="<?php bloginfo('template_directory');?>/images/x.png" />
		<span class="sub_header"><?php the_field('join_email_title','option');?></span>
		<span class="large_header"><?php the_field('join_email_verbiage','option');?></span>
		<span class="additional"><?php the_field('join_email_additional_verbiage','option');?>.</span>
		
		<?php gravity_form(2, false, false, false, '', true, 15); ?>
		
	</div><!-- overlay_inner -->
	
</div><!-- overlay -->



<div class="overlay discount_verbiage">
	
	<div class="overlay_inner">
		<img class="overlay_close discount_close" src="<?php bloginfo('template_directory');?>/images/x.png" />
		<span class="sub_header"><?php the_field('overlay_text','option');?></span>
		<span class="large_header"><?php the_field('overlay_disocunt_verbiage','option');?></span>
		<span class="additional"><?php the_field('disocunt_verbiage_additional_sub_text','option');?> <span class="mycode"><?php the_field('mycoupon_code','option');?></span></span>
		
		<a href="<?php the_field('disocunt_verbiage_shop_now_link','option');?>" class="blue_shop overlay_shop_button" style="margin-top:25px;"><?php the_field('disocunt_verbiageshop_now_button_text','option');?></a>
		
		<?php // gravity_form(2, false, false, false, '', true, 15); ?>
		
	</div><!-- overlay_inner -->
	
</div><!-- overlay -->


<div class="overlay join_email_verbiage">
	
	<div class="overlay_inner">
		
		<img class="overlay_close join_email_close" src="<?php bloginfo('template_directory');?>/images/x.png" />
		<span class="sub_header"><?php the_field('join_email_title','option');?></span>
		<span class="large_header"><?php the_field('join_email_verbiage','option');?></span>
		<span class="additional"><?php the_field('join_email_additional_verbiage','option');?></span>
		
		<?php gravity_form(2, false, false, false, '', true, 45); ?>
		
	</div><!-- overlay_inner -->
	
</div><!-- overlay -->


<div class="overlay keyholder_verbiage">
	
	<div class="overlay_inner">
		
		<img class="overlay_close keyholder_close" src="<?php bloginfo('template_directory');?>/images/x.png" />
		<span class="sub_header"><?php the_field('keyholder_overlay_small_header','options');?></span>
		<span class="large_header"><?php the_field('keyholder_overlay_large_header','options');?></span>
		<span class="additional"><?php the_field('keyholder_overlay_additional','options');?></span>
		
		<div class="steps_wrapper">
			
			<div class="step">
				
				<span class="step_circle">1</span><!-- step_circle -->
				
				<span class="step_content">Invitations to Special Events & mixers featuring local personalities & designers and of course, Happy Hour Gratis!</span><!-- step_content -->
				
			</div><!-- step -->
			
			<div class="step">
				
				<span class="step_circle">2</span><!-- step_circle -->
				
				<span class="step_content">Early access to sale pricing before the general public</span><!-- step_content -->
				
			</div><!-- step -->
			
			<div class="step">
				
				<span class="step_circle">3</span><!-- step_circle -->
				
				<span class="step_content">Access to Private Flash Sales exclusively reserved for Key Holder members</span><!-- step_content -->
				
			</div><!-- step -->
			
			<div class="step">
				
				<span class="step_circle">4</span><!-- step_circle -->
				
				<span class="step_content">Early notification of new lines and collections before they arrive!</span><!-- step_content -->
				
			</div><!-- step -->
			
		</div><!-- steps -->
		
		<span class="fill_out">Fill out the form below</span>
		
		
		<?php gravity_form(3, false, false, false, '', true, 25); ?>
		
	</div><!-- overlay_inner -->
	
</div><!-- overlay -->


<div class="overlay zipcode_checker">
	
	<div class="overlay_inner">
		
		<img class="overlay_close zipcode_close" src="<?php bloginfo('template_directory');?>/images/x.png" />
		
		<div class="inital_content">

			<span class="sub_header">let yourself in</span>
			<span class="large_header"> Please Enter Your Delivery Zip Code</span>
			
<!-- 			<span class="additional">Lem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> -->
		
			<form  id="zip_form">
    	
    		<ul>
	    		<li>
    	
						<label>enter your 5 digit zip code</label>
						<input type="text" name="zipcode" id="id_zip_code"/>
						<span id="myvalidation">zipcode needs to be within san diego</span>
						<input type="submit" value="Submit"/>
						
    	
						</li>
						</ul>
		
			</form>
		
		</div><!-- inital_content -->

		<div id="zip_code_confirmation">
			
			<span class="sub_header">let yourself in</span>
			<span class="large_header">We Deliver Here!</span>
			
			<span class="additional">Greathouse proudly offers White Glove Delivery anywhere in San Diego County.  Our Delivery Specialists will unbox, setup and take away all the trash so you don't have to worry about a thing, other than enjoying your new furniture!</span>
			
			
			
			<span class="add_again">Please click the 'Add To Cart' button behind this overlay once again to add this product to your cart</span>
			
<!--
			<div id="zip_code_discount">
				
					<span class="large_header">GET 15% off your next purchase</span>
					
					<span class="zip_discount_content">Use the Coupon Code <span class="coupon_code">MEGASALE</span> at Checkout</span>
				
			</div>
--><!-- zip_code_discount -->
			
			<span class="blue_shop zip_code_button">Continue Shopping</span>
			
			
			
		</div><!-- zip_code_confirmation -->
		
		
		<div id="zip_code_no_access">
			
			<span class="large_header">Outside of San&nbsp;Diego County?</span>
			
			<span class="no_zip_content">Unfortunately, you are currently out of our automatic delivery area.  Please call us for a shipping quote and more information.  </span>
			
			<a href="tel:800-507-4517" class="phone_number">800-507-4517</a>
			
				<span class="remove_add_to_cart blue_shop">Browse the Site</span>
			
<!--
			<div class="no_zip_inner_wrapper">
				
				<span class="large_header">Continue Browsing</span>
			
				<span class="no_zip_content">If you like to browse products anyways, you can add products to your wishlist</a></span>
			
				<form>
				
		
				
				
				
				
			
				</form>
			
			</div>
--><!-- no_zip_inner_wrapper -->
			
			
			
		</div><!-- zip_code_no_access -->
		
	
	</div><!-- overlay_inner -->
	
</div><!-- overlay -->


<?php wp_footer(); ?>


<!-- <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/custom-min.js"></script> -->


<script type="text/javascript">

		jQuery(document).ready(function(){

			<?php if(is_cart() || is_product() || is_checkout()):?>
			
				jQuery('.mycookie').addClass('hide_overlay');
// 				jQuery('.zipcode_checker').addClass('initial_show');
			
			<?php endif;?>
			
/*
			<?php if(! array(is_cart() || is_product() || is_checkout())):?>
			
				jQuery('.mycookie').removeClass('hide_overlay');
				jQuery('.zipcode_checker').removeClass('show_overlay');
			
			<?php endif;?>
*/

		});
		
		
		
		<?php if(is_front_page()):?>
		
			
// Animated Blueline in the Life Well Lived Section


var lifeline = new Waypoint({
  element: document.getElementById('life_line_trigger'),
  handler: function(direction) {
   
   jQuery('.life_line').addClass('animate_line');
   jQuery('.life_line_desktop').addClass('animate_line');
   
  }
})
		
		<?php endif;?>
		
		
<?php global $woocommerce;

if ( sizeof( $woocommerce->cart->cart_contents) > 0 ) :?>
	
	
	
	
	jQuery('body').addClass('mycartadd');




<?php endif; ?>

				

</script>



<?php if(get_field('turn_off_dimensions_tabe')):?>
	
	<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery('.additional_information_tab').hide();
		
		});

	</script>

<?php endif;?>


<?php if( get_field('turn_on_shipping_tab_two') == 'on' ): ?>


<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery('.test_tab_tab').show();
		
		});

	</script>

<?php endif;?>

<?php if( get_field('turn_on_product_care_tab') == 'on' ): ?>


<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery('.testtwo_tab_tab').show();
		
		});

	</script>

<?php endif;?>



</body>
</html>
