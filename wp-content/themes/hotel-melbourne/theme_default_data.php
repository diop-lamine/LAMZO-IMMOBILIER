<?php 
function hotel_melbourne_theme_default_data()
  	{
	return $melbourne_option=array(
	
	'front_page_enabled' => 1,
	
	'header_text_enabled' => 1,
	'header_info_phone' =>get_theme_mod('header_info_phone',__('(2)245 23 68','hotel-melbourne')),
	'header_info_mail'=> get_theme_mod('header_info_mail',__('exampl@gmail.com','hotel-melbourne')),

	/* Breadcrumb default image */
	'title_strip_img' => get_template_directory_uri().'/images/page-header-bg.jpg',	
	
	'melbourne_custom_css'=> '',

	//Default page layout
	'hotel_melbourne_sidebar_layout_option' => get_theme_mod('hotel_melbourne_sidebar_layout_option',__('default-sidebar','hotel-melbourne')),
	
	//Slider settings
	'home_banner_enabled' => 1,
	'slideshowSpeed' => 2000,
	'slider_image_one' => get_template_directory_uri().'/images/slide/slide1.jpg',
	'slider_image_title_one' => get_theme_mod('slider_image_title_one',__('melbourne Responsive','hotel-melbourne')),
	'slider_image_description_one' => get_theme_mod('slider_image_description_one',__('Duis autem vel eum iriure dolor in hendrerit in vulputate.','hotel-melbourne')),
		
	'slider_image_two' => get_template_directory_uri().'/images/slide/slide2.jpg',
	'slider_image_title_two' => get_theme_mod('slider_image_title_two',__('melbourne Responsive','hotel-melbourne')),
	'slider_image_description_two' => get_theme_mod('slider_image_description_two',__('Duis autem vel eum iriure dolor in hendrerit in vulputate.','hotel-melbourne')),
		
	'slider_image_three' => get_template_directory_uri().'/images/slide/slide3.jpg',
	'slider_image_title_three' => get_theme_mod('slider_image_title_three',__('melbourne Responsive','hotel-melbourne')),
	'slider_image_description_three' => get_theme_mod('slider_image_description_three',__('Duis autem vel eum iriure dolor in hendrerit in vulputate.','hotel-melbourne')),
	
	'slider_button_text' => get_theme_mod('slider_button_text',__('More Details!','hotel-melbourne')),
	'slider_image_link' => '#',
	'slider_button_tab' => 1,
	
	//Service section settings
	'service_section_enabled' => 1,
	'service_heading_title' => get_theme_mod('service_heading_title',__('Why Choose Us','hotel-melbourne')),
	'service_heading_description' => get_theme_mod('service_heading_description',__('Lorem ipsum dolor sit amet.','hotel-melbourne')),
	
	'service_one_icon' => 'fa-desktop',
	'service_one_title'=>get_theme_mod('service_one_title',__('Responsive','hotel-melbourne')),
	'service_one_description' => get_theme_mod('service_one_description',__('Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.','hotel-melbourne')),
	
	'service_two_icon' => 'fa-leaf',
	'service_two_title'=>get_theme_mod('service_two_title',__('Print Design','hotel-melbourne')),
	'service_two_description' => get_theme_mod('service_two_description',__('Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.','hotel-melbourne')),

	'service_three_icon' => 'fa-cogs',
	'service_three_title'=>get_theme_mod('service_three_title',__('Easy to Customize','hotel-melbourne')),
	'service_three_description' => get_theme_mod('service_three_description',__('Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.Lorem Ipsum which looks reason able. The generated Lorem Ipsum is therefore always free.','hotel-melbourne')),
	
	//Project Portfolio Section
	'enable_home_portfolio' => 1,
	'portfolio_title_one' => get_theme_mod('portfolio_title_one',__('Recent Works','hotel-melbourne')),
	'portfolio_title_desc_one' => get_theme_mod('portfolio_title_desc_one',__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','hotel-melbourne')),
	
	'upload_image_one' => get_template_directory_uri().'/images/gallery/1.jpg',
	'portfolio_image_one_title' => get_theme_mod('portfolio_image_one_title',__('melbourne Responsive','hotel-melbourne')),
	'portfolio_price_one' => get_theme_mod('portfolio_price_one',__('199.00$/-','hotel-melbourne')),
	'portfolio_time_section_one' => get_theme_mod('portfolio_time_section_one',__('Day / Night','hotel-melbourne')),
	'portfolio_button_text_one' => get_theme_mod('portfolio_button_text_one',__('View Room','hotel-melbourne')),
	'portfolio_image_one_link' => '#',
	'portfolio_new_tab' => 1,
	
	'upload_image_two' => get_template_directory_uri() .'/images/gallery/2.jpg',
	'portfolio_image_two_title' => get_theme_mod('portfolio_image_two_title',__('Awesome Layout','hotel-melbourne')),
	'portfolio_price_two' => get_theme_mod('portfolio_price_two',__('500.00$/-','hotel-melbourne')),
	'portfolio_time_section_two' => get_theme_mod('portfolio_time_section_two',__('Night / Day','hotel-melbourne')),
	'portfolio_button_text_two' => get_theme_mod('portfolio_button_text_two',__('View Room 2','hotel-melbourne')),
	'portfolio_image_two_link' => '#',
	'portfolio_two_new_tab' => 1,
	
	'upload_image_three' => get_template_directory_uri() .'/images/gallery/3.jpg',
	'portfolio_image_three_title' => get_theme_mod('portfolio_image_three_title',__('melbourne Responsive','hotel-melbourne')),
	'portfolio_price_three' => get_theme_mod('portfolio_price_three',__('10000.00$/-','hotel-melbourne')),
	'portfolio_time_section_three' => get_theme_mod('portfolio_time_section_three',__('Per Hour','hotel-melbourne')),
	'portfolio_button_text_three' => get_theme_mod('portfolio_button_text_three',__('View Room 3','hotel-melbourne')),
	'portfolio_image_three_link' => '#',
	'portfolio_three_new_tab' => 1,
	
	//Home Latest Blog Post
	'home_blog_enabled' => 1,
	'blog_heading_title' => get_theme_mod('blog_heading_title',__('Latest News','hotel-melbourne')),
	'blog_description' => get_theme_mod('blog_description',__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','hotel-melbourne')),
	'post_display_count' => 4,

	/* Animation Enable Disable */
	'animation_enabled_disable' => 1,

	/* smoothscroll */ 
	'smoothscroll_enabled_disable' => 1,
		
	'footer_customization_text' => get_theme_mod('footer_customization_text',__('@ 2016 hotel-melbourne Theme','hotel-melbourne')),
	'footer_customization_develop' => get_theme_mod('footer_customization_develop',__('Developed By','hotel-melbourne')),
	'develop_by_name' => get_theme_mod('develop_by_name',__('Asia Themes ','hotel-melbourne')),
	'develop_by_link' => get_theme_mod('develop_by_link',__('http://asiathemes.com/','hotel-melbourne')),
	'header_social_media_enabled' => 1,
	'social_media_twitter_link' => '#',
	'social_media_facebook_link' => '#',
	'social_media_google_link' => '#',
	'social_media_linkedin_link' => '#',
	'facebook_media_enabled' => 0,
	'twitter_media_enabled' => 0,
	'linkedin_media_enabled' => 0,
	'google_media_enabled' => 0,
	//Title strip image
	'footer_bg_image'=> HOTEL_MELBOURNE_DIR_URI.'/images/bedroom.jpg',
	
	);
  	}
  ?>