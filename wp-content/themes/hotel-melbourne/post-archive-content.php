<div class="col-md-8">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<?php
					if(have_posts()) :
					while(have_posts()) :
							the_post(); ?>
				<div class="blog-area wow fadeInUp" data-wow-duration="2s">
					
					<div class="room-col">
						<div class="overly">
							<span>
								<a href="<?php the_permalink(); ?>" class="hover_thumb gallery-icons"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<?php $default_thumb=array('class'=>"img-responsive");
						if(has_post_thumbnail()) { 

							the_post_thumbnail('',$default_thumb);
							
						} else { 
						echo '<img alt="" src="'. get_template_directory_uri() . '/images/placeholder.jpg' .'">';
							}  ?>
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
							<?php echo hotel_melbourne_get_blog_excerpt();
							wp_link_pages( array( 'before' => '<div class="blog-pagination" data-aos="fade-left">' . __( 'Pages:', 'hotel-melbourne' ), 'after' => '</div>' ) );?>						
						</div>
					</div>
					
				</div>
				<?php endwhile; ?>
				<div class="blog-pagination pull-left wow fadeInLeft" data-wow-delay="0.3s">
				<?php echo paginate_links( array( 
							'show_all' => true,
							'prev_text' => '<', 
							'next_text' => '>',
							)); ?>
				</div>
				<?php  else : ?>
					<h2><?php _e( "Ooops!!... Post Not Found", 'hotel-melbourne' ); ?></h2>
			<div class="">
			<p><?php
			_e( "Sorry, but nothing matched your search criteria. Please try again with some different keywords.", 'hotel-melbourne' ); ?>
			</p>
			<?php get_search_form(); ?>
			</div>
				<div class="clearfix"></div>
				<?php endif; ?>
			</div>
</div>