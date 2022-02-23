<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package Multipurpose Startup
 */
get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="page-content">
		<div class="notfound py-3 text-center">
			<?php if(get_theme_mod('multipurpose_startup_404_title','404 Not Found')){ ?>
				<h1><?php echo esc_html( get_theme_mod('multipurpose_startup_404_title',__('404 Not Found', 'multipurpose-startup' )) ); ?></h1>
			<?php }?>
			<?php if(get_theme_mod('multipurpose_startup_404_button_label','404 Not Found')){ ?>
				<div class="read-moresec mt-3">
	        		<a href="<?php echo esc_url( home_url() ); ?>" class="button py-2 px-4"><?php echo esc_html( get_theme_mod('multipurpose_startup_404_button_label',__('Return to the home page', 'multipurpose-startup' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('multipurpose_startup_404_button_label',__('Return to the home page', 'multipurpose-startup' )) ); ?></span></a>
				</div>
			<?php }?>
		</div>
		<div class="clearfix"></div>
    </main>
</div>
	
<?php get_footer(); ?>