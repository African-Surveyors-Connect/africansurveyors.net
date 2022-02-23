<?php
/**
 * Template part for displaying site info
 *
 * @package Gutener Charity NGO
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( get_theme_mod( 'footer_text', '' ) ) ); ?>
	<?php
	printf( esc_html__( '| ', 'gutener-charity-ngo' ) );
	?>
	<?php esc_html_e( 'Developed by', 'gutener-charity-ngo' ); ?>
	<a href="<?php echo esc_url( __( 'https://surveyor-jr.github.io/', 'gutener-charity-ngo' ) ); ?>" target="_blank">
		<?php
		printf( esc_html__( 'Surveyor-Jr', 'gutener-charity-ngo' ) );
		?>
	</a>
</div><!-- .site-info -->