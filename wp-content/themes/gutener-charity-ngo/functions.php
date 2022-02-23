<?php
/**
 * Theme functions and definitions
 *
 * @package Gutener Charity NGO 
 */

require get_stylesheet_directory() . '/inc/customizer/customizer.php';
require get_stylesheet_directory() . '/inc/customizer/loader.php';
require get_stylesheet_directory() . '/inc/child-functions.php';

if ( ! function_exists( 'gutener_charity_ngo_enqueue_styles' ) ) :
	/**
	 * @since Gutener Charity NGO 1.0.0
	 */
	function gutener_charity_ngo_enqueue_styles() {
		$version = wp_get_theme()->parent()->get( 'Version' );
		$version_clean = str_replace( '.', '', $version );
		$version_int = (int)$version_clean;
		if( $version_int < 133 ){
			$parent_array = array(
				'bootstrap',
				'slick',
				'slicknav',
				'slick-theme',
				'font-awesome',
				'gutener-blocks',
				'gutener-google-font'
			);
		}else{
			$parent_array = array(
				'bootstrap',
				'slick',
				'slicknav',
				'slick-theme',
				'fontawesome',
				'gutener-blocks',
				'gutener-google-font'
			);
		}
		wp_enqueue_style( 'gutener-charity-ngo-style-parent', get_template_directory_uri() . '/style.css', $parent_array );
	}

endif;
add_action( 'wp_enqueue_scripts', 'gutener_charity_ngo_enqueue_styles', 1 );

add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );
