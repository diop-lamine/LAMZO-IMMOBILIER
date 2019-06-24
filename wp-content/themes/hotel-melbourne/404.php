<?php get_header(); ?>

<div class="clearfix"></div>

<?php hotel_melbourne_breadcrumbs(); ?>	
	<div class="clearfix"></div>	

<div class="error-area">		
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="error-inner">
					<div class="text-center" data-aos="fade-up"  data-aos-duration="1500"><i class="fa fa-exclamation-triangle"></i></div>
					<h1 class="wow fadeInUp" data-wow-duration="2s"><?php _e('404','hotel-melbourne');?></h1>
					<h4 class="wow fadeInUp" data-wow-duration="3s"><?php _e('Uups..! Page not found','hotel-melbourne'); ?></h4>
					<p><?php _e('We are sorry, but the page you are looking for doesnt exist.','hotel-melbourne');?></p>
					<div class="main-btn-div class"wow fadeInUp" data-wow-duration="3s"><a class="main-btn caption-btn" href="<?php echo esc_url(site_url());?>"><?php _e('Go Back','hotel-melbourne');?></a></div>		
				</div>
			</div>
		</div>			
	</div>
</div>

<div class="clearfix"></div>

<?php get_footer(); ?>
<div class="clearfix"> </div>
</div>