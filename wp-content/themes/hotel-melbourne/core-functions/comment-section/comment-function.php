<?php
if ( ! function_exists( 'hotel_melbourne_comment' ) ) :
function hotel_melbourne_comment( $comment, $args, $depth ) 
{
	$GLOBALS['comments'] = $comment;
	global $comment_data;
	$leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] : 
	__('Reply','hotel-melbourne');?>
	<div class="media comment_box wow fadeInUp" data-wow-duration="2s">
		<a class="pull_left_comment" href="#">
			<?php echo get_avatar($comment,$size = '80');?> 
		</a>
				<div class="media-body">
					<div class="course-area-blog-post ">
						<h4 class="comment_detail_title"><?php the_author();?></h4>
							<ul class="comment_date-reply">
								<li><span class="comment_date"><i><?php comment_date('F j, Y');?>&nbsp;<?php _e('AT','hotel-melbourne');?>&nbsp;<?php comment_time('g:i a'); ?> </i></span></li>
								<li class="pull-right"> <a href="#"><i class="fa fa-comment-o"></i><?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a> </li>
							</ul>	
						<?php comment_text() ;?>
					</div>
				</div>
	</div>
<?php
}
endif;
 add_filter('get_avatar','hotel_melbourne_add_gravatar_class');
 function hotel_melbourne_add_gravatar_class($class) {
    $class = str_replace("class='comment_img'", "class='comment_img'", $class);
     return $class;} ?>