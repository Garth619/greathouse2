<?php
/**

 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=68" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick-theme.css"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	
	<!-- pre_loader -->

		<header>
				
				<div class="inner_header">
					
					<div class="header_special_deal">
					
					<?php the_field('header_discount_mobile_version','option');?>
					<?php the_field('header_discount_desktop_version','option');?>
						

						
					
					</div><!-- header_special_deal -->
					
					
					<div class="mobile_fixed_wrapper">
					
						<div class="header_options">
							
							<div class="header_options_inner">
							
								<img class="search_img mobile" src="<?php bloginfo('template_directory');?>/images/search.png"/>
								
								
							
								<div class="cart_signin_wrapper">
								
									<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
									<a href="<?php bloginfo('url');?>/my-account">Login</a>
								
								</div><!-- header_options_inner -->
								
							</div><!-- cart_signin_wrapper -->
							
							
							
							
						</div><!-- header_options -->
						
						<div class="header_logo_nav_wrapper">
							
							
							<div class="logo_wrapper">
							
								<a href="<?php bloginfo('url');?>">
									<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/>
								</a>
							
							</div><!-- logo_wrapper -->
						
							<div class="mobile_menu_wrapper">
								
								<div class="menu_bar"></div><!-- menu_bar -->
								<div class="menu_bar"></div><!-- menu_bar -->
								<div class="menu_bar"></div><!-- menu_bar -->
								
							</div><!-- mobile_menu_wrapper -->
							
							
							<nav class="desktop_menu_wrapper">
								
								
															
								<div class="desktop_menu">
									
									<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
								
								</div><!-- desktop_menu -->
								
								
								<div class="cart_signin_wrapper">
									
							
										<img class="search_img desktop" src="<?php bloginfo('template_directory');?>/images/search.png"/>
										
										
										<?php if ( is_active_sidebar('cart-area')):?>
										
											<ul class="mycart">
										
											
												<?php dynamic_sidebar('cart-area');?>

											
											</ul>
										
										
										<?php endif;?>
										
									
									
									
									
<!-- 									<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a> -->
									<a class="mylogin" href="<?php bloginfo('url');?>/my-account">Login</a>
								

									
								</div><!-- cart_signin_wrapper -->
								
								
								
								<div class="mysearch_wrapper desktop">
									
										<?php  echo do_shortcode('[yith_woocommerce_ajax_search]'); ?>
									
									</div><!-- mysearch_wrapper -->
								
							
							</nav><!-- desktop_menu_wrapper -->
							
						</div><!-- header_logo_nav_wrapper -->
						
						
						
						<div class="mobile_dropdown_wrapper">
					
					
					<div class="mobile_dropdown_inner">
					
						<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
					
					</div>
					
					
				</div><!-- mobile_dropdown_wrapper -->
						
						
					
					<div class="mysearch_wrapper mobile">
									
								<div class="mysearch_inner_wrapper">
								
									<?php  echo do_shortcode('[yith_woocommerce_ajax_search]'); ?>
								
								</div><!-- mysearch_inner_wrapper -->
									
							</div><!-- mysearch_wrapper -->
					
					
					
					</div><!-- mobile_fixed_wrapper -->
				
					
				</div><!-- inner_header -->
				
				
				
			</header>
			
			<main>
 
