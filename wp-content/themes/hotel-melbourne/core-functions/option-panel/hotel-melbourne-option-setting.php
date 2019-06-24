<?php add_action('admin_menu','hotel_melbourne_add_opiotn_page');
function hotel_melbourne_add_opiotn_page(){
$page = add_theme_page( __('Hotel Melbourne','hotel-melbourne'), __('About Theme','hotel-melbourne'), 'edit_theme_options', 'hotel-melbourne', 'hotel_melbourne_option_panal_function' );
add_action('admin_print_styles-'.$page, 'hotel_melbourne_admin_enqueue_scripts');
} 

 function hotel_melbourne_admin_enqueue_scripts()
{
		/*====hotel-melbourne Option Panel Style====*/
		wp_enqueue_style('thickbox');	
		wp_enqueue_style('hotel-melbourne-style', HOTEL_MELBOURNE_DIR_URI.'/core-functions/option-panel/css/style.css');//enqueu 
		wp_enqueue_style('hotel-melbourne-bootstrap', HOTEL_MELBOURNE_DIR_URI.'/core-functions/option-panel/css/bootstrap.css');//enqueu option panel bootstrap
		wp_enqueue_style('hotel-melbourne-font-awesome-4.2.0', HOTEL_MELBOURNE_DIR_URI.'/core-functions/option-panel/css/font-awesome-4.2.0/css/font-awesome.min.css');//enqueu option panel font-awesome-4.2.0
}
 
function hotel_melbourne_option_panal_function()
{ $theme_data = wp_get_theme();	 ?>
<div class="wrapper">
   <div class="at-notify text-center" id="at-notify">
    <a href="https://asiathemes.com" target= _blank ><img src="https://asiathemes.com/wp-content/themes/crazy/images/logo.png"></a>
   </div>
	<div class="at-notify" id="at-notify">
		  <div class="col-md-6">
				<h1><?php _e('Hotel-Melbourne','hotel-melbourne');?> <span> <?php _e('Premium','hotel-melbourne');?></span></h1>
				<div class="about-image">
				
				  <a href="https://asiathemes.com/hotel-details/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/h.png"></a>
				 	<div class="room-col"  style="margin-top:15px;">
						<div class="overly">
							<span>
								 <h2><?php _e('Home Page','hotel-melbourne'); ?></h2>
								<a href="http://asiathemes.asia/?item=hotel" target= _blank class="hover_thumb gallery-icon"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/home.png" class="img-responsive">
					</div>	
				</div>
			</div>
            <div class="col-md-6">
			  <h1><?php _e('Our Latest','hotel-melbourne'); ?> <span> <?php _e('Features','hotel-melbourne');?></span></h1>
			  <h4><a href="http://asiathemes.asia/?item=hotel" target="_blank"><?php _e('Get Our','hotel-melbourne'); ?> <span><?php _e('Premium Theme','hotel-melbourne'); ?></span> <span class="price">Only $39</span></a></h4>
					<ul>
						<li><b><?php _e('We have provide custom room booking facility in our primium theme','hotel-melbourne'); ?></b> </li>
						<li><b><?php _e('You can create your room booking process easily without any plugin','hotel-melbourne'); ?> </b></li>
						<li><b><?php _e('We are provide "Cloud Slider" With multiple animations features in our premium theme','hotel-melbourne'); ?> </b></li>
						<li> <?php _e('More then 13 Templates pages','hotel-melbourne'); ?> </li>						
						<li><?php _e('9 types Colours Schemes','hotel-melbourne'); ?>  </li>
						<li><?php _e('5 types Awesome Portfolio Page Templates','hotel-melbourne'); ?>  </li>
						<li><?php _e('Portfolio Page Templates with awesome Photo-box Slider','hotel-melbourne'); ?>  </li>
						<li><?php _e('One Latest GALLERY page portfolio template"Coming Soon"','hotel-melbourne'); ?>  </li>
						<li><?php _e('Awesome Team page Template','hotel-melbourne'); ?>  </li>
						<li><?php _e('Awesome Events page Template','hotel-melbourne'); ?>  </li>
					</ul>
					<ul>
						<li><?php _e('Awesome Service Pages Templates','hotel-melbourne'); ?>  </li>
						<li> <?php _e('3 Types Of Blog Templates','hotel-melbourne'); ?> </li>
						<li><?php _e('One Year Free Support','hotel-melbourne'); ?> </li>
						<li> <?php _e('Google Fonts','hotel-melbourne'); ?>  </li>
						<li> <?php _e('Ultimate Portfolio layout with Taxonomy Tab effect','hotel-melbourne'); ?>  </li>
						<li> <?php _e('Translation Ready','hotel-melbourne'); ?> </li>
						<li> <?php _e('Coming Soon Mode','hotel-melbourne'); ?>  </li>
						<li><?php _e('Responsive Design','hotel-melbourne'); ?> </li>
						<li><?php _e('Patterns Background','hotel-melbourne'); ?>   </li>
						<li><?php _e('Full Width & Boxed Layout','hotel-melbourne'); ?>  </li>
						<li><?php _e('Woo-commerce Plug-in compatible is coming soon','hotel-melbourne'); ?>  </li>
						<li><?php _e('Awesome Shortcodes is coming soon ','hotel-melbourne'); ?>  </li>					
					</ul>

                   <div class="notify-btn">
					<a href="http://asiathemes.asia/?item=hotel" target="_blank" class="at-btn"><?php _e('View Hotel-Melbourne Pro Demo','hotel-melbourne'); ?> </a>
					<a href="https://asiathemes.com/hotel-details/" target="_blank" class="at-btn" ><?php _e('Upgrade to Pro Version','hotel-melbourne'); ?></a>
			       </div>					
             </div>				
			
	</div>
<div class="clearfix"></div>


<!-------Header------------>
<div class="header1">
  <div class="logo">
	<h1><?php printf(__('Welcome to %1s %2s', 'hotel-melbourne'), $theme_data->Name, $theme_data->Version ); ?></h1>
	<h2><?php printf(__('Getting Started with %s', 'hotel-melbourne'), $theme_data->Name); ?>:</h2>
	<p class="faq-text"><?php printf('How to set-up Home page ?.','hotel-melbourne'); ?></p>
	<p class="page-text"><?php printf('1. Go to <b>Admin Dashboard >> Pages >> Add new Page</b>. Now select the <b style="color:#FF4136;"> " Home-page " </b>template from right sidebar Template select option and publish the page.', 'hotel-melbourne'); ?></p>
	<p class="page-text"><?php printf('2. After that Go to <b>Admin Dashboard >> Settings >> Reading</b>. Now select Static Page and set Front Page and Post Page as your choice.', 'hotel-melbourne'); ?></p>
	<p class="page-text"><?php printf(__('3. %s Theme Customizer for all settings of theme . Click <b style="color:#FF4136;"> "Customize Theme" </b> or Click on given below strip <b style="color:#FF4136;">"View Customizer"</b> Button to open the Customizer now.',  'hotel-melbourne'), $theme_data->Name); ?></p>
	<h2><?php printf('FAQ.','hotel-melbourne'); ?></h2>
	<p class="page-text"><?php printf('1. Child Theme:','hotel-melbourne'); ?></p>
	<p class="page-text"><?php printf('If you modify the theme and it upgrade with next updated version. Then your modifications will be lost. <br>If you want to protect your modifications then you create child theme. Child theme you will ensure your modifications and speed up your development time ','hotel-melbourne'); ?></p>
	<p class="page-text"><?php printf('For child theme to click on' ,'hotel-melbourne'); ?><span class="notify-btn"><a href="https://codex.wordpress.org/Child_Themes" target="_blank" class="at-btn"> <?php _e(' Child Theme', 'hotel-melbourne'); ?></a></span>  <?php printf('Button.','hotel-melbourne'); ?> </p>
  </div>
</div>
<br />

<div class="header1">
  <div class="logo">
    <h2><?php _e('We have add all the option Settings inside the customiser, this is powerfull utility of WordPress, with the help of this you can create your site with live preview, ie customizer will provide you the current time preview. We have not changed any structure so you will still be able to access the previously configured data.','hotel-melbourne');?></h2> 
   </div>
</div>
<br />
<div class="clearfix"></div>
<div class="header1">
  <div class="logo">
  <div class="notify-btn">
		<a href="<?php bloginfo ( 'url' );?>/wp-admin/customize.php" target="_blank" class="at-btn pull-right"><?php _e('View Customizer','hotel-melbourne'); ?></a>
	</div>
	<h2><a href="https://asiathemes.com"><img src="<?php echo get_template_directory_uri();?>/core-functions/option-panel/images/asialogo.png"></a></h2>
	
   </div>
</div>
<div class="clearfix"></div>

<div class="at-notify" id="at-notify">
      <h1 class="text-center"><?php _e('Hotel-Melbourne Latest Awesome pages','hotel-melbourne');?> </h1>
		  <div class="col-md-6">
				<div class="about-image">
					<div class="room-col" style="margin-top:15px;">
						<div class="overly">
							<span>
								 <h2>Rooms Page</h2>
								<a href="http://asiathemes.asia/?item=hotel" target= _blank class="hover_thumb gallery-icon"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/port.png" class="img-responsive">
					</div>
		
				</div>
				
				<h1 class="text-center"><?php _e('Hotel-Melbourne Rooms page','hotel-melbourne');?> </h1>
			</div>
    				
			 <div class="col-md-6">
				<div class="about-image">
					<div class="room-col" style="margin-top:15px;">
						<div class="overly">
							<span>
								 <h2>About Page</h2>
								<a href="http://asiathemes.asia/?item=hotel" target= _blank class="hover_thumb gallery-icon"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/about12.png" class="img-responsive">
					</div>
		
				</div>
			 <h1 class="text-center"><?php _e('Hotel-Melbourne About page','hotel-melbourne');?> </h1>	
				
			</div>		
         </div>				
			
	</div>
	<div class="clearfix"></div>
	<div class="at-notify" id="at-notify">
	  <h1 class="text-center"><?php _e('Our Other Awesome Premium Themes','hotel-melbourne');?> </h1>
		  <div class="col-md-6">
				<div class="about-image">
					 <a href="https://asiathemes.com/businessodetail/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/b.png"></a>
				</div>
				<h1 class="text-center"><?php _e('Hotel Melbourne Premium Theme','hotel-melbourne');?> </h1>
				<div class="notify-btn text-center"><a href="https://asiathemes.com/businessodetail/" target="_blank" class="at-btn"><?php _e('More Details','hotel-melbourne'); ?> </a></div>
			</div>
			
    		 <div class="col-md-6">
				<div class="about-image">
					 <a href="https://asiathemes.com/becorpdetail/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/core-functions/option-panel/images/c.png"></a>
				</div>
				<h1 class="text-center"><?php _e('Becorp Premium Theme','hotel-melbourne');?> </h1>
				<div class="notify-btn text-center"><a href="https://asiathemes.com/becorpdetail/" target="_blank" class="at-btn"><?php _e('More Details','hotel-melbourne'); ?> </a></div>
			</div>	
        </div>				
			
	</div>
	
<div class="clearfix"></div>	

</div>
<div class="clearfix"></div>
<?php }
?>