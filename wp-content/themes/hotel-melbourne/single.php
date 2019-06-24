<?php get_header(); ?>
<div class="clearfix"></div>
<?php hotel_melbourne_breadcrumbs(); ?>	
<div class="clearfix"></div>	
<section class="blog-section">
	<div class="container ">
		<div class="row">
			<div class="col-md-8">
				<div class="blog-area wow fadeInUp" data-wow-duration="2s">
					<div class="room-col">
						<div class="overly">
							<span>
								<a href="<?php the_permalink(); ?>" class="hover_thumb gallery-icons"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<?php the_post(); 
								$default_img = array('class' => "img-responsive");
								if(has_post_thumbnail()) { ?>
						<?php the_post_thumbnail('',$default_img); ?>
						<?php } else { 
						echo '<img alt="" src="'. get_template_directory_uri() . '/images/placeholder.jpg' .'">';
							} ?>
					</div>	
					
					<div class="srb-content">
					     <div class="blog-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>		
							<div class="blog-post-detail">
								<i class="fa fa-user"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php _e('Posted by:','hotel-melbourne'); the_author(); ?></a>
								<i class="fa fa-calendar"></i><a href="<?php the_permalink();?>"><?php _e('Posted on:','hotel-melbourne');  echo get_the_date('M j,Y'); ?></a>
								<div class="blog-tags">
									<i class="fa fa-tags"></i><a href="#"><?php the_tags('', ', '); ?></a>
								</div>
							</div>
					  </div>
					
					<div class="blog-info">
						<div class="blog-detail-description">
							<?php the_content();
							wp_link_pages( array( 'before' => '<div class="blog-pagination wow fadeInLeft" data-wow-delay="0.3s">' . __( 'Pages:', 'hotel-melbourne' ), 'after' => '</div>' ) );?>
							<br />
							<?php hotel_melbourne_content_nav('nav-below');
							?>						
						</div>							
					</div>
				</div>
			<?php hotel_melbourne_author_detail();
				  comments_template( '', true );?>
		</div>
		<div class="cearfix"></div>
		<?php get_sidebar(); ?>
	</div>
   </div>
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>