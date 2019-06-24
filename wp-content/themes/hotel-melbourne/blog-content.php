<div class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >	
	  <?php $melbourne_options=hotel_melbourne_theme_default_data(); 
			$home_latest_post_option = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options );
			global $i; $i=1; $norecord=1;
				
				$count_posts=$home_latest_post_option['post_display_count'];
				if(have_posts()) :
				$args = array('post_type' => 'post' ,'posts_per_page'=>$count_posts, 'post__not_in'=>get_option('sticky_posts'));
				$blog_default = new WP_Query($args);
				while($blog_default->have_posts()):
					$blog_default->the_post();?>
         <div class="col-md-4">
		   <div class="blog-area home-blog wow fadeInUp" data-wow-duration="2s">
				  <div class="date-caption">
				  <?php if(has_post_thumbnail()) { ?>
					   <div class="date"><?php echo get_the_date('j'); ?> <span>/<?php echo get_the_date('M'); ?></span></div>
					 <?php } else { echo ""; } ?>
					 </div>
					<div class="room-col">
						<div class="overly">
							<span>
								<a href="<?php the_permalink(); ?>" class="hover_thumb gallery-icons"><i class="fa fa-link"></i></a>
							</span>
						</div>
						<?php $default_img = array("class" => "img-responsive");
						if(has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$default_img); ?> 
						</a>
						<?php endif; ?>
					</div>	
					<div class="blog-info">
						<div class="blog-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></h2></div>		
							<div class="blog-post-detail">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><i class="fa fa-user"></i><?php _e('Posted by:','hotel-melbourne'); the_author(); ?></a>
								<div class="blog-tags">
									<i class="fa fa-tags"></i><a href="<?php the_permalink(); ?>"><?php the_tags('', ', '); ?></a>
								</div>
							</div>
						<div class="blog-detail-description">
							<p><?php the_excerpt( __( 'More' , 'hotel-melbourne' ) ); ?>.</p>
						</div>							
					</div>
				</div>
         </div>
		 <?php if($i%3==0) { echo "<div class='clearfix'></div>";  } $i++; $norecord=1; endwhile; endif;  ?>
	  </div>   