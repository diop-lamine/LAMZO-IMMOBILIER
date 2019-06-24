<?php
/**
 * The template part for header
 *
 * @package Sirat 
 * @subpackage sirat
 * @since Sirat 1.0
 */
?>
<nav>
	<button class="toggleMenu toggle"><?php esc_html_e('Menu','sirat'); ?></button>
	<div id="header" class="menubar">
		<div class="container">
			<div class="nav">
				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
			</div>	
		</div>
	</div>
</nav>