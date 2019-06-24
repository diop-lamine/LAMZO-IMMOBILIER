<?php
add_action( 'customize_register', 'hotel_melbourne_header_customizer' );
function hotel_melbourne_header_customizer( $wp_customize ) {
wp_enqueue_style('melbourne-customizr', HOTEL_MELBOURNE_DIR_URI .'/css/customizr.css');

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';


	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'hotel_melbourne_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'hotel_melbourne_customize_partial_blogdescription',
	) );

	function hotel_melbourne_sanitize_checkbox( $input ) {
	
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
	}

/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority'       => 1,
		'capability'     => 'edit_theme_options',
		'title'      => esc_html__('Theme Options Settings', 'hotel-melbourne'),
	) );
	$wp_customize->add_section( 'front_page' , array(
		'title'      => esc_html__('Front Page Section', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority'   => 19,
   	) );
	
	$wp_customize->add_setting(
    'melbourne_option[front_page_enabled]',
    array(
        'default' => 1 ,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[front_page_enabled]',
    array(
        'label' => esc_html__('Front Page Enable/Disable','hotel-melbourne'),
        'section' => 'front_page',
        'type' => 'checkbox',
    )
	);







	$wp_customize->add_section( 'animation_options' , array(
		'title'      => esc_html__('Animation Enable Disable', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority'   => 19,
   	) );
	
	$wp_customize->add_setting(
    'melbourne_option[animation_enabled_disable]',
    array(
        'default' => 1 ,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'hotel_melbourne_sanitize_checkbox',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[animation_enabled_disable]',
    array(
        'label' => esc_html__('Animation Enable/Disable','hotel-melbourne'),
        'section' => 'animation_options',
        'type' => 'checkbox',
    )
	);

	$wp_customize->add_section( 'smoothscroll_options' , array(
		'title'      => esc_html__('Smoothscroll Enable Disable', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority'   => 19,
   	) );
	
	$wp_customize->add_setting(
    'melbourne_option[smoothscroll_enabled_disable]',
    array(
        'default' => 1 ,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'hotel_melbourne_sanitize_checkbox',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[smoothscroll_enabled_disable]',
    array(
        'label' => esc_html__('Smoothscroll Enable/Disable','hotel-melbourne'),
        'section' => 'smoothscroll_options',
        'type' => 'checkbox',
    )
	);








	function hotel_melbourne_sanitize_select( $input, $setting ) {

	  // Ensure input is a slug.
	  $input = sanitize_key( $input );

	  // Get list of choices from the control associated with the setting.
	  $choices = $setting->manager->get_control( $setting->id )->choices;

	  // If the input is a valid key, return it; otherwise, return the default.
	  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}

	/* Page layout option */

	$wp_customize->add_section(
    'hotel_melbourne_default_sidebar_layout_option',
    array(
        'title' => esc_html__('Default Sidebar Layout Option', 'hotel-melbourne'),
        'panel' => 'header_options',
        'priority' => 6,
    	)
	);

	/**
	 * Sidebar Option
	 */
	$wp_customize->add_setting(
	    'melbourne_option[hotel_melbourne_sidebar_layout_option]',
	    array(
	        'default' => 'default-sidebar',
	        'sanitize_callback' => 'hotel_melbourne_sanitize_select',
	    )
	);

	$wp_customize->add_control('melbourne_option[hotel_melbourne_sidebar_layout_option]',
	    array(
	        'label' => esc_html__('Default Sidebar Layout', 'hotel-melbourne'),
	        'description' => esc_html__('Home/front page does not have sidebar. Inner pages like blog, archive single page/post Sidebar Layout. However single page/post sidebar can be overridden.', 'hotel-melbourne'),
	        'section' => 'hotel_melbourne_default_sidebar_layout_option',
	        'type' => 'select',
	        'choices' => array(
	        	'default-sidebar' => esc_html__('Default Sidebar', 'hotel-melbourne'),
            	'right-sidebar' => esc_html__('Right Sidebar', 'hotel-melbourne'),
            	'left-sidebar' => esc_html__('Left Sidebar', 'hotel-melbourne'),
            	'no-sidebar' => esc_html__('No Sidebar', 'hotel-melbourne'),

	        ),
	        'priority' => 10
	    )
	);
	
	// Slider Setting Section
	
	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => esc_html__('Featured Slider Settings','hotel-melbourne'),
            'description' => '',
			'panel'  => 'header_options',
			'priority' => 35,
			) );
	
	//Hide slider
	
	$wp_customize->add_setting(
    'melbourne_option[home_banner_enabled]',
    array(
        'default' => 1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[home_banner_enabled]',
    array(
        'label' => esc_html__('Hide Home slider','hotel-melbourne'),
        'section' => 'slider_section_settings',
        'type' => 'checkbox',
    )
	);
	 
	 
	//slider Image one setting
	
	$wp_customize->add_setting(
		'melbourne_option[slider_image_one]'
		, array(
        'default'        => get_template_directory_uri().'/images/slide/slide1.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[slider_image_one]',
			   array(
				   'label'          => esc_html__( 'Upload Slider Image One', 'hotel-melbourne' ),
				   'section'        => 'slider_section_settings',
				   'priority'   => 150,
			   )
		   )
	);
	$wp_customize->add_setting('melbourne_option[slider_image_title_one]'
		, array(
        'default'        => esc_html__('melbourne Responsive','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[slider_image_title_one]', array(
        'label'   => esc_html__('Slider Image Title one :', 'hotel-melbourne'),
        'section' => 'slider_section_settings',
        'type'    => 'text',
		'priority'   => 151,
    ));
	$wp_customize->add_setting('melbourne_option[slider_image_description_one]'
		, array(
        'default'        => esc_html__('Duis autem vel eum iriure dolor in hendrerit in vulputate.','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[slider_image_description_one]', array(
        'label'   => esc_html__('Slider Image  Description One:', 'hotel-melbourne'),
        'section' => 'slider_section_settings',
        'type'    => 'text',
		'priority'   => 152,
    ));
	
//Slider Image two setting
	
	$wp_customize->add_setting(
		'melbourne_option[slider_image_two]'
		, array(
        'default'        => get_template_directory_uri().'/images/slide/slide2.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[slider_image_two]',
			   array(
				   'label'          => esc_html__( 'Upload Slider Image Two', 'hotel-melbourne' ),
				   'section'        => 'slider_section_settings',
				   'priority'   => 155,
			   )
		   )
	);
	$wp_customize->add_setting('melbourne_option[slider_image_title_two]'
		, array(
        'default'        => esc_html__('Awesome Layout','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[slider_image_title_two]', array(
        'label'   => esc_html__('Slider Image Title Two', 'hotel-melbourne'),
        'section' => 'slider_section_settings',
        'type'    => 'text',
		'priority'   => 156,
    ));
	$wp_customize->add_setting('melbourne_option[slider_image_description_two]'
		, array(
        'default'        => esc_html__('Duis autem vel eum iriure dolor in hendrerit in vulputate.','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[slider_image_description_two]', array(
        'label'   => esc_html__('Slider Image two Description :', 'hotel-melbourne'),
        'section' => 'slider_section_settings',
        'type'    => 'text',
		'priority'   => 157,
    ));
	
//Slider Image three setting
	
	$wp_customize->add_setting(
		'melbourne_option[slider_image_three]'
		, array(
        'default'        => get_template_directory_uri().'/images/slide/slide3.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[slider_image_three]',
			   array(
				   'label'          => esc_html__( 'Upload Slider Image Three', 'hotel-melbourne' ),
				   'section'        => 'slider_section_settings',
				   'priority'   => 160,
			   )
		   )
	);
	$wp_customize->add_setting('melbourne_option[slider_image_title_three]'
		, array(
        'default'        => esc_html__('melbourne Responsive','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[slider_image_title_three]', array(
        'label'   => esc_html__('Slider Image Title Three', 'hotel-melbourne'),
        'section' => 'slider_section_settings',
        'type'    => 'text',
		'priority'   => 161,
    ));
	$wp_customize->add_setting('melbourne_option[slider_image_description_three]'
		, array(
        'default'        => 'Duis autem vel eum iriure dolor in hendrerit in vulputate.',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[slider_image_description_three]', array(
        'label'   => esc_html__('Slider Image three Description', 'hotel-melbourne'),
        'section' => 'slider_section_settings',
        'type'    => 'text',
		'priority'   => 162,
    ));
	
	$wp_customize->add_setting(
    'melbourne_option[slider_button_text]',
    array(
        'default' => esc_html__('More Details!','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'melbourne_option[slider_button_text]',array(
    'label'   => esc_html__('Slider Button Text','hotel-melbourne'),
    'section' => 'slider_section_settings',
	 'type' => 'text',
	 'priority'   => 163,
	 )  );
		
	$wp_customize->add_setting('melbourne_option[slider_image_link]'
		, array(
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[slider_image_link]', array(
        'label'   => esc_html__('Slider Button Link', 'hotel-melbourne'),
        'section' => 'slider_section_settings',
        'type'    => 'text',
		'priority'   => 164,
    ));
	$wp_customize->add_setting(
	'melbourne_option[slider_button_tab]'
    ,array(
	'default' => 1,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'melbourne_option[slider_button_tab]',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Open New tab/window','hotel-melbourne'),
        'section' => 'slider_section_settings',
		'priority'   => 165,
    )
);
class WP_slider_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
      <div class="pro-box">
		<a href="<?php echo esc_url('https://asiathemes.com/hotel-details/');?>" target="_blank" class="button" id="review_pro"><?php esc_html_e( 'Add more Slides take the Pro','hotel-melbourne' ); ?></a>
	 
	<div>
    <?php
    }
}	
	
	
   	$wp_customize->add_section( 'header_front_data' , array(
		'title'      => esc_html__('Custom Header Settings', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority'   => 20,
   	) );
	
	//Hide Header Details
	
	$wp_customize->add_setting(
    'melbourne_option[header_text_enabled]',
    array(
        'default' => 1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[header_text_enabled]',
    array(
        'label' => esc_html__('Hide Header Text','hotel-melbourne'),
        'section' => 'header_front_data',
        'type' => 'checkbox',
    )
	);
	$wp_customize->add_setting(
	'melbourne_option[header_info_phone]', array(
        'default'        => esc_html__('(2)245 23 68','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('melbourne_option[header_info_phone]', array(
        'label'   => esc_html__('Header Headline :', 'hotel-melbourne'),
        'section' => 'header_front_data',
        'type'    => 'text',
    ));
	$wp_customize->add_setting('melbourne_option[header_info_mail]'
		, array(
        'default'        => esc_html__('example@gmail.com','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[header_info_mail]', array(
        'label'   => esc_html__('Header Text :', 'hotel-melbourne'),
        'section' => 'header_front_data',
        'type'    => 'text',
    ));
	
	$wp_customize->add_setting(
		'melbourne_option[title_strip_img]'
		, array(
        'default'        => get_template_directory_uri().'/images/page-header-bg.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[title_strip_img]',
			   array(
				   'label'          => esc_html__( 'Upload Title Strip bg Image', 'hotel-melbourne' ),
				   'section'        => 'header_front_data',
				   //'priority'   => 150,
			   )
		   )
	);
	
	//Pro Portfolio section
$wp_customize->add_setting(
     'melbourne_option[slider_pro]',
    array(
        //'default' => esc_html__('','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
);
$wp_customize->add_control( new WP_slider_Customize_Control( $wp_customize, 'melbourne_option[slider_pro]', array(	
		'label' => esc_html__('Discover melbourne Pro','hotel-melbourne'),
        'section' => 'slider_section_settings',
		'setting' => 'melbourne_option[slider_pro]',
		'priority'   => 166,
    ))
);
	
	//Slider Animation duration

	$wp_customize->add_setting(
    'melbourne_option[slideshowSpeed]',
    array(
        'default' => esc_html__('2000','hotel-melbourne'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control(
    'melbourne_option[slideshowSpeed]',
    array(
        'type' => 'text',
        'label' => esc_html__('Input slide show Speed','hotel-melbourne'),
        'section' => 'slider_section_settings',
		'priority'   => 168,
		
		));
	
	// Home Portfolio Section Setting
	
	$wp_customize->add_section( 'home_portfolio' , array(
		'title'      => esc_html__('Home Portfolio Settings', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority'   => 37,
   	) );
	
	
	//Enable/Disable Portfolio Section
	$wp_customize->add_setting(
    'melbourne_option[enable_home_portfolio]',array(
	'default'    => 1,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	));

	$wp_customize->add_control(
    'melbourne_option[enable_home_portfolio]',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Enable/Disabe Home Portfolio','hotel-melbourne'),
        'section' => 'home_portfolio',
		'priority'   => 100,
    )
	);
	
	$wp_customize->add_setting(
	'melbourne_option[portfolio_title_one]', array(
        'default'        => esc_html__('Recent Works','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
	
    $wp_customize->add_control('melbourne_option[portfolio_title_one]', array(
        'label'   => esc_html__('Portfolio Title One :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 140,
    ));
	//  portfolio title description one
	$wp_customize->add_setting(
	'melbourne_option[portfolio_title_desc_one]', array(
        'default'        => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('melbourne_option[portfolio_title_desc_one]', array(
        'label'   => esc_html__('Portfolio Description One :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 141,
    ));
		
	//portfolio Image one setting
	
	$wp_customize->add_setting(
		'melbourne_option[upload_image_one]'
		, array(
        'default'        => get_template_directory_uri().'/images/gallery/1.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[upload_image_one]',
			   array(
				   'label'          => esc_html__( 'Upload Portfolio Image One', 'hotel-melbourne' ),
				   'section'        => 'home_portfolio',
				   'priority'   => 150,
			   )
		   )
	);
	$wp_customize->add_setting('melbourne_option[portfolio_image_one_title]'
		, array(
        'default'        => esc_html__('melbourne Responsive','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_image_one_title]', array(
        'label'   => esc_html__('Portfolio Image One Title :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 151,
    ));
	// portfolio price section one
	$wp_customize->add_setting('melbourne_option[portfolio_price_one]'
		, array(
        'default'        => esc_html__('199.00$/-','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_price_one]', array(
        'label'   => esc_html__('Portfolio Price One :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 152,
    ));
		// portfolio time section one
	$wp_customize->add_setting('melbourne_option[portfolio_time_section_one]'
		, array(
        'default'        => esc_html__('Day / Night','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_time_section_one]', array(
        'label'   => esc_html__('Portfolio Time Section One:', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 152,
    ));	
	// button text one
	$wp_customize->add_setting('melbourne_option[portfolio_button_text_one]'
		, array(
        'default'        => esc_html__('View Room','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_button_text_one]', array(
        'label'   => esc_html__('Portfolio Button One Text :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 153,
    ));
		
	$wp_customize->add_setting('melbourne_option[portfolio_image_one_link]'
		, array(
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_image_one_link]', array(
        'label'   => esc_html__('Portfolio Image and Button One URL :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 153,
    ));
	$wp_customize->add_setting(
	'melbourne_option[portfolio_new_tab]'
    ,array(
	'default' => 1,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'melbourne_option[portfolio_new_tab]',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Open Link New tab/window','hotel-melbourne'),
        'section' => 'home_portfolio',
		'priority'   => 154,
    )
);

//portfolio Image two setting
	
	$wp_customize->add_setting(
		'melbourne_option[upload_image_two]'
		, array(
        'default'        => get_template_directory_uri().'/images/gallery/2.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[upload_image_two]',
			   array(
				   'label'          => esc_html__( 'Upload Portfolio Image Two', 'hotel-melbourne' ),
				   'section'        => 'home_portfolio',
				   'priority'   => 155,
			   )
		   )
	);
	$wp_customize->add_setting('melbourne_option[portfolio_image_two_title]'
		, array(
        'default'        => esc_html__('Awesome Layout','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_image_two_title]', array(
        'label'   => esc_html__('Portfolio Image Two Title :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 156,
    ));
	
	// portfolio price section two
	$wp_customize->add_setting('melbourne_option[portfolio_price_two]'
		, array(
        'default'        => esc_html__('500.00$/-','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_price_two]', array(
        'label'   => esc_html__('Portfolio Price two :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 156,
    ));
	
	// portfolio time section two
	$wp_customize->add_setting('melbourne_option[portfolio_time_section_two]'
		, array(
        'default'        => esc_html__('Night / Day','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_time_section_two]', array(
        'label'   => esc_html__('Portfolio Time Section two:', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 156,
    ));
	
	// button text two
	$wp_customize->add_setting('melbourne_option[portfolio_button_text_two]'
		, array(
        'default'        => esc_html__('View Room 2','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_button_text_two]', array(
        'label'   => esc_html__('Portfolio Button two Text :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 157,
    ));
	
   
		
	$wp_customize->add_setting('melbourne_option[portfolio_image_two_link]'
		, array(
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_image_two_link]', array(
        'label'   => esc_html__('Portfolio Image and Button Two URL :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 158,
    ));
	$wp_customize->add_setting(
	'melbourne_option[portfolio_two_new_tab]'
    ,array(
	'default' => 1,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'melbourne_option[portfolio_two_new_tab]',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Open Link New tab/window','hotel-melbourne'),
        'section' => 'home_portfolio',
		'priority'   => 159,
    )
);

//portfolio Image three setting
	
	$wp_customize->add_setting(
		'melbourne_option[upload_image_three]'
		, array(
        'default'        => get_template_directory_uri().'/images/gallery/3.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[upload_image_three]',
			   array(
				   'label'          => esc_html__( 'Upload Portfolio Image Three', 'hotel-melbourne' ),
				   'section'        => 'home_portfolio',
				   'priority'   => 160,
			   )
		   )
	);
	$wp_customize->add_setting('melbourne_option[portfolio_image_three_title]'
		, array(
        'default'        => 'melbourne Responsive',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_image_three_title]', array(
        'label'   => esc_html__('Portfolio Image Three Title :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 161,
    ));
	
	// portfolio price section three
	$wp_customize->add_setting('melbourne_option[portfolio_price_three]'
		, array(
        'default'        => esc_html__('10000.00$/-','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_price_three]', array(
        'label'   => esc_html__('Portfolio Price three :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 161,
    ));
	
	// portfolio time section three
	$wp_customize->add_setting('melbourne_option[portfolio_time_section_three]'
		, array(
        'default'        => esc_html__('Per Hour','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_time_section_three]', array(
        'label'   => esc_html__('Portfolio Time Section three:', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 161,
    ));
	
	// button text three
	$wp_customize->add_setting('melbourne_option[portfolio_button_text_three]'
		, array(
        'default'        => esc_html__('View Room 3','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_button_text_three]', array(
        'label'   => esc_html__('Portfolio Button three Text :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 163,
    ));
	
		
	$wp_customize->add_setting('melbourne_option[portfolio_image_three_link]'
		, array(
        'default'        => '#',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[portfolio_image_three_link]', array(
        'label'   => esc_html__('Portfolio Image and Button Three URL :', 'hotel-melbourne'),
        'section' => 'home_portfolio',
        'type'    => 'text',
		'priority'   => 163,
    ));
	$wp_customize->add_setting(
	'melbourne_option[portfolio_three_new_tab]'
    ,array(
	'default' => 1,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'melbourne_option[portfolio_three_new_tab]',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Open Link New tab/window','hotel-melbourne'),
        'section' => 'home_portfolio',
		'priority'   => 164,
    )
);
	
	class WP_portfolio_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
      <div class="pro-box">
		<a href="<?php echo esc_url('https://asiathemes.com/hoteldetail.php');?>" target="_blank" class="button" id="review_pro"><?php esc_html_e( 'Add more portfolio take the Pro','hotel-melbourne' ); ?></a>
	 
	<div>
    <?php
    }
}
//Pro Portfolio section
$wp_customize->add_setting(
     'melbourne_option[portfolio_pro]',
    array(
        //'default' => esc_html__('','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
);
$wp_customize->add_control( new WP_portfolio_Customize_Control( $wp_customize, 'melbourne_option[portfolio_pro]', array(	
		'label' => esc_html__('Discover melbourne Pro','hotel-melbourne'),
        'section' => 'home_portfolio',
		'setting' => 'melbourne_option[portfolio_pro]',
		'priority'   => 165,
    ))
);

// Home Blog Posts Section Setting
	
	$wp_customize->add_section(
        'news_section_settings',
        array(
            'title' => esc_html__('Home Latest Blog Posts Settings','hotel-melbourne'),
            'description' => '',
			'panel'  => 'header_options',
			'priority' => 38,
			)
    );
	
	
	//Hide Index Service Section
	
	$wp_customize->add_setting(
    'melbourne_option[home_blog_enabled]',
    array(
        'default' => 1,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[home_blog_enabled]',
    array(
        'label' => esc_html__('Hide Home Blog Posts Section','hotel-melbourne'),
        'section' => 'news_section_settings',
        'type' => 'checkbox',
    )
	);
	
	// add section to manage News
	$wp_customize->add_setting(
    'melbourne_option[blog_heading_title]',
    array(
        'default' => esc_html__('Latest News','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'melbourne_option[blog_heading_title]',array(
    'label'   => esc_html__('Latest Blog Posts Section Heading title','hotel-melbourne'),
    'section' => 'news_section_settings',
	 'type' => 'text',)  );
	 
	  $wp_customize->add_setting(
    'melbourne_option[blog_description]',
    array(
        'default' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','hotel-melbourne'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'melbourne_option[blog_description]',array(
    'label'   => esc_html__('Latest News Description','hotel-melbourne'),
    'section' => 'news_section_settings',
	 'type' => 'text',)  );	
	
	//Select number of latest news on front page
	
	$wp_customize->add_setting(
    'melbourne_option[post_display_count]',
    array(
		'type' => 'option',
        'default' => 4,
		'sanitize_callback' => 'sanitize_text_field',
    )
	);

	$wp_customize->add_control(
    'melbourne_option[post_display_count]',
    array(
        'type' => 'select',
        'label' => esc_html__('Select Number of Post','hotel-melbourne'),
        'section' => 'news_section_settings',
		 'choices' => array('2'=>esc_html__('2', 'hotel-melbourne'), '4'=>esc_html__('4', 'hotel-melbourne'), '6' => esc_html__('6','hotel-melbourne'), '8' => esc_html__('8','hotel-melbourne'),'10'=> esc_html__('10','hotel-melbourne'), '12'=> esc_html__('12','hotel-melbourne'),'14'=> esc_html__('14','hotel-melbourne'), '16' =>esc_html__('16','hotel-melbourne')),
		));
	
	function melbourne_prefix_sanitize_layout( $news ) {
    if ( ! in_array( $news, array( 1,'category_news' ) ) )    
    return $news;
}
	
	
	//Custom css
	$wp_customize->add_section( 'custom_css' , array(
		'title'      => esc_html__('Custom css', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority' => 24,
   	) );
	$wp_customize->add_setting(
	'melbourne_option[melbourne_custom_css]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[melbourne_custom_css]', array(
        'label'   => esc_html__('Custom css snippet:', 'hotel-melbourne'),
        'section' => 'custom_css',
        'type' => 'textarea',
    ));
	
	// Footer Copyright Option Settings
	$wp_customize->add_section( 'footer_copyright_setting' , array(
		'title'      => esc_html__('Footer Customization', 'hotel-melbourne'),
		'panel'  => 'header_options',
		'priority' => 39,
   	) );
	
	$wp_customize->add_setting(
		'melbourne_option[footer_bg_image]'
		, array(
        'default'        => get_template_directory_uri().'/images/bedroom.jpg',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'melbourne_option[footer_bg_image]',
			   array(
				   'label'          => esc_html__( 'Upload footer widget background image', 'hotel-melbourne' ),
				   'section'        => 'footer_copyright_setting',
				   //'priority'   => 150,
			   )
		   )
	);
	
	$wp_customize->add_setting(
	'melbourne_option[footer_customization_text]'
		, array(
        'default'        => esc_html__('@ 2016 hotel-melbourne Theme ','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[footer_customization_text]', array(
        'label'   => esc_html__('Footer Customization Text', 'hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));	
	
	$wp_customize->add_setting(
	'melbourne_option[footer_customization_develop]'
		, array(
        'default'        => esc_html__('Developed By ','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[footer_customization_develop]', array(
        'label'   => esc_html__('Footer Customization Developed By', 'hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
	'melbourne_option[develop_by_name]'
		, array(
        'default'        => esc_html__('Asia Themes ','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[develop_by_name]', array(
        'label'   => esc_html__('Theme Developed By Name', 'hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
	'melbourne_option[develop_by_link]'
		, array(
        'default'        => esc_html__('https://asiathemes.com/','hotel-melbourne'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'melbourne_option[develop_by_link]', array(
        'label'   => esc_html__('Theme Developed By Link', 'hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    ));
	
	
	//Show and hide Header Social Icons
	$wp_customize->add_setting(
	'melbourne_option[header_social_media_enabled]'
    ,
    array(
        'default' => 0,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'melbourne_option[header_social_media_enabled]',
    array(
        'label' => esc_html__('Hide Social icons','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'checkbox',
    )
	);

	
	

	// Facebook link
	$wp_customize->add_setting(
    'melbourne_option[social_media_facebook_link]',
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'melbourne_option[social_media_facebook_link]',
    array(
        'label' => esc_html__('Facebook URL','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'melbourne_option[facebook_media_enabled]',array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'melbourne_option[facebook_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Open Link New tab/window','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
    )
);

	//twitter link
	
	$wp_customize->add_setting(
    'melbourne_option[social_media_twitter_link]',
    array(
        'default' => '#',
		'type' => 'theme_mod',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'melbourne_option[social_media_twitter_link]',
    array(
        'label' => esc_html__('Twitter URL','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'melbourne_option[twitter_media_enabled]'
    ,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    'melbourne_option[twitter_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Open Link New tab/window','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
    )
);
	//Linkdin link
	
	$wp_customize->add_setting(
	'melbourne_option[social_media_linkedin_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'melbourne_option[social_media_linkedin_link]',
    array(
        'label' => esc_html__('Linkdin URL','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'melbourne_option[linkedin_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'melbourne_option[linkedin_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Open Link New tab/window','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
    )
);
	//googlelink
	
	$wp_customize->add_setting(
	'melbourne_option[social_media_google_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'melbourne_option[social_media_google_link]',
    array(
        'label' => esc_html__('Google URL','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
	'melbourne_option[google_media_enabled]'
	,array(
	'default' => 0,
	'sanitize_callback' => 'esc_url_raw',
	'type' => 'option',
	));

	$wp_customize->add_control(
    	'melbourne_option[google_media_enabled]',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Open Link New tab/window','hotel-melbourne'),
        'section' => 'footer_copyright_setting',
    )
);
	// Upgrade to pro Settings
	$wp_customize->add_section( 'melbourne_pro' , array(
				'title'      	=> esc_html__( 'Upgrade to melbourne Premium', 'hotel-melbourne' ),
				'priority'   	=> 999,
				'panel'=>'header_options',
			) );

			$wp_customize->add_setting( 'melbourne_pro', array(
				'default'    		=> null,
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->add_control( new More_melbourne_Control( $wp_customize, 'melbourne_pro', array(
				'label'    => esc_html__( 'melbourne Premium', 'hotel-melbourne' ),
				'section'  => 'melbourne_pro',
				'settings' => 'melbourne_pro',
				'priority' => 1,
			) ) );

	
} 
/* Custom Control Class */
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'melbourne_Customize_Misc_Control' ) ) :
class melbourne_Customize_Misc_Control extends WP_Customize_Control {
    public $settings = 'blogname';
    public $description = '';
    public function render_content() {
        switch ( $this->type ) {
            default:
           
            case 'heading':
                echo '<span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
                break;
 
            case 'line' :
                echo '<hr />';
                break;
			
        }
    }
}
endif;
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'More_melbourne_Control' ) ) :
class More_melbourne_Control extends WP_Customize_Control {

	/**
	* Render the content on the theme customizer page
	*/
	public function render_content() {
		?>
		<label style="overflow: hidden; zoom: 1;">
			<div class="col-md-2 col-sm-6 content-btn">					
					<a style="margin-bottom:20px;margin-left:11px;" href="https://asiathemes.com/hotel-details/" target="blank" class="btn pro-btn-success btn"><?php esc_html_e('Upgrade to melbourne Premium','hotel-melbourne'); ?> </a>
			</div>
			<div class="col-md-4 col-sm-6">
				<img class="melbourne_img_responsive " src="<?php echo HOTEL_MELBOURNE_DIR_URI .'/images/melbourne.jpg'?>">
			</div>			
			<div class="col-md-3 col-sm-6">
				<h3 style="margin-top:10px;margin-left: 20px;text-decoration:underline;color:#333;"><?php echo esc_html( 'melbourne Premium - Features','hotel-melbourne'); ?></h3>
					<ul style="padding-top:20px">
						<li class="melbourne-content" style="color:#FF4136"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('We have provide custom room booking facility in our primium theme','hotel-melbourne'); ?> </li>
						<li class="melbourne-content" style="color:#FF4136"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('You can create your room booking process easily without any plugin','hotel-melbourne'); ?> </li>						
						<li class="melbourne-content" style="color:#FF4136"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('We are provide "Cloud Slider" With multiple animations features in our premium theme','hotel-melbourne'); ?> </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('More then 13 Templates pages','hotel-melbourne'); ?></li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('9 types Colours Schemes','hotel-melbourne'); ?></li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('5 types Awesome Portfolio Page Templates','hotel-melbourne'); ?>   </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Portfolio Page Templates with awesome Photo-box Slider','hotel-melbourne'); ?>   </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('One Latest GALLERY page portfolio template"Coming Soon"','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Ultimate Portfolio layout with Taxonomy Tab effect','hotel-melbourne'); ?> </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('Awesome Team page Template','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('Awesome Events page Template','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('Awesome Service Pages Templates','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('3 Types Of Blog Templates','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('One Year Free Support','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('Google Fonts','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Translation Ready','hotel-melbourne'); ?> </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Coming Soon Mode','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('Responsive Design','hotel-melbourne'); ?> </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('Patterns Background','hotel-melbourne'); ?>   </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('Full Width & Boxed Layout','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('Woo-commerce Plug-in compatible is coming soon','hotel-melbourne'); ?>  </li>
						<li class="melbourne-content"> <div class="dashicons dashicons-yes"></div><?php esc_html_e('Awesome Shortcodes is coming soon ','hotel-melbourne'); ?>  </li>	
					
					</ul>
			</div>
			<div class="col-md-2 col-sm-6 content-btn">					
					<a style="margin-bottom:20px;margin-left:11px;" href="https://asiathemes.com/hotel-details/" target="blank" class="btn pro-btn-success btn"><?php esc_html_e('Upgrade to melbourne Premium','hotel-melbourne'); ?> </a>
			</div>
			<span class="customize-control-title"><?php esc_html_e( 'Enjoying With melbourne', 'hotel-melbourne' ); ?></span>
			<p>
				<?php
					printf( esc_html__( 'If you Like our Products , Please do Rate us on %sWordPress.org%s?  We\'d really appreciate it!', 'hotel-melbourne' ), '<a target="" href="https://wordpress.org/support/view/theme-reviews/melbourne?filter=5">', '</a>' );
				?>
			</p>
		</label>
		<?php
	}
}
endif;