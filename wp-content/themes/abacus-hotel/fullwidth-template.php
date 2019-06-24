<?php
/* Template Name: Full Width Template */
 get_header(); ?>
<div class="clearfix"></div>
<?php hotel_melbourne_breadcrumbs(); ?>	

	<div class="clearfix"></div>	
<section class="blog-section">
	<div class="container ">
		<div class="row">
		<div class="col-md-12">
<?php
if(have_posts()):
while(have_posts()):
the_post();
 the_content();

endwhile;  ?>
<div class="blog-pagination pull-left wow fadeInLeft" data-wow-delay="0.3s">
				<?php echo paginate_links( array( 
							'show_all' => true,
							'prev_text' => '<', 
							'next_text' => '>',
							)); ?>
				</div>
				<?php endif; ?>	
</div>
	</section>		
<div class="cearfix"></div>	
<?php get_footer(); ?>
</div>
