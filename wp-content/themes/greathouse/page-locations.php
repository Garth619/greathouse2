<?php
/**
 * Template Name: Locations
 
 */

get_header(); ?>


<?php include('banner.php');?>


<div class="container_wrapper">
	
	<div class="container">
		
		<div id="content">
			
			
			<div class="locations_wrapper">
				
				<div class="location">
					
					<div class="location_content">
					
						<span class="large_header"><?php the_field('city_title_1');?></span>
						<a class="sub_header" href="<?php the_field('location_1_address_link');?>"><?php the_field('location_1_address');?></a>
						<a class="locations_phone" href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a>
						<a href="<?php the_field('location_1_address_link');?>" class="locations_directions">Get Directions</a><!-- locations_directions -->
					
					</div><!-- location_content -->
					
					<?php the_field('google_map_1');?>
										
					
					
				</div><!-- location -->
				
				
				<div class="location">
					
					<div class="location_content">
					
						<span class="large_header"><?php the_field('city_title_2');?></span>
						<a class="sub_header" href="<?php the_field('location_2_address_link');?>"><?php the_field('location_2_address');?></a>
						<a class="locations_phone" href="tel:<?php the_field('phone_number_2');?>"><?php the_field('phone_number_2');?></a>
						<a href="<?php the_field('location_2_address_link');?>" class="locations_directions">Get Directions</a><!-- locations_directions -->
					
					</div><!-- location_content -->
					
					<?php the_field('google_map_2');?>
					
				</div><!-- location -->
				
			</div><!-- locations_wrapper -->
			
			<div class="hours_wrapper">
			
			<span class="hours_title">Store Hours</span>
			
			
			<?php if(get_field('store_hours')): ?>
 
				<?php while(has_sub_field('store_hours')): ?>
 
					<span class="hours"><?php the_sub_field('days');?> &nbsp;|&nbsp;  <?php the_sub_field('hours');?></span>
 
				<?php endwhile; ?>
 
			<?php endif; ?>
			
			</div><!-- hours_wrapper -->
			
			
		</div><!-- content -->
		
	</div><!-- container -->
	
	<?php get_sidebar(); ?>
	
</div><!-- container_wrapper -->

<section class="form_wrapper">
	
	<div class="form_inner">
		
		<span class="sub_header">ask us anything</span>
		<span class="large_header">We are here to help</span>
		
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
	</div><!-- form_inner -->
	
</section><!-- form_banner -->

		
<?php get_footer(); ?>
