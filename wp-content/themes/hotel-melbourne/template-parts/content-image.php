<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

		<?php if ( is_single() || '' === get_the_post_thumbnail() ) :
			the_content();

		endif; ?>
	<div class="srb-content wow fadeInUp" data-wow-duration="2s">
					     <div class="blog-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>		
							<div class="blog-post-detail">
								<i class="fa fa-user"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php _e('Posted by:','hotel-melbourne'); the_author(); ?></a>
								<i class="fa fa-calendar"></i><a href="<?php the_permalink();?>"><?php _e('Posted on:','hotel-melbourne');  echo get_the_date('M j,Y'); ?></a>
								<div class="blog-tags">
									<i class="fa fa-tags"></i><a href="#"><?php the_tags('', ', '); ?></a>
								</div>
							</div>
					  </div>
					
					<div class="blog-info wow fadeInUp" data-wow-duration="2s">
						
						<div class="blog-detail-description">
							<?php echo hotel_melbourne_get_blog_excerpt();
							wp_link_pages( array( 'before' => '<div class="blog-pagination" data-aos="fade-left">' . __( 'Pages:', 'hotel-melbourne' ), 'after' => '</div>' ) );?>						
						</div>
					</div>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
	<?php endif; ?>
</div>
</article>