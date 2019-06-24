<?php
/*
	*Theme Name	: Hotel-Melbourne
	*Theme Core Functions and Codes
*/
/**Includes required resources here**/
define('HOTEL_MELBOURNE_DIR_URI',get_template_directory_uri());
define('HOTEL_MELBOURNE_TEMPLATE_DIR',get_template_directory());
define('HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH',HOTEL_MELBOURNE_TEMPLATE_DIR.'/core-functions');
define('HOTEL_MELBOURNE_OPTIONS_PATH' , HOTEL_MELBOURNE_DIR_URI.'/core-functions/option-panel');
require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php' ); // for Default Menus
require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/menu/asiathemes_nav_walker.php' ); // for Custom Menus		
require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/scripts/scripts.php' );
require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/comment-section/comment-function.php' ); //for comments sections
require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/widgets/register-sidebar.php' ); //for widget register	

//Customizer
require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/customizer/customizer-header.php');
require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/customizer/customizer-service.php');
require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/customizer/customizer-color-scheme.php');
require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/metabox/metabox-page-post-sidebar.php');
require('template-tags.php');
require_once('asia_breadcrumbs.php');
	add_action( 'after_setup_theme', 'hotel_melbourne_setup' ); 	
		function hotel_melbourne_setup()
		{	// Load text domain for translation-ready
			load_theme_textdomain( 'hotel-melbourne', HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/language' );
			add_theme_support( 'woocommerce' );
			add_theme_support( 'title-tag' );

			
			add_theme_support( 'wc-product-gallery-slider' );
            add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			
			add_theme_support('post-thumbnails');
			
			register_nav_menu( 'primary', __( 'Primary Menu', 'hotel-melbourne' ) );
			
			// theme Background support
			add_theme_support( 'custom-logo', array(
				'height'      => 6000,
				'width'       => 300,
				'flex-height' => true,
			) );
			
			add_theme_support( 'automatic-feed-links');
			add_theme_support( 'custom-header', apply_filters( 'hotel_melbourne_custom_header_args', array(
				'default-text-color'     => '333',
				'width'                  => 1200,
				'height'                 => 280,
				'flex-height'            => true,
				'wp-head-callback'       => 'hotel_melbourne_header_style',
			) ) );
			
			/*
			 * Enable support for Post Formats.
			 *
			 * See: https://codex.wordpress.org/Post_Formats
			 */
			add_theme_support( 'post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			) );
			
			//Default Data
			if ( ! isset( $content_width ) ) $content_width = 900;
			require_once('theme_default_data.php');
			$melbourne_option=hotel_melbourne_theme_default_data();
			require( HOTEL_MELBOURNE_THEME_FUNCTIONS_PATH . '/option-panel/hotel-melbourne-option-setting.php' ); // for Option Panel
			
}
if ( ! function_exists( 'hotel_melbourne_header_style' ) ) :

function hotel_melbourne_header_style() {
	$text_color = get_header_textcolor();

	// If no custom color for text is set, let's bail.
	if ( display_header_text() && $text_color === get_theme_support( 'custom-header', 'default-text-color' ) )
		return;
	?>
	<style type="text/css" id="hotel-melbourne-header-css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			clip: rect(1px 1px 1px 1px); /* IE7 */
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
	<?php
		// If the user has set a custom color for the text, use that.
		elseif ( $text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) :
	?>
		.site-title a {
			color: #<?php echo esc_attr( $text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;

if (!function_exists('hotel_melbourne_admin_css_enqueue_new_post')) :
	function hotel_melbourne_admin_css_enqueue_new_post($hook)
	{
		if ('post-new.php' != $hook) {
			return;
		}
		wp_enqueue_style('hotel-melbourne-admin', get_template_directory_uri() . '/css/admin.css', array(), '2.0.0');
	}
	add_action('admin_enqueue_scripts', 'hotel_melbourne_admin_css_enqueue_new_post');
endif;



if (!function_exists('hotel_melbourne_admin_css_enqueue')) :
	function hotel_melbourne_admin_css_enqueue($hook)
	{
		if ('post.php' != $hook) {
			return;
		}
		wp_enqueue_style('hotel-melbourne-admin', get_template_directory_uri() . '/css/admin.css', array(), '2.0.0');

	}
	add_action('admin_enqueue_scripts', 'hotel_melbourne_admin_css_enqueue');
endif;


/*for sidebar options**/

function hotel_melbourne_names( $classes ) {
	// add 'class-name' to the $classes array
	$sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'hotel_melbourne_sidebar_layout', true) );
	if (is_singular() && $sidebardesignlayout != "default-sidebar")
	{
		$sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'hotel_melbourne_sidebar_layout', true) );

	} else
	{
		$melbourne_options=hotel_melbourne_theme_default_data(); 
		$layout_setting = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options );
		$sidebardesignlayout = esc_attr($layout_setting['hotel_melbourne_sidebar_layout_option'] );
	}

	$classes[] = $sidebardesignlayout;
	return $classes;

}
add_filter( 'body_class', 'hotel_melbourne_names' );
?>