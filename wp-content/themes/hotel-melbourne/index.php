<?php get_header(); ?>
<div class="clearfix"></div>
<?php 
	//$melbourne_options=hotel_melbourne_theme_default_data(); 
	//$slider_setting = wp_parse_args(  get_option( 'melbourne_option', array() ), $melbourne_options ); ?>

<?php hotel_melbourne_breadcrumbs(); ?>	

	<div class="clearfix"></div>	
<section class="blog-section">
	<div class="container ">
		<div class="row">
		<div class="col-md-8">
<?php
if(have_posts()):
while(have_posts()):
the_post();
 get_template_part( 'template-parts/content', get_post_format() );

endwhile;  ?>
<div class="blog-pagination pull-left wow fadeInLeft" data-wow-delay="0.3s">
				<?php echo paginate_links( array( 
							'show_all' => true,
							'prev_text' => '<', 
							'next_text' => '>',
							)); ?>
				</div>
				<?php  else : ?>
					<h2 class="wow fadeInUp" data-wow-duration="2s"><?php _e( "Ooops!!... Post Not Found", 'hotel-melbourne' ); ?></h2>
			<div class="">
			<p><?php
			_e( "Sorry, but nothing matched your search criteria. Please try again with some different keywords.", 'hotel-melbourne' ); ?>
			</p>
			<?php get_search_form(); ?>
			</div>
				<div class="clearfix"></div>
				<?php endif; ?>	
</div>
<?php get_sidebar(); ?>
	</section>		
<div class="cearfix"></div>	
<?php get_footer(); ?>
</div>
