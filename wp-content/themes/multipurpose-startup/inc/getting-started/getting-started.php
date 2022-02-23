<?php
//about theme info
add_action( 'admin_menu', 'multipurpose_startup_gettingstarted' );
function multipurpose_startup_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'multipurpose-startup'), esc_html__('Get Started', 'multipurpose-startup'), 'edit_theme_options', 'multipurpose_startup_guide', 'multipurpose_startup_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function multipurpose_startup_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'multipurpose_startup_admin_theme_style');

//guidline for about theme
function multipurpose_startup_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'multipurpose-startup' );
?>
<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Multipurpose Startup WordPress Theme', 'multipurpose-startup' ); ?></h3>
		</div>
		<div class="color_bg_blue">
			<p>Version: <?php echo esc_html($theme['Version']);?></p>
				<p class="intro_version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and felxible WordPress theme.', 'multipurpose-startup' ); ?></p>
				<div class="blink">
					<h4><?php esc_html_e( 'Theme Created By Themesglance', 'multipurpose-startup' ); ?></h4>
				</div>
			<div class="intro-text"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/themesglance-logo.png" alt="" /></div>
			<div class="coupon-code"><?php esc_html_e( 'Get', 'multipurpose-startup' ); ?> <span><?php esc_html_e( '20% off', 'multipurpose-startup' ); ?></span> <?php esc_html_e( 'on Premium Theme with the discount code: ', 'multipurpose-startup' ); ?> <span><?php esc_html_e( '" Get20 "', 'multipurpose-startup' ); ?></span></div>
		</div>
		<div class="started">
			<h3><?php esc_html_e( 'Lite Theme Info', 'multipurpose-startup' ); ?></h3>
			<p><?php esc_html_e( 'Multipurpose Startup is a professional, creative, clean and modern WordPress startup theme for innovative startup, entrepreneur, IT Company, tech startup, business, digital marketing and online business. It is the best platform to step in the world of business with your innovative ideas supported by this equally exploring theme. It will not fall short in giving the professional look needed in the startups and businesses to gain the trust of people to grow your business. This theme is responsive and looks amazing on different screen sizes by adopting their layouts. It is cross-browser compatible, translation ready and optimized for speed. This startup WordPress theme is essentially search engine optimized to divert maximum traffic towards your website. It is coded from scratch on the strong Bootstrap framework. It is deeply customizable with customization provided for each and every part of the theme. These changes can be brought about by theme customizer which eliminates the need for coding knowledge. Its header, footer and sidebars can be styled in various designs. With social media icons, reach maximum targeted audience with utmost ease. It is thoroughly documented for best use.', 'multipurpose-startup')?></p>
			<hr>
			<h3><?php esc_html_e( 'Help Docs', 'multipurpose-startup' ); ?></h3>
			<ul>
				<p><?php esc_html_e( 'Multipurpose Startup', 'multipurpose-startup' ); ?> <a href="<?php echo esc_url( MULTIPURPOSE_STARTUP_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'multipurpose-startup' ); ?></a></p>
			</ul>
			<hr>
			<h3><?php esc_html_e( 'Get started with Multipurpose Startup Theme', 'multipurpose-startup' ); ?></h3>
			<div class="col-left-inner"> 
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/free-screenshot.png" alt="" />
			</div>		
			<div class="col-right-inner">
				<p><?php esc_html_e( 'Go to', 'multipurpose-startup' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'multipurpose-startup' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'multipurpose-startup' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Easily customizable ', 'multipurpose-startup' ); ?> </li>
					<li><?php esc_html_e( 'Absolutely free', 'multipurpose-startup' ); ?> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'multipurpose-startup'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/responsive.png" alt="" />
			<hr class="firsthr">
			<a href="<?php echo esc_url( MULTIPURPOSE_STARTUP_THEMESGLANCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'multipurpose-startup'); ?></a>
			<a href="<?php echo esc_url( MULTIPURPOSE_STARTUP_THEMESGLANCE_PRO_THEME_URL ); ?>"><?php esc_html_e('Buy Pro', 'multipurpose-startup'); ?></a>
			<a href="<?php echo esc_url( MULTIPURPOSE_STARTUP_THEMESGLANCE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'multipurpose-startup'); ?></a>
			<hr class="secondhr">
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'multipurpose-startup'); ?></h3>
		<ul>
		 	<li><?php esc_html_e( 'Slider with unlimited slides', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'About Section', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "services" listing', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Why Choose Us tabs', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Video Section', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Search courses', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Courses categories listing', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Gallery Plugin with shortcode', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Project" listing', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Leaders" listing', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Faq section with custom posttype', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Testimonials" listing', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Social Icon widget', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Blog Post section on home', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Newsletter with contact form 7', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Record Section', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Contact widget for footer', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Contact page Template', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Recent Post Widget with thumbnails', 'multipurpose-startup'); ?></li>
		 	<li><?php esc_html_e( 'Blog full width, With Left and Right sidebar Template', 'multipurpose-startup'); ?></li>
		</ul>
	</div>
	<div class="service">
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-media-document"></span> <?php esc_html_e('Get Support', 'multipurpose-startup'); ?></h3>
			<ol>
				<li>
				<a href="<?php echo esc_url( MULTIPURPOSE_STARTUP_THEMESGLANCE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'multipurpose-startup'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-welcome-widgets-menus"></span> <?php esc_html_e('Getting Started', 'multipurpose-startup'); ?></h3>
			<ol>
				<li> <?php esc_html_e('Start', 'multipurpose-startup'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'multipurpose-startup'); ?></a> <?php esc_html_e('your website.', 'multipurpose-startup'); ?></li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-star-filled"></span> <?php esc_html_e('Rate This Theme', 'multipurpose-startup'); ?></h3>
			<ol>
				<li>
					<a href="<?php echo esc_url( MULTIPURPOSE_STARTUP_THEMESGLANCE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate it here', 'multipurpose-startup'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-editor-help"></span> <?php esc_html_e( 'Help Docs', 'multipurpose-startup' ); ?></h3>
			<ol>
				<li><?php esc_html_e( 'Multipurpose Startup Lite', 'multipurpose-startup' ); ?> <a href="<?php echo esc_url( MULTIPURPOSE_STARTUP_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'multipurpose-startup' ); ?></a></li>
			</ol>
		</div>
	</div>
</div>
<?php } ?>