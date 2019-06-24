<div class="col-md-4 widget-area">
			<div class="blog-sidebar">
		<?php if ( is_active_sidebar( 'sidebar-data' ) )
				{ dynamic_sidebar( 'sidebar-data' );	} else { 
				$args = array(
				'before_widget' => '<div class="clearfix"></div><div class="widget wow fadeInUp" data-wow-duration="2s">
									<div class="widget wow fadeInUp" data-wow-duration="3s"><ul class="post-content ">',
				'after_widget' => '</ul></div></div>',
				'before_title' => '<div class="sm-widget-title"><h2>',
				'after_title' => '</h2></div>',	);
				the_widget('WP_Widget_Search', 'title=Search', $args);
				the_widget('WP_Widget_Archives', null, $args);
				the_widget('WP_Widget_Recent_Posts', null, $args);
				the_widget('WP_Widget_Calendar', 'title=Calendar', $args);
				the_widget('WP_Widget_Categories', null, $args);
				the_widget('WP_Widget_Tag_Cloud', null, $args);
						 }?>						 
			</div>
</div> 