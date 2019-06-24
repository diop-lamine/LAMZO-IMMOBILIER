<?php
/*
 * hotel-melbourne Archive Title
 */
 if ( ! function_exists( 'hotel_melbourne_archive_title' ) ) :
function hotel_melbourne_archive_title( $before = '
					<h1>', $after = '</h1>' ) {
	if( is_archive() )
	{
	
	if ( is_category() ) {
		$title = sprintf( __( 'Category Archives: %s', 'hotel-melbourne' ), '<span>' . single_cat_title( '', false ) . '</span>' );
	} elseif ( is_tag() ) {
		$title = sprintf( __( 'Tag Archives: %s', 'hotel-melbourne' ), '<span>' . single_tag_title( '', false ) . '</span>' ); 
	} elseif ( is_author() ) {
		$title = sprintf( __( 'Author Archives: %s', 'hotel-melbourne' ), '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a>' ); 
	} elseif ( is_year() ) {
		$title = sprintf( __( 'Yearly Archives: %s', 'hotel-melbourne' ), get_the_date( _x( 'Y', 'yearly archives date format', 'hotel-melbourne' ) ) );
	} elseif ( is_month() ) {
		$title = sprintf( __( 'Monthly Archives: %s', 'hotel-melbourne' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'hotel-melbourne' ) ) );
	} elseif ( is_day() ) {
		$title = sprintf( __( 'Daily Archives: %s', 'hotel-melbourne' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'hotel-melbourne' ) ) );
	}  elseif ( is_post_type_archive() ) {
		$title = sprintf( __( 'Archives: %s', 'hotel-melbourne' ), post_type_archive_title( '', false ) );
	}
	} elseif( is_search() )
	{
		$title = sprintf( __( 'Search Results for : %s', 'hotel-melbourne' ), get_search_query() );
	}
	elseif( is_404() )
	{
		$title = sprintf( __( 'Error 404  : Page Not Found', 'hotel-melbourne' ) );
	}
	else
	{
		echo '<h1 class="pagetitle white wow bounceInLeft animated" data-wow-delay="0.4s">'.get_the_title().'</h1>';
	}	
	/**
	 * Filter the archive title.
	 *
	 * @param string $title Archive title to be displayed.
	 */
	//$title = apply_filters( 'get_the_archive_title', $title );

	if ( ! empty( $title ) ) {
		echo $before . $title . $after;
	}
}
endif;


// Site Footer Function
// Contains the closing of the #content div and all content after
function hotel_melbourne_wp_footer () { ?>
<!-----Footer-------------------------------->
<footer class="footer wow fadeInUp" data-wow-duration="2s" id="footer-1">
<div class="overlay links-social">
<div class="container container-class">
<div class="links-social-inner">
<div class="row">						
	<div class="link-groups wow fadeInUp" data-wow-duration="3s">
		<?php
			$melbourne_options=hotel_melbourne_theme_default_data(); 
			$footer_setting = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options );
			
		if ( is_active_sidebar( 'footer-widget-area' ) )
			{ 
				dynamic_sidebar( 'footer-widget-area' ); 
				} else { 
				$args = array(
				'before_widget' => '<div class="col-sm-3">
			<div class="links">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',);
				the_widget('WP_Widget_Calendar', 'title=Calendar', $args);
				the_widget('WP_Widget_Archives', null, $args);
				the_widget('WP_Widget_Categories', null, $args);
				the_widget('WP_Widget_Recent_Posts', null, $args);
						 } ?>
	</div><!-- /.row -->
   </div>
  </div><!-- /.container -->
</div>
</div>
</footer>
<style>
.footer {
    background: url(<?php  echo esc_url($footer_setting['footer_bg_image']); ?>) no-repeat fixed 0 0 / cover rgba(0, 0, 0, 0);
}
</style>
<!--Copyright---->
 <div class="copyright"> 
    <div class="widget-content">
		<div class="newsletter">
			<ul class="social list-unstyled bordered big wow fadeInUp" data-wow-duration="3s">
			<?php
				
				if($footer_setting['header_social_media_enabled']== 0 ) {
					if($footer_setting['social_media_facebook_link'] != '') { ?>
				<li><a href="<?php echo esc_url($footer_setting['social_media_facebook_link']); ?>"<?php if( $footer_setting['facebook_media_enabled'] ==1 ) { echo "target='_blank'"; } ?> class="facebook wow shake" data-wow-iteration="infinite" data-wow-duration="1500ms"><i class="fa fa-facebook"></i></a></li>
				<?php } if($footer_setting['social_media_twitter_link']!='') { ?>
				<li><a href="<?php echo esc_url($footer_setting['social_media_twitter_link']); ?>"<?php if( $footer_setting['twitter_media_enabled'] ==1 ) { echo "target='_blank'"; } ?> class="twitter wow shake" data-wow-iteration="infinite" data-wow-duration="1500ms"><i class="fa fa-twitter"></i></a></li>
				<?php } if($footer_setting['social_media_google_link']!='') { ?>
				<li><a href="<?php echo esc_url($footer_setting['social_media_google_link']); ?>"<?php if( $footer_setting['google_media_enabled'] ==1 ) { echo "target='_blank'"; } ?> class="googleplus wow shake" data-wow-iteration="infinite" data-wow-duration="1500ms"><i class="fa fa-google-plus"></i></a></li>
				<?php } if($footer_setting['social_media_linkedin_link']!='') { ?>
				<li><a href="<?php echo esc_url($footer_setting['social_media_linkedin_link']); ?>"<?php if( $footer_setting['linkedin_media_enabled'] ==1 ) { echo "target='_blank'"; } ?> class="linkedin wow shake" data-wow-iteration="infinite" data-wow-duration="1500ms"><i class="fa fa-linkedin"></i></a></li>
				<?php } } else { echo""; } ?>
			</ul>
		</div>
	</div>
	<p><?php if($footer_setting['footer_customization_text'] !='') { echo esc_attr($footer_setting['footer_customization_text']); } 
			if($footer_setting['footer_customization_develop'] !='') { echo "-" .esc_attr($footer_setting['footer_customization_develop']); } ?> 
			<a target="_blank" class="footLink" rel="nofollow" href="<?php if($footer_setting['develop_by_link'] !='') { echo esc_url($footer_setting['develop_by_link']); } ?>"><?php if($footer_setting['develop_by_name'] !='') { echo esc_attr($footer_setting['develop_by_name']); } ?></a></p>
	
 </div>	
<!--Scroll To Top--> 
    <a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top--> 
</div>
<!--/Scroll To Top-->
<?php
} // end of melbourne_wp_footer
if ( ! function_exists( 'hotel_melbourne_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function hotel_melbourne_content_nav( $nav_id ) {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'post-navigation' : 'paging-navigation';
	?>
	<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?>">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'hotel-melbourne' ); ?></h1>

	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'hotel-melbourne' ) . '</span> %title' ); ?>
		<?php next_post_link( '<div class="nav-next">%link</div>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'hotel-melbourne' ) . '</span>' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'hotel-melbourne' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'hotel-melbourne' ) ); ?></div>
		<?php endif; ?>

	<?php endif; ?>
		<div class="clear"></div>
	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; 

/***** Blog-Detail Page Author Detail *****/ 
if ( ! function_exists( 'hotel_melbourne_author_detail' ) ) :
function hotel_melbourne_author_detail() { ?>
	<article class="blog-author" data-aos="fade-up"  data-aos-duration="1500">
		<div class="media ">
			<div class="pull-left">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ),'class="img-responsive img-circle"' ); ?>
			</div>
				<div class="media-body">
					<h6><?php the_author_link(); ?></h6>
						<p><?php echo get_the_author_meta( 'description' );if(!get_the_author_meta('description')) _e('No description.Please update your profile.','hotel-melbourne'); ?></p>
				</div>
		</div>	
	</article>
<?php 
} endif;

function hotel_melbourne_get_blog_excerpt(){
	global $post;
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$original_len = strlen($excerpt);
	$excerpt = substr($excerpt, 0, 150);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$len=strlen($excerpt);
	 if($original_len>150)
	   $excerpt = $excerpt.'<br /><a class="main-btn-blog wow bounceInLeft animated" data-wow-delay="0.4s" href="'. get_permalink($post->ID) . '">'.__('Read More','hotel-melbourne').'</a>';
	return $excerpt;

	return $excerpt;
}

if ( ! function_exists( 'hotel_melbourne_the_custom_logo' ) ) :

function hotel_melbourne_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;  ?>