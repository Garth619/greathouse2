<?php if(get_field('blog_page_banners','option')): ?>

	<?php $innerbanner = wp_get_attachment_image_src(get_field('blog_page_banners','option'), 'innerbanner'); ?>
	<div class="banner" style="background:url(<?php echo $innerbanner[0]; ?>) top center no-repeat;background-size:cover;">

<?php else:?>

	<div class="banner">


<?php endif;?>


<!-- Below is changing the color options for the banner text on blog posts -->


	<?php if( get_field('banner_font_color_blog','option') == 'Black' ): ?>

		<h1 style="color:#000;">Blog</h1>
		
	<?php endif;?>
	
	<?php if( get_field('banner_font_color_blog','option') == 'White' ): ?>

		<h1 style="color:#fff">Blog</h1>
		
	<?php endif;?>
	
	<?php if( get_field('banner_font_color_blog','option') == 'Blue' ): ?>

		<h1 style="color:#79b7c0">Blog</h1>
		
	<?php endif;?>
	

</div><!-- banner -->


