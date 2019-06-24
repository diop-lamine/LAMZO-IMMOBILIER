<?php get_header(); ?>
<div class="clearfix"></div>
<?php hotel_melbourne_breadcrumbs(); ?>	
<div class="clearfix"></div>	
<section class="blog-section">
	<div class="container ">
		<div class="row">
			<div class="<?php if( is_active_sidebar('woocommerce-sidebar')) { echo "col-md-9"; }  else { echo "col-md-12"; } ?> content-area">
				<div class="blog-area wow fadeInUp wooco_page" data-wow-duration="2s">
					<?php woocommerce_content(); ?>
				</div>
	<!-----user------------------->	
	<?php if(is_user_logged_in()){ ?>	
				<article class="blog-author wow fadeInUp" data-wow-duration="2s">
					<div class="media ">
						<div class="pull-left">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ),'class="img-responsive img-circle"' ); ?>
							
						</div>
						<div class="media-body">
							<h6><?php the_author_link(); ?></h6>
							<p><?php
							
							 echo get_the_author_meta( 'description' );
							 if(!get_the_author_meta('description')){ _e('No description.
										Please update your profile.','hotel-melbourne'); } ?></p>
							
						</div>
					</div>	
				</article>
				<?php } ?>
		</div>
		<div class="col-md-3 widget-area">
			<div class="blog-sidebar">
				<?php if ( is_active_sidebar( 'woocommerce-sidebar' ) )
				{ dynamic_sidebar( 'woocommerce-sidebar' );	} ?>
			</div>
		</div>
	</div>
  </div>	
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>