<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php 
	$melbourne_options=hotel_melbourne_theme_default_data(); 
	$header_setting = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options ); ?>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	
	<?php wp_head(); 
	if ( !is_active_sidebar( 'woocommerce-sidebar' ) )
{ ?>

<style>
	
	.col-md-3.widget-area {
    display: none;
}

</style>

<?php } ?>
    </head>
<body <?php body_class('at-sticky-sidebar'); ?>>
<style>
.page-title-section {
     background: url("<?php  echo esc_url($header_setting['title_strip_img']); ?>") no-repeat fixed 0 0 / cover rgba(0, 0, 0, 0);;
}
</style>
<div class="wrapper">

 <section class="header-top-section">
	<div class="container">
		<div class="row">
		   <div class="col-md-6">
			 <div class="info-top wow fadeInUp" data-wow-duration="2s">
			<?php if($header_setting['header_text_enabled'] == 0 ) { 
			if($header_setting['header_info_phone']!='') { ?>
				<span><i class="fa fa-phone"></i><?php echo esc_attr($header_setting['header_info_phone']); ?></span>
				<?php } if($header_setting['header_info_mail']!='') { ?>
				<span><i class="fa fa-envelope"></i><?php echo esc_attr($header_setting['header_info_mail']); ?></span>
			 <?php } } else { echo ""; } ?>
			 </div>
			</div>
		</div>
	</div>
</section>

<div class="navbar navbar-wrapper navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only"><?php _e('Toggle navigation','hotel-melbourne');?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<?php hotel_melbourne_the_custom_logo(); ?>
				<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>
			</div>
			<div class="navbar-collapse collapse">
							<?php	wp_nav_menu( array(  
									'theme_location' => 'primary',
									'container'  => 'collapse navbar-collapse',
									'menu_class' => 'nav navbar-nav navbar-right',
									'fallback_cb' => 'hotel_melbourne_fallback_page_menu',
									'walker' => new hotel_melbourne_nav_walker()
									)
								);	?> 
			</div>
		</div>
	</div>
	<?php if ( get_header_image() ) : ?>
				<?php $custom_header_sizes = apply_filters( 'hotel_melbourne_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
			<?php endif; ?>