<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>



	
	<section class="main_banner_wrapper" style="background: rgba(0, 0, 0, 0) url(<?php the_field('main_banner');?>) no-repeat scroll center top / cover ;">
		
		<div class="awards">Awards</div><!-- awards -->
		
		<div class="vertical_align">
		
			<span class="large_header"><?php the_field('banner_main_header');?></span>
			<span class="sub_header"><?php the_field('main_banner_sub_header');?></span>
		
			<a class="white_button" href="<?php the_field('shop_now_button');?>">Shop Now</a><!-- grey_button -->
			
			 
		
		</div><!-- vertical_align -->
		
	</section><!-- main_banner_wrapper -->
	

<section class="product_categories_wrapper">
	
	
	<div class="product_inner">
	
	<?php if( have_rows('product_directory', 2639) ): ?>

		<?php while( have_rows('product_directory', 2639) ): the_row(); ?>

			<div class="single_product_square">
		
				<a href="<?php the_sub_field('link');?>">
		
				<div class="product_overlay">
			
					<div class="product_inner_wrapper">
				
						<span class="large_header"><?php the_sub_field('category_title');?></span><!-- large_header -->
						<span class="sub_header">shop now</span><!-- sub_header -->
				
					</div><!-- product_inner_wrapper -->
			
				</div><!-- product_overlay -->
			
				<?php $allproducts = wp_get_attachment_image_src(get_sub_field('image'), 'allproducts'); ?>
		
				<div class="product_background" style="background: rgba(0, 0, 0, 0) url(<?php echo $allproducts[0]; ?>) no-repeat scroll left top / cover ;"></div><!-- product_background -->
		
				</a>
	
			</div><!-- single_product_square -->
					
		<?php endwhile; ?>

	<?php endif; ?>

	</div><!-- product_inner -->
	
	
</section><!-- product_categories_wrapper -->

<section class="new_arrivals_wrapper">
	
	<span class="large_header">new Arrivals</span><!-- large_header -->
	
	<img class="prev" src="<?php bloginfo('template_directory');?>/images/arrivals_prev.svg"/>
	<img class="next" src="<?php bloginfo('template_directory');?>/images/arrivals_next.svg"/>
	
	<div class="new_arrival_slideshow">
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_1.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_2.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_3.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_4.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_5.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		
		
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_5.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_5.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_5.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_5.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_5.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_5.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		
		
		<div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_5.png"/>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div><!-- slide -->
		
		
	</div><!-- new_arrival_slideshow -->
	
</section><!-- new_arrivals_wrapper -->

<section class="custom_design_services">
	
	<span class="sub_header">Custom DEsign Services</span><!-- large_header -->
		
		<div class="blue_block"></div><!-- blue_block -->
		
		<span class="large_header">personalize your space</span><!-- large_header -->
		
		<a href="" class="white_button" style="border:1px solid #000;">Free Instore Design Consultation</a><!-- white_button -->
		
</section><!-- custom_design_services -->


<section class="life_holder_wrapper">


	<section class="life_well_lived">
		
		<div class="desktop_wrapper">
		
			<span class="large_header">A Life Well Lived Begins <br class="tablet_break"/>With a GREATHOUSE</span><!-- large_header -->
		
			<div class="life_well_lived_content">
		
			<p>We invite you to visit one of our award winning showrooms (San Diego & Carlsbad) to discover a home of possibilities.</p> 
	
			<p>Greathouse features southern California's best selection of quality outdoor patio furniture. Whether you live along the coast or inland, we have the furnishings to create comfortable and customizable outdoor spaces.  Featuring brands such as: Mallin, Patio Republic, Lloyd Flanders, Ratana, Telescope, Alumont, Lane Venture and more.</p>
	
			<p>As you tour the showroom you will discover San Diego's most unique and diverse selection of custom upholstery, sofas and sectionals.  With over one thousand designer fabrics to choose from you are sure to find the look that is uniquely yours.  Highlighting the showroom are name brands such as: Lexington, Stanley, Jonathan Adler, Teodora, Cisco Brothers, Classic Home, Camerich along with many others.</p>
		
		</div><!-- life_well_lived_content -->
		
		
		
	
	<span class="quote">“let yourself in”<br class="pull_quote_break"/>- greathouse</span>
	
	</div><!-- desktop_wrapper -->
	
		
	</section><!-- life_well_lived -->
	
	<section class="keyholder mobile">
		
		<div class="inner_keyholder">
		
			<span class="sub_header">become a member</span><!-- sub_header -->
			<span class="large_header">Keyholder Club</span><!-- sub_header -->
			
			<a href="" class="transparent_button">Sign Up Today</a>
		
		
		</div><!-- inner_keyholder -->
		
	</section><!-- keyholder -->


	<section class="threeboxes_desktop">
		
		<div class="keyholder">
			
			<div class="inner_keyholder">
			
				<span class="sub_header">become a member</span><!-- sub_header -->
				<span class="large_header">Keyholder<br/>Club</span><!-- sub_header -->
			
				<a href="" class="transparent_button">Sign Up Today</a>
				
			</div><!-- inner_keyholder -->
			
		</div><!-- keyholder -->
		
		<a href="<?php bloginfo('url');?>/furniture-cat/accessories">
		
		<div class="shop_accessories">
			
			<div class="shop_bar">
				
				<div class="shop">Shop</div><!-- shop -->
				<div class="shop_cta">Accessories</div><!-- shop_cta -->
				
			</div><!-- shop_bar -->
			
		</div><!-- shop_accessories -->
		
		</a>
		
		<div class="seasonal_features">
			
			
			<div class="shop_bar">
				
				<div class="shop">Shop</div><!-- shop -->
				<div class="shop_cta">Seasonal Features</div><!-- shop_cta -->
				
			</div><!-- shop_bar -->
			
			
			
		</div><!-- seasonal_features -->
		
	
	
	</section><!-- threeboxes_desktop -->


</section><!-- life_holder_wrapper -->



<?php get_footer(); ?>
