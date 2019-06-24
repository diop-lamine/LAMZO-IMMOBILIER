<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-post-img home-gallery-img wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; -webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">

		<?php if ( ! is_single() ) :
			if ( ! empty( $audio ) ) :
				foreach ( $audio as $audio_html ) {
					echo '<div class="entry-audio">';
						echo $audio_html;
					echo '</div><!-- .entry-audio -->';
				}
			endif;

		endif;

		 ?>

	</div>
				<div class="clear"></div>
				   <div class="blog-post-title">
					<div class="blog-post-title-wrapper">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
						<?php 
						if ( is_single() || empty( $audio ) ) :
									the_content();
									endif;
						
						wp_link_pages( array( 'before' => '<div class="blog-pagination wow fadeInLeft" data-wow-delay="0.2s">' . __( 'Pages:', 'hotel-melbourne' ), 'after' => '</div>' ) ); ?>
						<div class="btn-left-area">
					      <a href="<?php the_permalink(); ?>" class="main-btn btn-more btn-left"><?php _e('Read More','hotel-melbourne');?>
						</a>
					  </div>
					</div>
				</div>

	<?php
		$content = apply_filters( 'the_content', get_the_content() );
		$audio = false;
		if ( false === strpos( $content, 'wp-playlist-script' ) ) {
			$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
		}

	?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
	<?php endif; ?>

</div>
</article>