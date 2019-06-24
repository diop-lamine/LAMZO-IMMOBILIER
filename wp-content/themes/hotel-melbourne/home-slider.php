<?php
/**
* @Theme Name	:	Hotel-Melbourne
* @file         :	home-slider.php
* @package      :	melbourne
* @author       :	asiathemes
* @license      :	license.txt
* @filesource   :	wp-content/themes/melbourne/home-slider.php
*/
?>
<!-- Slider Section -->	
<?php 
$melbourne_options=hotel_melbourne_theme_default_data(); 
$slider_setting = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options ); 
if($slider_setting['home_banner_enabled'] == 1 ) {

$slideshowSpeed=$slider_setting['slideshowSpeed'];
?>
<script type="text/javascript">
		jQuery(window).load(function(){
		  jQuery('.flexslider').flexslider({	
			animation: "slide",
			animationSpeed: 1500,
			direction: "vertical",
			
			directionNav: true, 
			prevText: "Previous",          
			nextText: "Next",
			controlNav: true,			
			
			slideshowSpeed: "<?php echo $slideshowSpeed; ?>",
			pauseOnHover: true, 
			slideshow: true,
			start: function(slider){
			  jQuery('body').removeClass('loading');
			}			
		  });
		  
		  
		});
</script>
<!--Flex Slider-->	
	<div class="flexslider">
        <div class="flex-viewport">
			<ul class="slides">
				<li>
				<?php if($slider_setting['slider_image_one'] !='') { ?>
				<img src="<?php echo esc_url($slider_setting['slider_image_one']); ?>" class="img-responsive" alt="<?php echo esc_attr($slider_setting['slider_image_title_one']); ?>">
			<?php } ?>
					
					  <div class="slide-caption text-center">
					  <?php if($slider_setting['slider_image_title_one'] !='') { ?>
						<h1 class="wow fadeInUp" data-wow-duration="2s"><?php echo esc_attr($slider_setting['slider_image_title_one']); ?>.</b></h1>
					<?php } ?>
						   <div class="main-btn-div">
						   <?php if($slider_setting['slider_button_text'] !='') { ?>
						     <a class="main-btn wow fadeInUp" data-wow-duration="2s" href="<?php if($slider_setting['slider_image_link'] !='') { echo esc_url($slider_setting['slider_image_link']); } ?>" <?php if($slider_setting['slider_button_tab'] ==1) { echo "target='_blank'"; } ?> ><i class="fa fa-key"></i><?php echo esc_attr($slider_setting['slider_button_text']) ?></a>
							 <?php } ?>
						   </div>		
                    </div>
				</li>
					
					<li>
				<?php if($slider_setting['slider_image_two'] !='') { ?>
				<img src="<?php echo esc_url($slider_setting['slider_image_two']); ?>" class="img-responsive" alt="<?php echo esc_attr($slider_setting['slider_image_title_two']); ?>">
			<?php } ?>
					
					  <div class="slide-caption text-center">
					  <?php if($slider_setting['slider_image_title_two'] !='') { ?>
						<h1 class="wow fadeInUp" data-wow-duration="2s"><?php echo esc_attr($slider_setting['slider_image_title_two']); ?>.</b></h1>
					<?php } ?>
						   <div class="main-btn-div">
						   <?php if($slider_setting['slider_button_text'] !='') { ?>
						     <a class="main-btn wow fadeInUp" data-wow-duration="2s" href="<?php if($slider_setting['slider_image_link'] !='') { echo esc_url($slider_setting['slider_image_link']); } ?>" <?php if($slider_setting['slider_button_tab'] ==1) { echo "target='_blank'"; } ?> ><i class="fa fa-key"></i><?php echo esc_attr($slider_setting['slider_button_text']) ?></a>
							 <?php } ?>
						   </div>		
                    </div>
				</li>
				
				<li>
				<?php if($slider_setting['slider_image_three'] !='') { ?>
				<img src="<?php echo esc_url($slider_setting['slider_image_three']); ?>" class="img-responsive" alt="<?php echo esc_attr($slider_setting['slider_image_title_three']); ?>">
			<?php } ?>
					
					  <div class="slide-caption text-center">
					  <?php if($slider_setting['slider_image_title_one'] !='') { ?>
						<h1 class="wow fadeInUp" data-wow-duration="2s"><?php echo esc_attr($slider_setting['slider_image_title_three']); ?>.</b></h1>
					<?php } ?>
						   <div class="main-btn-div">
						   <?php if($slider_setting['slider_button_text'] !='') { ?>
						     <a class="main-btn wow fadeInUp" data-wow-duration="2s" href="<?php if($slider_setting['slider_image_link'] !='') { echo esc_url($slider_setting['slider_image_link']); } ?>" <?php if($slider_setting['slider_button_tab'] ==1) { echo "target='_blank'"; } ?> ><i class="fa fa-key"></i><?php echo esc_attr($slider_setting['slider_button_text']) ?></a>
							 <?php } ?>
						   </div>		
                    </div>
				</li>
			</ul>
		</div>
	</div> 
	<!--/Flex Slider-->
<div class="clearfix"></div>
<?php } ?>