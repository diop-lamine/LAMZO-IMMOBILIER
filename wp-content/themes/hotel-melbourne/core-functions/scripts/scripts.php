<?php
function hotel_melbourne_scripts()
{
	
	$melbourne_options=hotel_melbourne_theme_default_data(); 
	$melbourne_custom_css = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options ); 
	$custom_css= esc_attr($melbourne_custom_css['melbourne_custom_css']);
	
	wp_enqueue_style('hotel-melbourne-style', get_stylesheet_uri());
	wp_add_inline_style( 'hotel-melbourne-style', $custom_css );
	wp_enqueue_style('bootstrap', HOTEL_MELBOURNE_DIR_URI .'/css/bootstrap.css');
	wp_enqueue_style('media-responsive', HOTEL_MELBOURNE_DIR_URI .'/css/media-responsive.css');
	wp_enqueue_style('melbourne-flexslider', HOTEL_MELBOURNE_DIR_URI .'/css/flexslider/flexslider.css');
	wp_enqueue_style('melbourne-photobox', HOTEL_MELBOURNE_DIR_URI .'/css/photobox.css');

	if( $melbourne_custom_css['animation_enabled_disable'] !='' ){
	wp_enqueue_style('animate', HOTEL_MELBOURNE_DIR_URI .'/css/animate.css');
	}

	wp_enqueue_style('fonts', HOTEL_MELBOURNE_DIR_URI .'/css/fonts/fonts.css');
	wp_enqueue_style('font-awesome.min', HOTEL_MELBOURNE_DIR_URI .'/css/font-awesome-4.2.0/css/font-awesome.min.css');
	wp_enqueue_style('fonts-style', '//fonts.googleapis.com/css?family=Arimo:400,600,700,800,300|Fira Exo2:300,400,500,700');

	// <!------Js------------------------------->
	wp_enqueue_script('jquery');
	wp_enqueue_script('hotel-melbourne-content', HOTEL_MELBOURNE_DIR_URI .'/js/content.js');
	wp_enqueue_script('bootstrap', HOTEL_MELBOURNE_DIR_URI .'/js/bootstrap.js');
    wp_enqueue_script('hotel-flickity', HOTEL_MELBOURNE_DIR_URI .'/js/flickity.pkgd.min.js');
	wp_enqueue_script('hotel-melbourne-custom', HOTEL_MELBOURNE_DIR_URI .'/js/custom.js');
	wp_enqueue_script('melbourne-jquery.photobox', HOTEL_MELBOURNE_DIR_URI .'/js/jquery.photobox.js');
	wp_enqueue_script('melbourne-jquery.flexslider', HOTEL_MELBOURNE_DIR_URI .'/js/flexslider/jquery.flexslider.js');
	wp_enqueue_script('melbourne-flexslider-element', HOTEL_MELBOURNE_DIR_URI .'/js/flexslider/flexslider-element.js');

	if( $melbourne_custom_css['animation_enabled_disable'] !='' ){
	wp_enqueue_script('hotel-melbourne-wow', HOTEL_MELBOURNE_DIR_URI .'/js/wow.min.js');
	}

	if( $melbourne_custom_css['smoothscroll_enabled_disable'] !='' ){
	wp_enqueue_script('hotel-melbourne-smoothscroll', HOTEL_MELBOURNE_DIR_URI .'/js/smoothscroll.js');
	}
	
	if ( is_singular() ){ wp_enqueue_script( "comment-reply" );	}
}
add_action('wp_enqueue_scripts', 'hotel_melbourne_scripts');
?>