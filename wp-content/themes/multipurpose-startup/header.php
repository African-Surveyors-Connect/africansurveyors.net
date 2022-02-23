<?php
/**
 * The Header for our theme.
 * @package Multipurpose Startup
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>
  <?php if(get_theme_mod('multipurpose_startup_preloader',true)){ ?>
    <?php if(get_theme_mod( 'multipurpose_startup_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'multipurpose_startup_preloader_type') == 'Circle') {?>    
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'multipurpose-startup' ); ?><span class="screen-reader-text"><?php esc_html_e('Skip to content','multipurpose-startup'); ?></span></a>
    <div class="top-bar text-md-start text-center">
      <?php if(get_theme_mod('multipurpose_startup_top_bar',false) == true || get_theme_mod('multipurpose_startup_hide_topbar_responsive',true) == true){ ?>
        <div class="top-header">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 align-self-center">
                <div class="time py-2">
                  <?php if ( get_theme_mod('multipurpose_startup_time','') != "" ) {?>
                    <i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_time_icon','far fa-clock')); ?>"></i><span class="ps-1"><?php echo esc_html( get_theme_mod('multipurpose_startup_time','') ); ?></span>
                  <?php }?>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 align-self-center">
                <div class="social-media text-md-end text-center">
                  <?php if( get_theme_mod( 'multipurpose_startup_facebook' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_facebook','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Facebook','multipurpose-startup'); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'multipurpose_startup_twitter' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_twitter','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Twitter','multipurpose-startup'); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'multipurpose_startup_pintrest' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_pintrest','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_pintrest_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Pinterest','multipurpose-startup'); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'multipurpose_startup_insta' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_insta','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_insta_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Instagram','multipurpose-startup'); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'multipurpose_startup_linkdin' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_linkdin','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_linkdin_icon','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('linkedin','multipurpose-startup'); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'multipurpose_startup_youtube' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_youtube','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_youtube_icon','fab fa-youtube')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Youtube','multipurpose-startup'); ?></span></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
      <div id="contact">
        <div class="container">
          <div class="row">
            <div class="logo col-lg-4 col-md-4 align-self-center">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if( get_theme_mod('multipurpose_startup_show_site_title',true) != ''){ ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php }?>
              <?php endif; ?>
              <?php if( get_theme_mod('multipurpose_startup_show_tagline',true) != ''){ ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                ?>
                  <p class="site-description m-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php endif; ?>
              <?php }?>
            </div>
            <div class="col-lg-8 col-md-8 align-self-center">
              <div class="row">
                <div class="col-lg-4 col-md-4 align-self-center">
                  <div class="contact-details py-3 text-md-start text-center">
                    <div class="row">
                      <?php if ( get_theme_mod('multipurpose_startup_address_text','') != "" ) {?>
                        <div class="col-lg-2 col-md-2 p-0 conatct-font align-self-center">
                          <i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_address_icon','fas fa-map-marker-alt')); ?> px-lg-3 px-md-2 px-3"></i>
                        </div>
                        <div class="col-lg-8 col-md-8">
                          <?php if ( get_theme_mod('multipurpose_startup_address_text','') != "" ) {?>
                            <p class="bold-font m-0"><?php echo esc_html( get_theme_mod('multipurpose_startup_address_text','') ); ?></p>
                          <?php }?>
                          <?php if ( get_theme_mod('multipurpose_startup_address','') != "" ) {?>
                            <p class="m-0"><?php echo esc_html( get_theme_mod('multipurpose_startup_address','') ); ?></p>
                          <?php }?>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 align-self-center">
                  <div class="contact-details py-3 text-md-start text-center">
                    <div class="row">
                      <?php if ( get_theme_mod('multipurpose_startup_email_text','') != "" ) {?>
                        <div class="col-lg-2 col-md-2 p-0 conatct-font align-self-center">
                          <i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_email_icon','fas fa-at')); ?> px-lg-3 px-md-2 px-3"></i>
                        </div>
                        <div class="col-lg-8 col-md-8">
                          <?php if ( get_theme_mod('multipurpose_startup_email_text','') != "" ) {?>
                            <p class="bold-font m-0"><?php echo esc_html( get_theme_mod('multipurpose_startup_email_text','') ); ?></p>
                          <?php }?>
                          <?php if ( get_theme_mod('multipurpose_startup_email','') != "" ) {?>
                            <a href="mailto:<?php echo esc_attr( get_theme_mod('multipurpose_startup_email','') ); ?>"><p class="m-0"><?php echo esc_html( get_theme_mod('multipurpose_startup_email','') ); ?></p><span class="screen-reader-text"><?php esc_html_e('Email', 'multipurpose-startup') ?></span></a>
                          <?php }?>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>          
                <div class="col-lg-4 col-md-4 align-self-center">
                  <div class="contact-details py-3 text-md-start text-center">
                    <div class="row">
                      <?php if ( get_theme_mod('multipurpose_startup_call_text','') != "" ) {?>
                        <div class="col-lg-2 col-md-2 p-0 conatct-font align-self-center">
                          <i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_call_icon','fas fa-phone')); ?> px-lg-3 px-md-2 px-3"></i>
                        </div>
                        <div class="col-lg-8 col-md-8">
                          <?php if ( get_theme_mod('multipurpose_startup_call_text','') != "" ) {?>
                            <p class="bold-font m-0"><?php echo esc_html( get_theme_mod('multipurpose_startup_call_text','' )); ?></p>
                          <?php }?>
                          <?php if ( get_theme_mod('multipurpose_startup_call_number','') != "" ) {?>
                            <a href="tel:<?php echo esc_attr( get_theme_mod('multipurpose_startup_call_number','') ); ?>"><p class="m-0"><?php echo esc_html( get_theme_mod('multipurpose_startup_call_number','')); ?></p><span class="screen-reader-text"><?php esc_html_e('Phone Number', 'multipurpose-startup') ?></span></a>
                          <?php }?>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
      <?php if (has_nav_menu('primary')){ ?> 
        <div class="toggle-menu responsive-menu p-2 text-start">
          <button role="tab"><i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_menu_open_icon','fas fa-bars')); ?> me-2"></i><?php echo esc_html( get_theme_mod('multipurpose_startup_mobile_menu_label', __('Menu','multipurpose-startup'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('multipurpose_startup_mobile_menu_label', __('Menu','multipurpose-startup'))); ?></span></button>
        </div> 
      <?php }?>
      <div id="header" class="<?php if( get_theme_mod( 'multipurpose_startup_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="menu-sec">
            <div class="row">
              <div class="menubox <?php if(get_theme_mod('multipurpose_startup_show_search',true)) { ?>col-lg-9 col-md-6 col-6" <?php } else { ?>col-lg-10 col-md-8 <?php } ?> align-self-center">
                <div id="sidelong-menu" class="nav side-nav">
                  <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'multipurpose-startup' ); ?>">
                    <?php if (has_nav_menu('primary')){
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    } ?>
                    <a href="javascript:void(0)" class="closebtn responsive-menu"><?php echo esc_html( get_theme_mod('multipurpose_startup_close_menu_label', __('Close Menu','multipurpose-startup'))); ?><i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('multipurpose_startup_close_menu_label', __('Close Menu','multipurpose-startup'))); ?></span></a>
                  </nav>
                </div>
              </div>
              <?php if(get_theme_mod('multipurpose_startup_show_search',true) ){ ?>
                <div class="search-box position-relative col-lg-1 col-md-2 col-6 align-self-center">
                  <div class="wrap p-4"><?php get_search_form(); ?></div>
                </div>  
              <?php }?>        
              <div class="col-lg-2 col-md-4 align-self-center"> 
                <?php if ( get_theme_mod('multipurpose_startup_button_text','') != "" ) {?>
                  <div class="button-link py-3 text-center">
                    <a href="<?php echo esc_html( get_theme_mod('multipurpose_startup_button_link','') ); ?>"><i class="<?php echo esc_html(get_theme_mod('multipurpose_startup_button_icon','fas fa-comment')); ?> me-1"></i><?php echo esc_html( get_theme_mod('multipurpose_startup_button_text','') ); ?><span class="screen-reader-text"><?php esc_html_e('Lets Talk','multipurpose-startup'); ?></span></a> 
                  </div>   
                <?php }?> 
              </div>          
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php if(get_theme_mod('multipurpose_startup_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
      <div id="page-site-header">
        <div class='page-header'> 
          <?php the_title( '<h1>', '</h1>' ); ?>
        </div>
      </div>
    <?php }
  }?>