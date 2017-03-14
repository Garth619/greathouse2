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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=79" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick-theme.css"/>
<?php wp_head(); ?>
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
     
    fbq('init', '177552222639395');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=177552222639395&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49196501-1', 'greathouse.com');
  ga('send', 'pageview');

</script>



<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "FurnitureStore",
    "name": "Greathouse",
    "alternateName": " Greathouse Furniture",
        "description": "San Diego Furniture Store",
    "url" : "http://www.greathouse.com/",
    "logo" : "https://www.greathouse.com/wp-content/themes/greathouse/images/logo.png",
    "image" : "https://www.greathouse.com/wp-content/themes/greathouse/images/logo.png",
    "telephone": " (858) 271-9400",
    "openingHours" : "Mo,Tu,We,Th,Fr 10:00-18:00",
    "hasMap": "https://maps.google.com/?cid=8107737128740527247",
    "address":
         {
         "@type": "PostalAddress",
         "streetAddress": "9050 Kenamar Drive",
         "addressLocality": "San Diego",
         "addressRegion": "CA",
         "postalCode": "92121",
         "addressCountry": "USA"
         },
    "sameAs": [
    "https://www.instagram.com/greathousefp/",
    "http://www.houzz.com/pro/greathousesandiego/greathouse",
    "https://twitter.com/greathousefp",
    "https://plus.google.com/101059326247870466948"
    ]
}
</script>


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
 
