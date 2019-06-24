<?php
add_action( 'wp_enqueue_scripts', 'vice_theme_css',999);
function vice_theme_css() {
    wp_enqueue_style('appointment-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style('theme-menu', get_template_directory_uri() . '/css/theme-menu.css' );
	wp_enqueue_style('default-css', get_stylesheet_directory_uri()."/css/default.css" );
	wp_enqueue_style('element-style', get_template_directory_uri() . '/css/element.css' );
	wp_enqueue_style('media-responsive', get_template_directory_uri(). '/css/media-responsive.css');
	wp_dequeue_style('appointment-default',get_template_directory_uri() .'/css/default.css');
}
require( get_stylesheet_directory() . '/functions/customizer/customizer_import_data.php' );

add_action('admin_init', 'vice_update_theme');
function vice_update_theme()
{
update_option('template', 'appointment');
}

/*
	 * Let WordPress manage the document title.
	 */
function vice_setup() {
   require( get_stylesheet_directory() . '/functions/customizer/customizer-copyright.php' );
   load_theme_textdomain('vice', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'vice_setup' );

function vice_default_data(){
	return array(
	// general settings
	'footer_copyright_text' => '<p>'.__( '<a href="https://wordpress.org">Proudly powered by WordPress</a> | Theme: <a href="https://webriti.com" rel="designer">Vice</a> by Webriti', 'vice' ).'</p>',
	'footer_menu_bar_enabled' => '',
	'footer_social_media_enabled' => '',
	'footer_social_media_facebook_link' => '#',
	'footer_facebook_media_enabled' => 1,
	'footer_social_media_twitter_link' => '#',
	'footer_twitter_media_enabled'=>1,
	'footer_social_media_linkedin_link' => '#',
	'footer_linkedin_media_enabled'=>1,
	'footer_social_media_googleplus_link' => '#',
	'footer_googleplus_media_enabled' => 1,
	'footer_social_media_skype_link' => '#',
	'footer_skype_media_enabled' => 1,
	
	);
}
?>