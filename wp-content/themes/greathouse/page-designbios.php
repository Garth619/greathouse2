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
	
			<div id="content">
			
				
					<?php // get_template_part( 'loop', 'page' ); ?>
					
					<span class="designer_title">designer</span><!-- designer_title -->
					
					<div class="profile_pic"></div><!-- profile_pic -->
				
								
			</div><!-- content -->
	
		</div><!-- no_sidebar_content -->
	
	</div><!-- no_sidebar_inner -->
	
	<div class="no_sidebar_spacer"></div><!-- no_sidebar_spacer -->
		
</div><!-- no_sidebar_wrapper -->

		
<?php get_footer(); ?>




