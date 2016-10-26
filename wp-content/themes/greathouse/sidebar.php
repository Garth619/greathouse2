<div class="sidebar_wrapper">
		
		<div class="discount_wrapper">
			
			<a href="">
				
				<span class="sale_title">sale</span><!-- sale_title -->
				<div class="blue_box"></div><!-- blue_box -->
				<span class="discount_description">take 25% off bedding</span><!-- discount_description -->
				
				<a href="<?php bloginfo('url');?>/all-products" class="blue_shop">Shop Now</a>
			
			</a>
			
		</div><!-- discount_wrapper -->
		
		<div id="sidebar">
			
	<ul>
		
		
		
		
		<?php if ( is_active_sidebar('my-sidebar-menu')):?>
	
								

					
					
						<?php dynamic_sidebar('my-sidebar-menu');?>
						
						
	<?php endif;?>

		
		
		
		
			
<!--
	<?php

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;       
        echo '<li><a href="' . get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</li>';

        $args2 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $category_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
            foreach($sub_cats as $sub_category) {
                echo '<li><a href="' . get_term_link($sub_category->slug, 'product_cat') . '">' . $sub_category->name . '</a></li>' ;
                // echo apply_filters( 'woocommerce_subcategory_count_html', ' <span class="cat-count">' . $sub_category->count . '</span>', $category );
            }   
        }
    }       
}
?>
-->

	</ul>
			
<!--
			<ul>
				<li><a href="<?php bloginfo('url');?>/furniture-cat/outdoor-patio">Patio</a></li>
				<li><a href="<?php bloginfo('url');?>/furniture-cat/sofas">Sofas</a></li>
				<li><a href="<?php bloginfo('url');?>/furniture-cat/accessories">Accessories</a></li>
				<li><a href="<?php bloginfo('url');?>//furniture-cat/bedroom">Bedroom</a></li>
				<li><a href="<?php bloginfo('url');?>/furniture-cat/dining">Dining Room</a></li>
				<li><a href="<?php bloginfo('url');?>/furniture-cat/living-room">Living Room</a></li>
				<li><a href="<?php bloginfo('url');?>/furniture-cat/home-office">Office</a></li>
				<li><a href="<?php bloginfo('url');?>/furniture-cat/pool-tables">Pool Tables</a></li>
				<li><a href="<?php bloginfo('url');?>/furniture-cat/rugs">Rugs</a></li>
			</ul>
-->
			
		</div><!-- sidebar -->
		
	</div><!-- sidebar_wrapper -->