<?php
/**
 * Template Name: Design Services
 
 */

get_header(); ?>


<?php include('banner.php');?>


<div class="no_sidebar_wrapper">
	
	<div class="no_sidebar_spacer"></div><!-- no_sidebar_spacer -->

	<div class="no_sidebar_inner">
	
		<span class="large_header_no_sidebar">More than just a furniture store</span><!-- large_header -->
		
		<div class="no_sidebar_content">
	
			<div id="content">
			
				<?php the_field('top_content');?>
				
				
				<section class="team_wrapper">
					
					
					<?php if(get_field('team_pictures')): ?>
 
						<?php while(has_sub_field('team_pictures')): ?>
 
    	
							<div class="single_team_square">
		
								<div class="team_overlay">
			
									<div class="team_inner_wrapper">
				
									<span class="large_header"><?php the_sub_field('team_member_name');?></span><!-- large_header -->
									<span class="sub_header"><?php the_sub_field('team_member_title');?></span><!-- sub_header -->
				
								</div><!-- product_inner_wrapper -->
			
							</div><!-- product_overlay -->
		
						<div class="team_background" style="background: rgba(0, 0, 0, 0) url(<?php the_sub_field('team_member_image');?>) no-repeat scroll left top / cover ;">
							
						</div><!-- product_background -->
		
					</div><!-- single_product_square -->
 
					
				<?php endwhile; ?>
 
			<?php endif; ?>
					
					
		</section><!-- team_wrapper -->
				
				<?php the_field('bottom_content');?>
							
			</div><!-- content -->
	
		</div><!-- no_sidebar_content -->
	
	</div><!-- no_sidebar_inner -->
	
	<div class="no_sidebar_spacer"></div><!-- no_sidebar_spacer -->
		
</div><!-- no_sidebar_wrapper -->

		
<?php get_footer(); ?>




	<?php // get_template_part( 'loop', 'page' ); ?>