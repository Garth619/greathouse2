<?php
/**
 * Template Name: Design Bios
 
 */

get_header(); ?>


<?php include('banner.php');?>


<div class="no_sidebar_wrapper">
	
	<div class="no_sidebar_spacer"></div><!-- no_sidebar_spacer -->

	<div class="no_sidebar_inner">
	
		<span class="large_header_no_sidebar"><?php the_title();?></span><!-- large_header -->
		
		<div class="no_sidebar_content">
	
			
					
					<span class="designer_title"><?php the_field('designer_bios_job_title');?></span><!-- designer_title -->
					
					<div class="profile_pic">
						
						<img src="<?php the_field('designer_image');?>"/>
						
					</div><!-- profile_pic -->
					
					<div id="content">
					
					<?php the_field('designer_bio_genernal_content');?>
					
			
							<?php if(get_field('before_and_afters')): ?>
							
								<div class="design_projects">
						
								<h1><?php the_field('before_and_after_title');?></h1>
						
								<span class="designer_title"> <?php the_field('before_and_after_sub_title');?></span>
							 
								<?php while(has_sub_field('before_and_afters')): ?>
							 
									<div class="before_after_wrapper">
							
										<?php if(get_sub_field('before_after_images')): ?>
											
											<div class="single">
							 
												<?php while(has_sub_field('before_after_images')): ?>
								
													<img src="<?php the_sub_field('before_after_image');?>"/>
												
												<?php endwhile; ?>
												
											</div><!-- single -->
							 
										<?php endif; ?>
											
											<h2><?php the_sub_field('project_title');?></h2>
								
											<?php the_sub_field('project_content');?>						
								
									</div><!-- before_after_wrapper -->

								<?php endwhile; ?>
							 
							<?php endif; ?>
	
					
					</div><!-- design_projects -->
				
								
			</div><!-- content -->
	
		</div><!-- no_sidebar_content -->
	
	</div><!-- no_sidebar_inner -->
	
	<div class="no_sidebar_spacer"></div><!-- no_sidebar_spacer -->
		
</div><!-- no_sidebar_wrapper -->

		
<?php get_footer(); ?>




