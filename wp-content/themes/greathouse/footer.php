
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
				</a>
				
				<a href="<?php the_field('twitter','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_twitter.svg"/>
				</a>
				
				<a href="<?php the_field('pinterest','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_pinterest.svg"/>
				</a>
				
				<a href="<?php the_field('yelp','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_yelp.svg"/>
				</a>
				
				<a href="<?php the_field('instagram','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_instagram.svg"/>
				</a>
				
				<a href="<?php the_field('google_plus','option');?>" target="_blank">
					<img class="social_icon" src="<?php bloginfo('template_directory');?>/images/social_google.svg"/>
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
	
	<img class="ssl_icon" src="<?php bloginfo('template_directory');?>/images/ssl.svg"/>
	
	<span>Copyright 2016&copy; Greathouse Furniture. <br class="copy_mobile"/>All rights reserved. <!-- Sitemap --> &nbsp;|&nbsp; <a href="<?php bloginfo('url');?>/private-policy">Private Policy</a> &nbsp;|&nbsp; <a href="<?php bloginfo('url');?>/terms-and-conditions">Terms & Conditions</a></span>
	
	
	
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
		
		<?php gravity_form(2, false, false, false, '', true, 15); ?>
		
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
				
				<span class="step_content">Access to Private Sales not available to the General Public</span><!-- step_content -->
				
			</div><!-- step -->
			
			<div class="step">
				
				<span class="step_circle">2</span><!-- step_circle -->
				
				<span class="step_content">Undivided access to preview the latest additions & collections</span><!-- step_content -->
				
			</div><!-- step -->
			
			<div class="step">
				
				<span class="step_circle">3</span><!-- step_circle -->
				
				<span class="step_content">Access to certain <strong>SALE PRICING</strong> before and after major sales events</span><!-- step_content -->
				
			</div><!-- step -->
			
			<div class="step">
				
				<span class="step_circle">4</span><!-- step_circle -->
				
				<span class="step_content">Invitations to Special Events including: guest speakers, “How To” seminars, happy hour beverages & much more</span><!-- step_content -->
				
			</div><!-- step -->
			
		</div><!-- steps -->
		
		<span class="fill_out">Fill out the form below</span>
		<br/><br/>
		form goes here
		
		<?php // gravity_form(2, false, false, false, '', true, 15); ?>
		
	</div><!-- overlay_inner -->
	
</div><!-- overlay -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/custom-min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/waypoints/lib/shortcuts/sticky.min.js"></script>

</body>
</html>
