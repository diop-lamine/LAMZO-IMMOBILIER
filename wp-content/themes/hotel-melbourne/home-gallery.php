<!----------Gallery/Portfolio------------------>
<?php $melbourne_option=hotel_melbourne_theme_default_data(); 
$portfolio_options = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_option );
if($portfolio_options['enable_home_portfolio'] == 1 ) { ?>
<div class="tooth-color-gr"></div>
<section class="gallery-section wow fadeInUp" data-wow-duration="2s">
<div class="container">
	   <div class="row">
	      <div class="col-md-12 section-title">
			    <h1 class="wow fadeInLeft" data-wow-delay="0.3s"><?php echo $portfolio_options['portfolio_title_one']; ?></h1>
				<p class="wow fadeInRight" data-wow-delay="0.6s"><?php echo $portfolio_options['portfolio_title_desc_one']; ?></p>
		  </div>
	   </div>
  </div>	
  
<div class="portfolio-column-section">
	<div class="container" id="gallery">
		<!-- Portfolio Area -->
		<div class="row">
		 <?php if($portfolio_options['upload_image_one'] !='') { ?>
			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">
				<div class="home-gallery">
					<div class="room-col">
						<div class="overly">
							<span>
								<a class="photobox_a gallery-icons" href="<?php echo esc_url($portfolio_options['upload_image_one']); ?>"><i class="fa fa-plus-circle"></i><img src="<?php echo esc_url($portfolio_options['upload_image_one']); ?>" style="display:none !important;"></a>
								<a href="<?php echo esc_url($portfolio_options['portfolio_image_one_link']); ?>" <?php if( $portfolio_options['portfolio_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="<?php echo esc_url($portfolio_options['upload_image_one']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
					</div>
					<div class="home-gallery-inner">
						<h3><?php echo $portfolio_options['portfolio_image_one_title']; ?></h3>
						 <p><?php echo $portfolio_options['portfolio_price_one']; ?><span><?php echo $portfolio_options['portfolio_time_section_one']; ?></span></p>
						 <a class="main-btn" href="<?php echo esc_url($portfolio_options['portfolio_image_one_link']); ?>"<?php if( $portfolio_options['portfolio_new_tab'] ==1 ) { echo "target='_blank'"; } ?>><?php echo $portfolio_options['portfolio_button_text_one']; ?></a> 
					</div>
				</div>
			</div>
			<?php } ?>
			 <?php if($portfolio_options['upload_image_two'] !='') { ?>
			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="2s">
				<div class="home-gallery">
					<div class="room-col">
						<div class="overly">
							<span>
								<a class="photobox_a gallery-icons" href="<?php echo esc_url($portfolio_options['upload_image_two']); ?>"><i class="fa fa-plus-circle"></i><img src="<?php echo esc_url($portfolio_options['upload_image_two']); ?>" style="display:none !important;"></a>
								<a href="<?php echo esc_url($portfolio_options['portfolio_image_two_link']); ?>" <?php if( $portfolio_options['portfolio_two_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="<?php echo esc_url($portfolio_options['upload_image_two']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_two_title']; ?>">
					</div>
					<div class="home-gallery-inner">
						<h3><?php echo $portfolio_options['portfolio_image_two_title']; ?></h3>
						 <p><?php echo $portfolio_options['portfolio_price_two']; ?><span><?php echo $portfolio_options['portfolio_time_section_two']; ?></span></p>
						 <a class="main-btn" href="<?php echo esc_url($portfolio_options['portfolio_image_two_link']); ?>"<?php if( $portfolio_options['portfolio_two_new_tab'] ==1 ) { echo "target='_blank'"; } ?>><?php echo $portfolio_options['portfolio_button_text_two']; ?></a> 
					</div>
				</div>
			</div>
			<?php } ?>
			
			 <?php if($portfolio_options['upload_image_three'] !='') { ?>
			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="3s">
				<div class="home-gallery">
					<div class="room-col">
						<div class="overly">
							<span>
								<a class="photobox_a gallery-icons" href="<?php echo esc_url($portfolio_options['upload_image_three']); ?>"><i class="fa fa-plus-circle"></i><img src="<?php echo esc_url($portfolio_options['upload_image_three']); ?>" style="display:none !important;"></a>
								<a href="<?php echo esc_url($portfolio_options['portfolio_image_three_link']); ?>" <?php if( $portfolio_options['portfolio_three_new_tab'] ==1 ) { echo "target='_blank'"; } ?> class="hover_thumb gallery-icons"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="<?php echo esc_url($portfolio_options['upload_image_three']); ?>" class="img-responsive" title="<?php echo $portfolio_options['portfolio_image_one_title']; ?>">
					</div>
					<div class="home-gallery-inner">
						<h3><?php echo $portfolio_options['portfolio_image_three_title']; ?></h3>
						 <p><?php echo $portfolio_options['portfolio_price_three']; ?><span><?php echo $portfolio_options['portfolio_time_section_three']; ?></span></p>
						 <a class="main-btn" href="<?php echo esc_url($portfolio_options['portfolio_image_three_link']); ?>"<?php if( $portfolio_options['portfolio_three_new_tab'] ==1 ) { echo "target='_blank'"; } ?>><?php echo $portfolio_options['portfolio_button_text_three']; ?></a> 
					</div>
				</div>
			</div>
			<?php } ?>
			
		</div>
		<div class="clearfix"></div>
		<!-- /Portfolio Area -->		
	</div>
</div>
</section>
<div class="clearfix"></div>
<?php } ?>