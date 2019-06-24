<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php esc_attr_e( 'This post is password protected. Enter the password to view any comments.', 'hotel-melbourne' ); ?></p>
	<?php return; endif; ?>
         <?php if ( have_comments() ) : ?>
		<div class="row blog-post-headding wow fadeInUp" data-wow-duration="2s">
				<h2>
				<?php echo comments_number(esc_attr(__('No COMMENTS','hotel-melbourne')), esc_attr(__('1 COMMENT','hotel-melbourne')), '% COMMENTS'); ?>
				</h2>
								
							<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>		
							<?php endif; ?>
							<?php wp_list_comments( array( 'callback' => 'hotel_melbourne_comment' ) ); ?>
										
					
				
		
		</div>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php esc_attr_e( 'Comment navigation', 'hotel-melbourne' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_attr(__( '&larr; Older Comments', 'hotel-melbourne' )) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_attr(__( 'Newer Comments &rarr;', 'hotel-melbourne' )) ); ?></div>
		</nav>
		<?php endif;  ?>
		<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : 
        esc_attr(__("Comments Are Closed!!!",'hotel-melbourne'));
		?>
	<?php endif; ?>
	<?php if ('open' == $post->comment_status) : ?>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php esc_attr_e("You must be",'hotel-melbourne'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php esc_attr_e("logged in",'hotel-melbourne')?></a> <?php esc_attr_e('to post a comment','hotel-melbourne'); ?>
</p>
<?php else : ?>
	
	<div class="row">
	<?php  
	  $fields=array(
		'author' => '<div class="col-md-6  detail-form-comment "> 
							<input type="text" name="author" id="author" class="form-widget form-control" aria-label="" placeholder="' . esc_attr(__('Name', 'hotel-melbourne')) . '"></div>',
		
		'email' => '<div class="col-md-6 detail-form-comment"> 
							<input type="text" name="email" id="email" class="form-widget form-control" aria-label="" placeholder="'. esc_attr(__('Email*','hotel-melbourne')) . '">
						</div>',
	);?>
	</div>
	<div class="blog-post-headding wow fadeInUp" data-wow-duration="3s">
	<?php
		$defaults = array(
		'fields'=> apply_filters( '', $fields ),
		'comment_field'=> '<textarea cols="69" rows="6" class="form-widget form-control" name="comment" id="comment" placeholder="' . esc_attr(__('Comment...','hotel-melbourne')). '"></textarea>',		
		'logged_in_as' => '<p class="logged-in-as">' . esc_attr(__( "Logged in as ",'hotel-melbourne' )).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'">'.esc_attr(__(" Log out?",'hotel-melbourne')).'</a>' . '</p>',
		'title_reply_to' => esc_attr(__( 'Leave a Reply to %s','hotel-melbourne')),
		'class_submit' => 'main-btn about-btn',
		'label_submit'=>esc_attr(__( 'Submit Comments','hotel-melbourne')),
		'comment_notes_before'=> '',
		'comment_notes_after'=>'',
		'title_reply'=> '<h2>'.esc_attr(__('LEAVE A REPLY','hotel-melbourne')).'</h2>',		
		'role_form'=> 'form',		
		);
	comment_form($defaults);?>						
	</div>
<?php endif; // If registration required and not logged in ?>
<?php endif;  ?>