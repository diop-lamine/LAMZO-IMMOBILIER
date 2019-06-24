<?php
/**
 * The template part for displaying post
 *
 * @package Sirat 
 * @subpackage sirat
 * @since Sirat 1.0
 */
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box ">
    <?php
      if ( ! is_single() ) {

        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };

      };
    ?>
    <h3 class="section-title"><?php the_title();?></h3>
    <div class="post-info">
      <?php if(get_theme_mod('sirat_toggle_postdate',true)==1){ ?>
        <span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span><span>|</span>
      <?php } ?>

      <?php if(get_theme_mod('sirat_toggle_author',true)==1){ ?>
        <span class="entry-author"> <?php the_author(); ?></span><span>|</span>
      <?php } ?>

      <?php if(get_theme_mod('sirat_toggle_comments',true)==1){ ?>
        <span class="entry-comments"><?php comments_number( __('0 Comment', 'sirat'), __('0 Comments', 'sirat'), __('% Comments', 'sirat') ); ?> </span>
      <?php } ?>
    </div>
    <p><?php $excerpt = get_the_excerpt(); echo esc_html( sirat_string_limit_words( $excerpt, esc_attr(get_theme_mod('sirat_excerpt_number','30')))); ?></p>
    <div class="more-btn">
      <a href="<?php echo esc_url(get_permalink()); ?>" alt="<?php the_title(); ?>"><?php esc_html_e( 'READ MORE', 'sirat' ); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
    </div>
  </div>
</div>