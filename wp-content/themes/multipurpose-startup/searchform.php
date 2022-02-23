<?php
/**
 * The template for displaying search forms in Multipurpose Startup
 * @package Multipurpose Startup
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'multipurpose-startup' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('multipurpose_startup_search_placeholder', __('Search', 'multipurpose-startup')) ); ?>" value="<?php the_search_query(); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'multipurpose-startup' ); ?>">
</form>