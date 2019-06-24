<?php
// theme sub header breadcrumb functions
function hotel_melbourne_curPageURL() {
	
	esc_url( set_url_scheme( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ) );
}

if( !function_exists('hotel_melbourne_breadcrumbs') ):
	function hotel_melbourne_breadcrumbs() { 
			
		global $post;
		$homeLink = home_url();
	?>

		<div class="page-title-section">
	 <div class="page-title-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 page-header-title">
						   <?php if (is_home() || is_front_page()) :
									echo '<div class="col-md-6 page-header-title">
					<h1 class="wow fadeInLeft" data-wow-duration="2s">'.__('Home','hotel-melbourne').'</h1></div>';
								else:
									hotel_melbourne_archive_title();
								endif;
						   ?>
						</div>
						<div class=" col-md-6 page-breadcrumbs">
							<?php
								echo '<ol class="top-breadcrumb breadcrumbs wow fadeInRight" data-wow-duration="2s">';
								
								 if (is_home() || is_front_page()) :
								    echo '<li><a href="'.esc_url($homeLink).'">'.__('Home','hotel-melbourne').'</a></li>';
									echo '<li class="active"><a href="'.esc_url($homeLink).'">'.get_bloginfo( 'name' ).'</a></li>';
								 else:
									echo '<li><a href="'.esc_url($homeLink).'">'.__('Home','hotel-melbourne').'</a></li>';
									// Blog Category
									if ( is_category() ) {
										echo '<li class="active"><a href="'. hotel_melbourne_curPageURL() .'">' . __('Archive category','hotel-melbourne').' "' . single_cat_title('', false) . '"</a></li>';

									// Blog Day
									} elseif ( is_day() ) {
										echo '<li class="active"><a href="'. get_year_link(get_the_time('Y')) . '">'. get_the_time('Y') .'</a>';
										echo '<li class="active"><a href="'. get_month_link(get_the_time('Y'),get_the_time('m')) .'">'. get_the_time('F') .'</a>';
										echo '<li class="active"><a href="'. hotel_melbourne_curPageURL() .'">'. get_the_time('d') .'</a></li>';

									// Blog Month
									} elseif ( is_month() ) {
										echo '<li class="active"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>';
										echo '<li class="active"><a href="'. hotel_melbourne_curPageURL() .'">'. get_the_time('F') .'</a></li>';

									// Blog Year
									} elseif ( is_year() ) {
										echo '<li class="active"><a href="'. hotel_melbourne_curPageURL() .'">'. get_the_time('Y') .'</a></li>';

									// Single Post
									} /*elseif ( is_single() && !is_attachment() ) {
										
										// Custom post type
										if ( get_post_type() != 'post' ) {
											$cat = get_the_category(); 
											$cat = $cat[0];
											echo '<li>';
												echo get_category_parents($cat, TRUE, '');
											echo '</li>';
											echo '<li class="active"><a href="' . hotel_melbourne_curPageURL() . '">'. wp_title( '',false ) .'</a></li>';
										} } */ 
										elseif ( is_page() && $post->post_parent ) {
										$parent_id  = $post->post_parent;
										$breadcrumbs = array();
										while ($parent_id) {
											$page = get_page($parent_id);
											$breadcrumbs[] = '<li class="active"><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
											$parent_id  = $page->post_parent;
										}
										$breadcrumbs = array_reverse($breadcrumbs);
										foreach ($breadcrumbs as $crumb) echo $crumb;
										
										echo '<li class="active"><a href="' . hotel_melbourne_curPageURL() . '">'. get_the_title() .'</a></li>';
									}
									elseif( is_search() )
									{
										echo '<li class="active"><a href="' . hotel_melbourne_curPageURL() . '">'. get_search_query() .'</a></li>';
									}
									elseif( is_404() )
									{
										echo '<li class="active"><a href="' . hotel_melbourne_curPageURL() . '">404 Error</a></li>';
									}
									else { 
										// Default
										echo '<li class="active"><a href="' . hotel_melbourne_curPageURL() . '">'. get_the_title() .'</a></li>';
									}
								endif;
								
								echo '</ol>'
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page-seperate"></div>
		<div class="clearfix"></div>
	<?php }
endif
?>