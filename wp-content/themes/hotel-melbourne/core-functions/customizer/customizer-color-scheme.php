<?php function hotel_melbourne_customize_register( $wp_customize ) {
   /*******************************************
Color scheme
********************************************/
 
// add the section to contain the settings
$wp_customize->add_section( 'textcolors' , array(
    'title' =>  'Theme Color Scheme',
) );
// main color ( site title, h1, h2, h4. h6, widget headings, nav links, footer headings )
$txtcolors[] = array(
    'slug'=>'color_scheme_1', 
    'default' => '#303030',
    'label' => 'Heading Color'
);
 
// link color
$txtcolors[] = array(
    'slug'=>'link_color', 
    'default' => '#f0f0f0',
    'label' => 'Link Color'
);
 
// link color ( hover, active )
$txtcolors[] = array(
    'slug'=>'hover_link_color', 
    'default' => '#000000',
    'label' => 'Link Color (on hover)'
);
// add the settings and controls for each color
foreach( $txtcolors as $txtcolor ) {
 
    // SETTINGS
    $wp_customize->add_setting(
        $txtcolor['slug'], array(
            'default' => $txtcolor['default'],
            'type' => 'option', 
            'capability' => 'edit_theme_options',
			'sanitize_callback'  => 'esc_attr',
        )
    );
    // CONTROLS
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            $txtcolor['slug'], 
            array('label' => $txtcolor['label'], 
            'section' => 'textcolors',
            'settings' => $txtcolor['slug'])
        )
    );
}
}
add_action( 'customize_register', 'hotel_melbourne_customize_register' );
function hotel_melbourne_customize_colors() {
 
 /**********************
text colors
**********************/
// main color
$color_scheme_1 = get_option( 'color_scheme_1' );
 
// link color
$link_color = get_option( 'link_color' );
 
// hover or active link color
$hover_link_color = get_option( 'hover_link_color' );

/****************************************
styling
****************************************/
?>
<style>
 
 
/* color scheme */
 
/* main color */
#site-title a, .post-meta, .section-title h2, h1, h2, h2.page-title, h2.post-title, h2 a:link, h2 a:visited, .menu.main a:link, .menu.main a:visited, footer h3 { 
    color:  <?php echo $color_scheme_1; ?>; 
}
 
/* links color */
.blog-post-detail a { 
    color:  <?php echo $link_color; ?>; 
}
 
/* hover links color */
.blog-post-detail a:hover, a:active {
    color:  <?php echo $hover_link_color; ?>; 
}
 
</style>
     
<?php
 
}
add_action( 'wp_head', 'hotel_melbourne_customize_colors' );
?>