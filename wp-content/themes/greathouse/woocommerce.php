<?php
/**
 * Shop
 *

 */

get_header(); ?>

<?php include('banner.php');?>

<!-- Shop Page Product Directory -->

<?php if(is_post_type_archive('product')):?>


	<?php if(get_field('shop_page_product_directory','option')): ?>
 
	<div class="product_inner">
	
	<?php while(has_sub_field('shop_page_product_directory','option')): ?>
 
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
				
				
					<?php $allnewproducts = wp_get_attachment_image_src(get_sub_field('image', $titlepost_id), 'allproducts'); ?>
  	    
					<div class="product_background" style="background: rgba(0, 0, 0, 0) url(<?php echo $allnewproducts[0]; ?>) no-repeat scroll center center / cover ;">
						
					</div><!-- product_background -->
		 			
		 			
	 			</a>
	 		
	 		</div><!-- single_product_square -->
		
		
		<?php endwhile; ?>
		
	</div><!-- product_inner -->
 
<?php endif; ?>
	

<?php endif;?>


<!-- Product Category Directory Pages -->
		
<?php if(is_product_category()):?>


	

	<?php 
		
		$titleterm_id = get_queried_object()->term_id;
		$titlepost_id = 'product_cat_'.$titleterm_id;
	
	?>
	
	
	
	<?php if(get_field('sub_product_directory', $titlepost_id)): ?>
	
	


	<div class="category_breadcrumb">
			
		<?php woocommerce_breadcrumb(); ?>
		
	</div><!-- category_breadcrumb -->
	
	
	
	<div class="product_inner">
		
	<?php while(has_sub_field('sub_product_directory', $titlepost_id)): ?>
 		
 		
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
				
				
					<?php $allnewproducts = wp_get_attachment_image_src(get_sub_field('image'), 'allproducts'); ?>
  	    
					<div class="product_background" style="background: rgba(0, 0, 0, 0) url(<?php echo $allnewproducts[0]; ?>) no-repeat scroll center center / cover ;">
						
					</div><!-- product_background -->
		 			
		 			
	 			</a>
	 		
	 		</div><!-- single_product_square -->
	 	
 		<?php endwhile; ?>
 		
	</div><!-- single_product_square -->
 	
 	<?php endif; ?>

</div><!-- product_inner -->
		

	
<?php endif;?>


<!-- Atrribute Filters -->

<div id="outer_wrapper_id" class="outer_wrapper">

	<div class="myfilter_wrapper">
	
			<?php if ( is_active_sidebar('my-product-search-filter')):?>
	
<!--
				<div class="filter_header_wrapper desktop">
				
					<h2 class="my_filter_title">Filter By</h2>
				
				</div>
--><!-- filter_header_wrapper -->
				
				<div class="filter_header_wrapper mobile">
				
					<h2 class="my_filter_title">Filter By</h2>
				
				</div><!-- filter_header_wrapper -->
				
				<ul>
					
						<li class="filter_title_desktop">Filter By</li><!-- filter_title_desktop -->
						<?php dynamic_sidebar('my-product-search-filter');?>
						
					</ul>
		
				
				<?php endif; ?>
				
			</div><!-- myfilter_wrapper -->
		
			<div style="clear:both;"></div>
		
	</div><!-- outer_wrapper -->
	
	
	
	<?php if ( is_active_sidebar('my-product-active-reset')):?>
		
		
			<ul>
				
				
				<?php dynamic_sidebar('my-product-active-reset');?>
				
<!--
				<?php $filterreset = $_SERVER['REQUEST_URI'];
$filterreset = strtok($filterreset, '?'); ?>

				<li class="myreset"><a href="<?php echo $filterreset; ?>">Reset Filter</a></li>
-->
				
				
			</ul>
		
		
		<?php endif;?>


<!-- Product Feed Loop -->
	
	<div class="product_wrapper"> 
		
		
	<?php 
		
		$titleterm_id = get_queried_object()->term_id;
		$titlepost_id = 'product_cat_'.$titleterm_id;
	
	?>
	
	
	
	
	
	<?php if(is_product_category()):?>
	
	
		<?php if(!get_field('sub_product_directory', $titlepost_id)): ?>
	
	

		<div class="productfeed_breadcrumb">
			
			<?php woocommerce_breadcrumb(); ?>
		
		</div><!-- category_breadcrumb -->
	
	
		<?php endif;?>
		
		
	<?php endif;?>	
		
			
		<?php woocommerce_content(); ?>
	
	</div><!-- product_wrapper -->
	
	
<?php if(is_product()):?>


<?php 

$posts = get_field('my_additional_products');

if( $posts ): ?>



<section class="new_arrivals_wrapper">
	
	
	<?php if(get_field('additional_products_title')):?>
	
		<span class="large_header"><?php the_field('additional_products_title');?></span><!-- large_header -->
	
		<?php else:?>
	
		<span class="large_header">you'll also love</span><!-- large_header -->
	
	<?php endif;?>
	
	<img class="prev" src="<?php bloginfo('template_directory');?>/images/arrivals_prev.svg"/>
	<img class="next" src="<?php bloginfo('template_directory');?>/images/arrivals_next.svg"/>
	
	<div class="new_arrival_slideshow">
    
    
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        
        
     <div class="slide">
			
			<a href="<?php the_permalink();?>">
				
				<?php the_post_thumbnail('shop_catalog');?>
				<span class="new_arrival_title"><?php the_title();?></span>
				<span><?php echo $product->get_price_html(); ?></span>
				<?php woocommerce_template_loop_add_to_cart(); //output the woocommerce loop add to cart button ?>
			
			</a>
			
		</div><!-- slide -->
        
        
        
    <?php endforeach; ?>
    
			</div><!-- new_arrival_slideshow -->
	
</section><!-- new_arrivals_wrapper -->
		
		
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>




<div class="member_banner">
	
	<div class="inner_banner_content">
		
		<span class="sub_header">become a member</span><!-- sub_header -->
		<span class="large_header">keyholder club</span><!-- large_header -->
		
		<span class="transparent_button">Sign Up Today</span>
		
	</div><!-- inner_banner_content -->
	
</div><!-- member_banner -->






<?php endif;?> <!-- end of if single profuct -->
	
	
	
	
	
	


<?php get_footer(); ?>