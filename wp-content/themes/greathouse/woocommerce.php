<?php
/**
 * Shop
 *

 */

get_header(); ?>

<?php include('banner.php');?>	
		
<?php if(is_product_category()):?>

	<?php 
		
		$titleterm_id = get_queried_object()->term_id;
		$titlepost_id = 'product_cat_'.$titleterm_id;
	
	?>
	
	
		


<?php if(get_field('sub_product_directory', $titlepost_id)): ?>
 
	<?php while(has_sub_field('sub_product_directory', $titlepost_id)): ?>
 		
 		
 		<?php 
				$queried_object = get_queried_object(); 
				$taxonomy = $queried_object->taxonomy;
				$term_id = $queried_object->term_id;  
				$related_terms = get_sub_field('link', $taxonomy . '_' . $term_id);
			?>
	

 		
 		
 		<div class="product_inner">
	 		
	 		<div class="single_product_square">
		 	
	 			<a href="<?php echo get_term_link($related_terms); ?>">
		 			
		 			
		 			
		 			<div class="product_overlay">
				
						<div class="product_inner_wrapper">
					
							<span class="large_header"><?php the_sub_field('category_title', $titlepost_id);?></span><!-- large_header -->
							<span class="sub_header">shop now</span><!-- sub_header -->
					
						</div><!-- product_inner_wrapper -->
				
					</div><!-- product_overlay -->
				
				
					<?php $allnewproducts = wp_get_attachment_image_src(get_sub_field('image', $titlepost_id), 'allproducts'); ?>
  	    
					<div class="product_background" style="background: rgba(0, 0, 0, 0) url(<?php echo $allnewproducts[0]; ?>) no-repeat scroll left top / cover ;">
						
					</div><!-- product_background -->
		 			
		 			
	 			</a>
	 		
	 		</div><!-- single_product_square -->
	 	
 		</div><!-- product_inner -->
  	  	
	<?php endwhile; ?>
 
<?php endif; ?>
		

	
<?php endif;?>

<div class="outer_wrapper">

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
	
	
	

		<div class="product_wrapper"> 
			

	
			<?php woocommerce_content(); ?>
	
		</div><!-- product_wrapper -->


<?php get_footer(); ?>