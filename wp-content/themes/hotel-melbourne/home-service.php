<!----------Services----------------------------------->
<?php 
$melbourne_options=hotel_melbourne_theme_default_data(); 
$home_service_setting = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options );
if($home_service_setting['service_section_enabled'] == 1 ) { ?>
<section class="services-section wow fadeInUp" data-wow-duration="2s">
 <div class="container">
  <div class="row">
	<div class="col-md-12">
		<div class="section-title">
			<h1 class="wow fadeInLeft" data-wow-duration="2s"><?php if($home_service_setting['service_heading_title'] !='') { echo $home_service_setting['service_heading_title']; } ?></h1>
			<p class="wow fadeInRight" data-wow-duration="2s"><?php if($home_service_setting['service_heading_description'] !='') { echo $home_service_setting['service_heading_description']; } ?></p>
		</div>
	  </div>
	</div>
   <div class="clearfix"></div>
    <div class="row">
	     <div class="col-md-4 col-sm-6 service-box wow fadeInUp" data-wow-duration="2s">
		      <div class="service-icon">
			    <?php if($home_service_setting['service_one_icon'] !='') { ?>
				<a href=""><i class="fa <?php echo $home_service_setting['service_one_icon']; ?>"></i></a>
				<?php } ?>
			  </div>
		      <div class="boxes_content">
			  <?php if($home_service_setting['service_one_title'] !='') { ?>
			    <h4 class="boxes_title"><?php echo $home_service_setting['service_one_title']; ?></h4>
				<?php } if($home_service_setting['service_one_description'] !='') { ?>
			    <div class="description"><p><?php echo $home_service_setting['service_one_description']; ?>. </p>
			  </div>
			  <?php } ?>
			</div>
		 </div>
		 
		  <div class="col-md-4 col-sm-6 service-box wow fadeInUp" data-wow-duration="3s">
		      <div class="service-icon">
			    <?php if($home_service_setting['service_two_icon'] !='') { ?>
				<a href=""><i class="fa <?php echo $home_service_setting['service_two_icon']; ?>"></i></a>
				<?php } ?>
			  </div>
		      <div class="boxes_content">
			  <?php if($home_service_setting['service_two_title'] !='') { ?>
			    <h4 class="boxes_title"><?php echo $home_service_setting['service_two_title']; ?></h4>
				<?php } if($home_service_setting['service_two_description'] !='') { ?>
			    <div class="description"><p><?php echo $home_service_setting['service_two_description']; ?>. </p>
			  </div>
			  <?php } ?>
			</div>
		 </div>
		 
		  <div class="col-md-4 col-sm-6 service-box wow fadeInUp" data-wow-duration="4s">
		      <div class="service-icon">
			    <?php if($home_service_setting['service_three_icon'] !='') { ?>
				<a href=""><i class="fa <?php echo $home_service_setting['service_three_icon']; ?>"></i></a>
				<?php } ?>
			  </div>
		      <div class="boxes_content">
			  <?php if($home_service_setting['service_three_title'] !='') { ?>
			    <h4 class="boxes_title"><?php echo $home_service_setting['service_three_title']; ?></h4>
				<?php } if($home_service_setting['service_three_description'] !='') { ?>
			    <div class="description"><p><?php echo $home_service_setting['service_three_description']; ?>. </p>
			  </div>
			  <?php } ?>
			</div>
		 </div>
		 
     </div>
   </div>	 
  </section>
<div class="clearfix"></div>
 <!---------section-collout--------------------->
 <?php } ?>
 