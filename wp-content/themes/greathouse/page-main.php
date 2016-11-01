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
		
		
<!--
<?php 

$posts = get_field('new_arrivals');

if( $posts ): ?>
	
	<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
	    
	    	
	 <div class="slide">
			
			<a href="">
				<img src="<?php bloginfo('template_directory');?>/images/arrival_1.png"/>
				<a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?><br/><?php echo wc_price( $p->ID );?></a>
				<span>LOREM IPSUM DOLOR SIT<br/>$59</span>
			</a>
			
		</div>
	    	
		<?php endforeach; ?>
	
	<?php endif; ?>
-->
		
		
		
		
		
		
		
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

<section class="custom_design_services" style="background: rgba(0, 0, 0, 0) url(<?php the_field('personalize_your_space_banner');?>) repeat scroll center top / cover ;">
	
	
	
	<span class="sub_header"><?php the_field('personalize_section_top_header');?></span><!-- large_header -->
		
		<div class="blue_block"></div><!-- blue_block -->
		
		<span class="large_header"><?php the_field('personalize_section_main_header');?></span><!-- large_header -->
		
		<a href="<?php the_field('personalize_section_button_link');?>" class="white_button" style="border:1px solid #000;"><?php the_field('personalize_section_button_text');?></a><!-- white_button -->
		
</section><!-- custom_design_services -->


<section class="life_holder_wrapper">


	<section class="life_well_lived">
		
		<div class="desktop_wrapper">
		
			<span class="large_header"><?php the_field('life_well_lived_title');?></span><!-- large_header -->
		
			<div class="life_well_lived_content">
				
				
				<?php the_field('live_well_lived_content');?>
		
					
			</div><!-- life_well_lived_content -->
		
		
		
	
	<span class="quote"><?php the_field('live_well_lived_quote');?><br class="pull_quote_break"/>- greathouse</span>
	
	</div><!-- desktop_wrapper -->
	
		
	</section><!-- life_well_lived -->
	
	<section class="keyholder mobile">
		
		<div class="inner_keyholder">
		
			<span class="sub_header"><?php the_field('keyholder_top_header');?></span><!-- sub_header -->
			<span class="large_header"><?php the_field('keyholder_main_header');?></span><!-- sub_header -->
			
			<a href="<?php the_field('keyholder_button_link');?>" class="transparent_button"><?php the_field('keyholder_button_text');?></a>
		
		
		</div><!-- inner_keyholder -->
		
	</section><!-- keyholder -->


	<section class="threeboxes_desktop">
		
		<div class="keyholder" style="background: rgba(0, 0, 0, 0) url(<?php the_field('keyholder_box_image');?>) no-repeat scroll center center / cover ;">
			
			<div class="inner_keyholder">
			
				<span class="sub_header"><?php the_field('keyholder_top_header');?></span><!-- sub_header -->
				<span class="large_header"><?php the_field('keyholder_main_header');?></span><!-- sub_header -->
			
				<a href="<?php the_field('keyholder_button_link');?>" class="transparent_button"><?php the_field('keyholder_button_text');?></a>
				
			</div><!-- inner_keyholder -->
			
		</div><!-- keyholder -->
		
		<a href="<?php the_field('shop_box_1_link');?>">
		
		<div class="shop_accessories" style="background: rgba(0, 0, 0, 0) url(<?php the_field('shop_box_1_image');?>) no-repeat scroll center center / cover ;">
			
			<div class="shop_bar">
				
				<div class="shop">Shop</div><!-- shop -->
				<div class="shop_cta"><?php the_field('shop_box_1_title');?></div><!-- shop_cta -->
				
			</div><!-- shop_bar -->
			
		</div><!-- shop_accessories -->
		
		</a>
		
		
		<a href="<?php the_field('shop_box_2_link');?>">
		
		<div class="seasonal_features" style="background: rgba(0, 0, 0, 0) url(<?php the_field('shop_box_2_image');?>) no-repeat scroll center center / cover ;">
			
			
			<div class="shop_bar">
				
				<div class="shop">Shop</div><!-- shop -->
				<div class="shop_cta"><?php the_field('shop_box_2_title');?></div><!-- shop_cta -->
				
			</div><!-- shop_bar -->
			
		</div><!-- seasonal_features -->
		
		</a>
		
	
	
	</section><!-- threeboxes_desktop -->


</section><!-- life_holder_wrapper -->



<?php get_footer(); ?>
