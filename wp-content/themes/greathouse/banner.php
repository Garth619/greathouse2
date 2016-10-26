<!-- Banners for the Inner Staic Pages. -->

<?php if(get_field('inner_page_banners')): ?>

	<?php $innerbanner = wp_get_attachment_image_src(get_field('inner_page_banners'), 'innerbanner'); ?>
	<div class="banner" style="background:url(<?php echo $innerbanner[0]; ?>) top center no-repeat;background-size:cover;">

<?php else:?>

	<div class="banner">


<?php endif;?>

<?php if(is_product_category()):?>

<?php

$term_id = get_queried_object()->term_id;
$post_id = 'product_cat_'.$term_id;
$catbannertitle = get_field('product_category_banner_font_color', $post_id); // My Advanced Custom Field Variable

?>

	<?php if( get_field('product_category_banner_font_color', $post_id) == 'Black' ): ?>

				<span style="color:#000;"><?php single_cat_title(); ?></span>
		
			
	
			<?php elseif( get_field('product_category_banner_font_color', $post_id) == 'White' ): ?>

				<span style="color:#fff"><?php single_cat_title(); ?></span>
		
		
	
			<?php elseif( get_field('product_category_banner_font_color', $post_id) == 'Blue' ): ?>

				<span style="color:#79b7c0"><?php single_cat_title(); ?></span>
		
			<?php else:?>
			
			
				<span style="color:#000;"><?php single_cat_title(); ?></span>
			
			
			<?php endif;?>
	
	

	

<?php endif;?> <!-- product category -->

<!-- Below is changing the color options for the banner text on inner pages -->


	<?php if( get_field('banner_font_color') == 'Black' ): ?>

		<span style="color:#000;"><?php the_title();?></span>
		
	<?php endif;?>
	
	<?php if( get_field('banner_font_color') == 'White' ): ?>

		<span style="color:#fff"><?php the_title();?></span>
		
	<?php endif;?>
	
	<?php if( get_field('banner_font_color') == 'Blue' ): ?>

		<span style="color:#79b7c0"><?php the_title();?></span>
		
	<?php endif;?>
	


	
</div><!-- banner -->

