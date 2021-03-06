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

					 
<?php $posts = get_field('team_bio_pictures');

if( $posts ): ?>
    
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        

						<div class="single_team_square">
							
							<a href="<?php the_permalink();?>">
		
								<div class="team_overlay">
			
									<div class="team_inner_wrapper">
				
									<span class="large_header"><?php the_title();?></span><!-- large_header -->
									<span class="sub_header"><?php the_field('designer_bios_job_title');?></span><!-- sub_header -->
				
								</div><!-- team_inner_wrapper -->
			
							</div><!-- team_overlay -->
		
						<div class="team_background" style="background: rgba(0, 0, 0, 0) url(<?php the_field('designer_image');?>) no-repeat scroll center center / cover ;">
							
						</div><!-- product_background -->
		
						</a>
					
					</div><!-- single_product_square -->
				

				<?php endforeach; ?>
    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
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