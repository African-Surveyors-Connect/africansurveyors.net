<?php
/**
 * The template part for displaying Post
 * @package Multipurpose Startup
 * @subpackage multipurpose_startup
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article>
	<h1><?php the_title(); ?></h1>
	<?php if( get_theme_mod( 'multipurpose_startup_single_post_date',true) != '' || get_theme_mod( 'multipurpose_startup_single_post_author',true) != '' || get_theme_mod( 'multipurpose_startup_single_post_comment_no',true) != '') { ?>
		<div class="post-info p-1">
		    <?php if( get_theme_mod( 'multipurpose_startup_single_post_date',true) != '') { ?>
		      <i class="fa fa-calendar" aria-hidden="true"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date ms-1 me-2"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
		    <?php }?>
		    <?php if( get_theme_mod( 'multipurpose_startup_single_post_author',true) != '') { ?>
		      <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author ms-1 me-2"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
		    <?php }?>
		    <?php if( get_theme_mod( 'multipurpose_startup_single_post_comment_no',true) != '') { ?>
		      <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments ms-1 me-2"> <?php comments_number( __('0 Comments','multipurpose-startup'), __('0 Comments','multipurpose-startup'), __('% Comments','multipurpose-startup') ); ?></span> 
		    <?php }?>
		</div>
	<?php }?>
	<?php if( get_theme_mod( 'multipurpose_startup_single_post_image',true) != '' && get_theme_mod('multipurpose_startup_post_featured_image','in-content') == 'in-content') { ?>
		<?php if(has_post_thumbnail()) { ?>
			<hr>
			<div class="feature-box">	
				<?php the_post_thumbnail(); ?>
			</div>
			<hr>					
		<?php } ?>
	<?php }?>
	<div class="entry-content"><?php the_content();?></div>
	<?php
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title p-3">' . __( 'Pages:', 'multipurpose-startup' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'multipurpose-startup' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );			
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'multipurpose-startup' ),
		) );
	} 	elseif ( is_singular( 'post' ) ) {
		if( get_theme_mod( 'multipurpose_startup_single_post_nav',true) != '') {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('multipurpose_startup_single_post_next_nav_text',__('Next','multipurpose-startup' )) )  . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'multipurpose-startup' ) . '</span> ' .
					'',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('multipurpose_startup_single_post_prev_nav_text',__('Previous','multipurpose-startup' )) ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'multipurpose-startup' ) . '</span> ' .
					'',
			) );
		}
	}
	echo '<div class="clearfix"></div>'; ?>

	<?php if( get_theme_mod( 'multipurpose_startup_metafields_tags',true) != '') { ?>
		<div class="tags mt-3">
			<?php
	        if( $tags = get_the_tags() ) {
	          foreach( $tags as $content_tag ) {
	            $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
	            echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '" class="py-1 px-2 me-2 mb-2"><i class="fas fa-tag me-1"></i>' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
	            }
	        } ?>
		</div> 
	<?php }?>

	<?php
	if( get_theme_mod( 'multipurpose_startup_single_post_comment',true) != '') {
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}?>
</article>

<?php if (get_theme_mod('multipurpose_startup_related_posts',true) != '') {
	get_template_part( 'template-parts/related-post' );
}