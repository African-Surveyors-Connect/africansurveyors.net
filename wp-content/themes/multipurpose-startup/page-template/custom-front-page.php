<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action('multipurpose_startup_above_slider_section'); ?>
  
  <?php if( get_theme_mod('multipurpose_startup_slider_arrows',false) != false){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod('multipurpose_startup_slider_speed',3000)); ?>"> 
        <?php $multipurpose_startup_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'multipurpose_startup_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $multipurpose_startup_content_pages[] = $mod;
            }
          }
          if( !empty($multipurpose_startup_content_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $multipurpose_startup_content_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php if ( get_theme_mod('multipurpose_startup_slider_title',true) != '' ) {?>
                    <h1 class="animated fadeInDown"><?php the_title(); ?></h1>
                  <?php }?>
                  <?php if ( get_theme_mod('multipurpose_startup_slider_content',true) != '' ) {?>
                    <p class="m-0"><?php $excerpt = get_the_excerpt(); echo esc_html( multipurpose_startup_string_limit_words( $excerpt, esc_attr(get_theme_mod('multipurpose_startup_slider_excerpt','25')))); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('multipurpose_startup_slider_button_label','READ MORE') != '' && get_theme_mod('multipurpose_startup_slider_button',true) != '') {?>
                    <div class="more-btn mt-3">              
                      <a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right me-1"></i><?php echo esc_html( get_theme_mod('multipurpose_startup_slider_button_label',__('READ MORE','multipurpose-startup')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('multipurpose_startup_slider_button_label',__('READ MORE','multipurpose-startup')) ); ?></span></a>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Previous','multipurpose-startup'); ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Next','multipurpose-startup'); ?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action('multipurpose_startup_above_startup_section'); ?>

  <?php if( get_theme_mod('multipurpose_startup_startup_title') != '' || get_theme_mod('multipurpose_startup_startup_post') != ''){ ?>
    <section id="startup" class="py-5">
      <div class="container">
        <?php if( get_theme_mod('multipurpose_startup_startup_title') != ''){ ?>
          <hr class="startup-head m-0">
          <h2 class="animated fadeInDown ps-2 mb-3 pb-0"><?php echo esc_html(get_theme_mod('multipurpose_startup_startup_title','')); ?></h2>
        <?php }?>
        <div class="video-post">
          <?php
          $multipurpose_startup_postData1 =  get_theme_mod('multipurpose_startup_startup_post');
          if($multipurpose_startup_postData1){
            $args = array( 'name' => esc_html($multipurpose_startup_postData1 ,'multipurpose-startup'));
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="row">
                  <div class="col-lg-6 col-md-6">                  
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <div class="more-btn mt-3"> 
                      <a href="<?php the_permalink(); ?>"><i class="fas fa-info-circle me-1"></i><?php esc_html_e('MORE ABOUT US','multipurpose-startup'); ?><span class="screen-reader-text"><?php esc_html_e('MORE ABOUT US','multipurpose-startup'); ?></span></a>
                    </div>
                  </div> 
                  <div class="col-lg-6 col-md-6">
                    <?php
                      $content = apply_filters( 'the_content', get_the_content() );
                      $video = false;

                      // Only get video from the content if a playlist isn't present.
                      if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                        $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
                      }
                    ?>
                    <div class="box-image animated fadeInDown mt-md-0 mt-3">
                      <?php
                        if ( ! is_single() ) {
                          // If not a single post, highlight the video file.
                          if ( ! empty( $video ) ) {
                            foreach ( $video as $video_html ) {
                              echo '<div class="entry-video">';
                                echo $video_html;
                              echo '</div>';
                            }
                          }
                          elseif(has_post_thumbnail()) { 
                            the_post_thumbnail(); 
                          } 
                        }; 
                      ?>
                    </div>
                  </div>
                </div>
              <?php endwhile; 
              wp_reset_postdata();?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php
          endif; }?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action('multipurpose_startup_after_startup_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>