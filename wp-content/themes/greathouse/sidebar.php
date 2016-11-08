<div class="sidebar_wrapper">
	
	
		
		<div class="discount_wrapper" style="background: rgba(0, 0, 0, 0) url(<?php the_field('sidebar_discount_image','option');?>) no-repeat scroll center center / cover ;">
			
			
				
				<span class="sale_title"><?php the_field('discount_top_header','option');?></span><!-- sale_title -->
				<div class="blue_box"></div><!-- blue_box -->
				<span class="discount_description"><?php the_field('discount_header','option');?></span><!-- discount_description -->
				
				<a href="<?php the_field('discount_button_link','option');?>" class="blue_shop"><?php the_field('discount_button_text','option');?></a>
			
			
			
		</div><!-- discount_wrapper -->
		
		<div id="sidebar">
			

		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

			
		</div><!-- sidebar -->
		
	</div><!-- sidebar_wrapper -->