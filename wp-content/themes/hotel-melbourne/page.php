<?php get_header(); ?>
<div class="clearfix"></div>
<?php hotel_melbourne_breadcrumbs(); ?>	
<div class="clearfix"></div>	
<section class="blog-section">
	<div class="container ">
		<div class="row">
			<div class="col-md-8 content-area">
				<div class="blog-area wow fadeInUp" data-wow-duration="2s">
					<div class="room-col">
						<div class="overly">
							<span>
								<a href="<?php the_permalink(); ?>" class="hover_thumb gallery-icon"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<?php the_post(); 
								$default_img = array('class' => "img-responsive");
								if(has_post_thumbnail()) :?>
						<?php the_post_thumbnail('',$default_img); ?>
						<?php endif; ?>
					</div>	
					
					<div class="blog-info">	
						<div class="blog-detail-description">
							<p><?php the_content(); ?></p>
						</div>							
					</div>
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
				<?php comments_template( '', true );?>
		</div>
		<?php get_sidebar(); ?>
	</div>
  </div>	
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>