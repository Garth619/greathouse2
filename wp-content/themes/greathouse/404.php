<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="container_wrapper">
	
	<div class="container">
		
		<div id="content">		
						
				<h1>Page Not Found/Or Site is Closed</h1>
						
					<?php _e( 'Apologies, but the page you requested could not be found. Or the site is temporarily closed for development.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
				
	
	
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
	
	</div><!-- content -->
		
	</div><!-- container -->
	
	<?php get_sidebar(); ?>
	
</div><!-- container_wrapper -->

<?php get_footer(); ?>