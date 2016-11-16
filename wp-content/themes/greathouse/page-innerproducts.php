<?php
/**
 * Template Name: Sub Category Products
 
 */

get_header(); ?>


<?php include('banner.php');?>


<div class="allproduct_wrapper">
	
	
<!--
	<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
-->
	
	
<section class="product_categories_wrapper">
	
	
	<div class="product_inner">
	
	<?php if(get_field('sub_product_directory')): ?>
 
		<?php while(has_sub_field('sub_product_directory')): ?>
 		
  	  	
				
		<div class="single_product_square">
			
			
			<?php 
				$queried_object = get_queried_object(); 
				$taxonomy = $queried_object->taxonomy;
				$term_id = $queried_object->term_id;  
				$related_terms = get_sub_field('link', $taxonomy . '_' . $term_id);
			?>
		
			
			<a href="<?php echo get_term_link($related_terms); ?>">
			
				
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

	
	
</div><!-- allproduct_wrapper -->



		
<?php get_footer(); ?>



