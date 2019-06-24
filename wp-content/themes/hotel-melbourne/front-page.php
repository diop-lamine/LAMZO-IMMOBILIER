<?php
$melbourne_option=hotel_melbourne_theme_default_data(); 
$front_page_options = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_option );
if ($front_page_options['front_page_enabled']=="1" && is_front_page()) {

get_header();

	/****** Home Slider ******/
	get_template_part('home','slider');
			  
	/****** Home colout ******/
	get_template_part('home','service');

	/****** Home gallery ******/
	get_template_part('home','gallery');
	 
	/****** Home blog ******/
	get_template_part('home','blog');

get_footer();
} else {
		if(is_page())
		{ get_template_part('page'); } 
		else { get_template_part('index'); } }
?>