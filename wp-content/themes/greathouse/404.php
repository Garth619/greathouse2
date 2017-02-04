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
						
				<h1 style="margin-top:10px;line-height: 55px;">Page Not Found</h1>
						
					<?php _e( 'Apologies but this page could not be found.', 'twentyten' ); ?></p>
					<div style="margin-bottom:45px;"><?php get_search_form(); ?></div>
				
	
	
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
	
	</div><!-- content -->
		
	</div><!-- container -->
	
	<?php get_sidebar(); ?>
	
</div><!-- container_wrapper -->

<?php get_footer(); ?>