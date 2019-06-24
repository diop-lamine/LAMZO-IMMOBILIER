<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog-area wow fadeInUp" data-wow-duration="2s">
	<?php if ( ! is_single() ) :
			if ( get_post_gallery() ) :
				echo '<div class="gallery">';
					echo get_post_gallery();
				echo '</div>';
			endif;

		endif; ?>

	
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
							<?php 
							if ( is_page() ||  get_post_gallery() ) :
							echo hotel_melbourne_get_blog_excerpt(); endif;	?>						
						</div>
					</div>
</div>
</article>