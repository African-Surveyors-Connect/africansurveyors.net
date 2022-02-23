<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Gutener Charity NGO
 */

if ( ! function_exists( 'navxt_gutener_breadcrumb' ) ) :
	/**
	 * Adds NavXt Breadcrumb 
	 *
	 * @since Gutener Charity NGO 1.0.8
	 * @param bool $transparent_nav True for Transparent Header. 
	 *
	 */
	
	function navxt_gutener_breadcrumb( $transparent_nav = false ) { ?>
		<div class="breadcrumb-wrap">
			<?php if( $transparent_nav ){ ?>
				<div class="container">
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
						<?php bcn_display(); ?>
					</div>
				</div>
			<?php } else{ ?>
		        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php bcn_display(); ?>
				</div>
			<?php } ?>
		</div>
	<?php }
endif;

if( !function_exists( 'gutener_has_social' ) ){
	/**
	* Check if social media icon is empty.
	* 
	* @since Gutener Charity NGO 1.0.8
	* @return bool
	*/
	function gutener_has_social(){
		$social_defaults = array(
			array(
				'icon' 		=> '',
				'link' 		=> '',
				'new_tab' 	=> true,
			)			
		);
		$social_icons = get_theme_mod( 'social_media_links', $social_defaults );
		$has_social = false;
		if ( is_array( $social_icons ) ){
			foreach( $social_icons as $value ){
				if( !empty( $value['icon'] ) ){
					$has_social = true;
					break;
				}
			}
		}
		return $has_social;
	}
}

if( !function_exists( 'gutener_social' ) ){
	/**
	* Add social icons.
	* 
	* @since Gutener Charity NGO 1.0.8
	*/
	function gutener_social(){
		
	    echo '<ul class="social-group">';
		    $count = 0.2;
		    $social_defaults = array(
				array(
					'icon' 		=> '',
					'link' 		=> '',
					'new_tab' 	=> true,
				)			
			);
			$social_icons = get_theme_mod( 'social_media_links', $social_defaults );
		    foreach( $social_icons as $value ){
		        if( isset( $value['new_tab'] ) && $value['new_tab'] ){
		    		$link_target = '_blank';
		    	}else{
		    		$link_target = '';
		    	}
		        if( !empty( $value['icon'] ) ){
		            echo '<li><a href="' . esc_url( $value['link'] ) . '" target="' .esc_html( $link_target ). '"><i class=" ' . esc_attr( $value['icon'] ) . '"></i></a></li>';
		            $count = $count + 0.2;
		        }
		    }
	    echo '</ul>';
	}
}