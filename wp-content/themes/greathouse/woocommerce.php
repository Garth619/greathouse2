<?php
/**
 * Shop
 *

 */

get_header(); ?>

		
		
<div class="myfilter_wrapper">
	
			<?php if ( is_active_sidebar('my-product-search-filter')):?>
	
				<div class="filter_header_wrapper">
				
					<h2 class="my_filter_title">Filter By</h2>
				
				</div><!-- myfilter_wrapper -->

					<ul>
					
						<?php dynamic_sidebar('my-product-search-filter');?>
					
					</ul>
				<?php endif; ?>
	
	
		</div><!-- myfilter_wrapper -->

		<div class="product_wrapper"> 
	
			<?php woocommerce_content(); ?>
	
		</div><!-- product_wrapper -->


<?php get_footer(); ?>