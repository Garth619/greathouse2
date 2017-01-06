<!-- Banners for the Inner Staic Pages. -->


<?php if(is_page_template( array('page-inner.php','page-locations.php','page-allproducts.php', 'page-designservices.php', 'page-innerproducts.php',))) { ?>

	<?php if(get_field('inner_page_banners')): ?>

		<?php $innerbanner = wp_get_attachment_image_src(get_field('inner_page_banners'), 'innerbanner'); ?>
		<div class="banner" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url(<?php echo $innerbanner[0]; ?>) top center no-repeat;background-size:cover;">

		<?php else:?>

		<div class="banner">


		<?php endif;?>


<!-- Below is changing the color options for the banner text on inner pages -->


		<?php if( get_field('banner_font_color') == 'Black' ): ?>

			<span style="color:#000;"><?php the_title();?></span>
		
			<?php elseif( get_field('banner_font_color') == 'White' ): ?>

				<span style="color:#fff"><?php the_title();?></span>
		
			<?php elseif( get_field('banner_font_color') == 'Blue' ): ?>

				<span style="color:#79b7c0"><?php the_title();?></span>
		
			<?php else:?>
			
				<span style="color:#fff;"><?php the_title();?></span>
		
		<?php endif;?>

	</div><!-- banner -->


<?php } ?>


<!-- End of Banners for the Inner Staic Pages. -->


	
<!-- Shop Archive Page -->

<?php if(is_post_type_archive('product')):?>


		
		
		
	<?php if(get_field('shop_page_banner','option')): ?>
		
		<?php $innerbanner = wp_get_attachment_image_src(get_field('shop_page_banner','option'), 'innerbanner'); ?>
		<div class="banner" style="background:linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)),url(<?php echo $innerbanner[0]; ?>) top center no-repeat;background-size:cover;">

		<?php else:?>

		<div class="banner">


		<?php endif;?>
		
		<!-- Below is changing the color options for the banner text on inner pages -->


		<?php if( get_field('shop_banner_font_color','option') == 'Black' ): ?>

			<span style="color:#000;"><?php the_field('shop_banner_title','option');?></span>
		
			<?php elseif( get_field('shop_banner_font_color','option') == 'White' ): ?>

				<span style="color:#fff"><?php the_field('shop_banner_title','option');?></span>
		
			<?php elseif( get_field('shop_banner_font_color','option') == 'Blue' ): ?>

				<span style="color:#79b7c0"><?php the_field('shop_banner_title','option');?></span>
		
			<?php else:?>
			
				<span style="color:#fff;"><?php the_field('shop_banner_title','option');?></span>
		
		<?php endif;?>

	</div><!-- banner -->
		






<?php endif;?>
	


<!-- Start of Product Catergory Banners -->


<?php if(is_product_category()):?>


<?php

$term_id = get_queried_object()->term_id;
$post_id = 'product_cat_'.$term_id;
$catbannertitle = get_field('product_category_banner_font_color', $post_id); // My Advanced Custom Field Variable
$catbannerimage = get_field('product_category_page_banners', $post_id); // My Advanced Custom Field Variable

?>


<?php if(get_field('product_category_page_banners', $post_id)) : ?>



<div class="banner" style="background:linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)),url(<?php echo get_field('product_category_page_banners', $post_id);?>) top center no-repeat;background-size:cover;">


<?php else: ?>


<div class="banner">


<?php endif;?>
		
		<?php if( get_field('product_category_banner_font_color', $post_id) == 'Black' ): ?>

				<span style="color:#000;"><?php single_cat_title(); ?></span>
		
			<?php elseif( get_field('product_category_banner_font_color', $post_id) == 'White' ): ?>

				<span style="color:#fff"><?php single_cat_title(); ?></span>
		
		
	
			<?php elseif( get_field('product_category_banner_font_color', $post_id) == 'Blue' ): ?>

				<span style="color:#79b7c0"><?php single_cat_title(); ?></span>
		
			<?php else:?>
			
			
			
				<span style="color:#fff;"><?php single_cat_title(); ?></span>
			
			
		<?php endif;?>
		
		
	</div><!-- banner -->

	

<?php endif;?>


<!-- End Banners for the Product Category Pages. -->

