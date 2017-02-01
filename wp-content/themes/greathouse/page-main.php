<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>



	
	<section class="main_banner_wrapper" style="background: linear-gradient(rgba(0,0,0,.15), rgba(0,0,0,.15)), url(<?php the_field('main_banner');?>) no-repeat scroll center top / cover ;">
		
		<div class="awards">Awards</div><!-- awards -->
		
		<div class="vertical_align">
			
			
			
			
			
<!-- Below is changing the color options for the banner text on inner pages -->


		<?php if( get_field('main_image_color_options') == 'Black' ): ?>

				<span class="large_header" style="color:#000;"><?php the_field('banner_main_header');?></span>
				<span class="sub_header" style="color:#000;"><?php the_field('main_banner_sub_header');?></span>
		
			<?php elseif( get_field('main_image_color_options') == 'White' ): ?>

				<span class="large_header" style="color:#fff;"><?php the_field('banner_main_header');?></span>
				<span class="sub_header" style="color:#fff;"><?php the_field('main_banner_sub_header');?></span>
		
			<?php elseif( get_field('main_image_color_options') == 'Blue' ): ?>

				<span class="large_header" style="color:#79b7c0;"><?php the_field('banner_main_header');?></span>
				<span class="sub_header" style="color:#79b7c0;"><?php the_field('main_banner_sub_header');?></span>
		
			<?php else:?>
			
				<span class="large_header" style="color:#000;"><?php the_field('banner_main_header');?></span>
				<span class="sub_header" style="color:#000;"><?php the_field('main_banner_sub_header');?></span>
		
		<?php endif;?>


<!-- End of Banners for the Inner Staic Pages. -->

			<a class="white_button" href="<?php the_field('shop_now_button');?>">Shop Now</a><!-- grey_button -->
			
			 
	</div><!-- vertical_align -->
		
	</section><!-- main_banner_wrapper -->
	

<section class="product_categories_wrapper">
	
	
	<div class="product_inner">
	
	<?php if( have_rows('shop_page_product_directory', 'option') ): ?>

		<?php while( have_rows('shop_page_product_directory', 'option') ): the_row(); ?>

			
			<?php 
			
			// Gets Link
			
			$queried_object = get_queried_object(); 
			$taxonomy = $queried_object->taxonomy;
			$term_id = $queried_object->term_id;  
			$related_terms = get_sub_field('link', $taxonomy . '_' . $term_id);
			
			// A step further and gets the name
				
			$term = get_term_by( 'id', $related_terms, 'product_cat' );		
		
		?>
			
			
			
			<div class="single_product_square">
		
				<a href="<?php echo get_term_link($related_terms); ?>">
		
				<div class="product_overlay">
			
					<div class="product_inner_wrapper">
				
						<span class="large_header"><?php echo $term->name;?></span><!-- large_header -->
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
	
	<span class="large_header"><?php the_field('product_slider_title');?></span><!-- large_header -->
	
	<img class="prev" src="<?php bloginfo('template_directory');?>/images/arrivals_prev.svg"/>
	<img class="next" src="<?php bloginfo('template_directory');?>/images/arrivals_next.svg"/>
	
	<div class="new_arrival_slideshow">
		
		
<?php 

$posts = get_field('new_arrivals');

if( $posts ): ?>
    
    
    
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        
        
     <div class="slide">
			
			<a href="<?php the_permalink();?>">
				
				<?php the_post_thumbnail('shop_catalog');?>
				<span class="new_arrival_title"><?php the_title();?></span>
				<span><?php echo $product->get_price_html(); ?></span>
			
			
			</a>
			
		</div><!-- slide -->
        
        
        
    <?php endforeach; ?>
    
		
		
		
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
		
		
		
		
		
		
		
				
		
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
		
			<h1 class="large_header"><?php the_field('life_well_lived_title');?></h1><!-- large_header -->
		
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
			
			<span class="transparent_button"><?php the_field('keyholder_button_text');?></span>
		
		
		</div><!-- inner_keyholder -->
		
	</section><!-- keyholder -->


	<section class="threeboxes_desktop">
		
		<div class="keyholder" style="background: rgba(0, 0, 0, 0) url(<?php the_field('keyholder_box_image');?>) no-repeat scroll center center / cover ;">
			
			<div class="inner_keyholder">
			
				<span class="sub_header"><?php the_field('keyholder_top_header');?></span><!-- sub_header -->
				<span class="large_header"><?php the_field('keyholder_main_header');?></span><!-- sub_header -->
			
				<span class="transparent_button"><?php the_field('keyholder_button_text');?></span>
				
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
