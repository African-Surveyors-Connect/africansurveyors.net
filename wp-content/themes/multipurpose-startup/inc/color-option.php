<?php
	
	$multipurpose_startup_first_theme_color = get_theme_mod('multipurpose_startup_first_theme_color');
	$multipurpose_startup_second_theme_color = get_theme_mod('multipurpose_startup_second_theme_color');

	$multipurpose_startup_custom_css = '';

	if($multipurpose_startup_first_theme_color != false){
		$multipurpose_startup_custom_css .=' .bradcrumbs a:hover, .bradcrumbs span, #sidebar .tagcloud a:hover, input[type="submit"]:hover, .nav-menu ul ul a, .top-header, .button-link, h1.page-title, h1.search-title, .more-btn a, .blogbtn a, #footer input[type="submit"], .inner, .footerinner .tagcloud a:hover, #sidebar input[type="submit"], .pagination .current, #comments input[type="submit"].submit:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #comments a.comment-reply-link{';
			$multipurpose_startup_custom_css .='background-color: '.esc_attr($multipurpose_startup_first_theme_color).';';
		$multipurpose_startup_custom_css .='}';
	}
	if($multipurpose_startup_first_theme_color != false){
		$multipurpose_startup_custom_css .=' a, .nav-menu ul li a:active, .nav-menu ul li a:hover, #sidebar ul li a:hover, .nav-menu ul ul a:hover, .nav-menu a:hover, .social-media i:hover, .contact-details i, .blog-sec h2 a, .blogbtn a:hover, .footerinner ul li a:hover, .nav-menu ul li a:hover, td#prev a, span.meta-nav, .tags a:hover, .tags a:hover i, #sidebar h3, #comments a.comment-reply-link:hover{';
			$multipurpose_startup_custom_css .='color: '.esc_attr($multipurpose_startup_first_theme_color).';';
		$multipurpose_startup_custom_css .='}';
	}
	if($multipurpose_startup_first_theme_color != false){
		$multipurpose_startup_custom_css .=' 
		@media screen and (max-width:1000px){
			.nav-menu ul li a:hover{';
			$multipurpose_startup_custom_css .='border-left-color: '.esc_attr($multipurpose_startup_first_theme_color).';';
		$multipurpose_startup_custom_css .='} }';
	}
	if($multipurpose_startup_first_theme_color != false){
		$multipurpose_startup_custom_css .=' 
		@media screen and (max-width:1000px){
			.nav-menu ul ul a:hover{';
			$multipurpose_startup_custom_css .='border-left-color: '.esc_attr($multipurpose_startup_first_theme_color).';';
		$multipurpose_startup_custom_css .='} }';
	}
	if($multipurpose_startup_first_theme_color != false){
		$multipurpose_startup_custom_css .=' .nav-menu ul ul, hr.startup-head, #startup h2, #sidebar form {';
			$multipurpose_startup_custom_css .='border-color: '.esc_attr($multipurpose_startup_first_theme_color).';';
		$multipurpose_startup_custom_css .='}';
	}

	if($multipurpose_startup_second_theme_color != false){
		$multipurpose_startup_custom_css .=' input[type="submit"],  a.button, #comments a.comment-reply-link:hover, span.page-number,span.page-links-title, .nav-menu ul ul a:hover, .social-media i:hover, #header, .more-btn a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .blogbtn a:hover, #footer, .footerinner .tagcloud a, .bradcrumbs a , #comments input[type="submit"].submit, #sidebar h3, .pagination a:hover, span.meta-nav, .tags a:hover{';
			$multipurpose_startup_custom_css .='background-color: '.esc_attr($multipurpose_startup_second_theme_color).';';
		$multipurpose_startup_custom_css .='}';
	}
	if($multipurpose_startup_second_theme_color != false){
		$multipurpose_startup_custom_css .=' .pagination span, .pagination a, input[type="submit"]:hover, .widget_calendar caption, .nav-menu ul ul a, .time, .social-media i, .logo p, p.bold-font, .button-link a, h1.page-title, h1.search-title, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, #slider .inner_carousel h1, #slider .inner_carousel p, .more-btn a, #startup h2 , .video-post h3, .post-info i, .post-info span , .blogbtn a , .copyright a, #footer .copyright p, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .title-box h1, #wrapper h1, .pagination .current, span.post-title, #comments input[type="submit"].submit:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .logo h1 a, .logo p.site-title a, .entry-content p a, .comment p a, #sidebar .textwidget p a, #footer input[type="submit"], .blog-sec h2 a, .tags a i, p.logged-in-as a, #sidebar td#prev a, #comments a.comment-reply-link, .comment-meta.commentmetadata a, .bradcrumbs a:hover, .woocommerce .woocommerce-breadcrumb, .woocommerce .woocommerce-breadcrumb a, .woocommerce a.added_to_cart, .product_meta a, .woocommerce table.shop_table td a, a.showcoupon{';
			$multipurpose_startup_custom_css .='color: '.esc_attr($multipurpose_startup_second_theme_color).';';
		$multipurpose_startup_custom_css .='}';
	}
	if($multipurpose_startup_second_theme_color != false){
		$multipurpose_startup_custom_css .=' #sidebar aside, .pagination span, .pagination a, .pagination .current, .blog-sec, .tags a:hover{';
			$multipurpose_startup_custom_css .='border-color: '.esc_attr($multipurpose_startup_second_theme_color).';';
		$multipurpose_startup_custom_css .='}';
	}
	
	// Layout Options
	$multipurpose_startup_theme_layout = get_theme_mod( 'multipurpose_startup_theme_layout_options','Default Theme');
    if($multipurpose_startup_theme_layout == 'Default Theme'){
		$multipurpose_startup_custom_css .='body{';
			$multipurpose_startup_custom_css .='max-width: 100%;';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_theme_layout == 'Container Theme'){
		$multipurpose_startup_custom_css .='body{';
			$multipurpose_startup_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_theme_layout == 'Box Container Theme'){
		$multipurpose_startup_custom_css .='body{';
			$multipurpose_startup_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$multipurpose_startup_custom_css .='}';
		$multipurpose_startup_custom_css .='#sidebar label{';
			$multipurpose_startup_custom_css .=' width: 68%;';
		$multipurpose_startup_custom_css .='}';
		$multipurpose_startup_custom_css .='.wrap{';
			$multipurpose_startup_custom_css .=' padding: 29px;';
		$multipurpose_startup_custom_css .='}';
	}


	/*--------------------------- Slider Opacity -------------------*/

	$multipurpose_startup_slider_layout = get_theme_mod( 'multipurpose_startup_slider_opacity','0.5');
	if($multipurpose_startup_slider_layout == '0'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == '0.1'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0.1';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == '0.2'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0.2';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == '0.3'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0.3';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == '0.4'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0.4';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == '0.5'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0.5';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == '0.6'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0.6';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == '0.7'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0.7';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == '0.8'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0.8';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == '0.9'){
		$multipurpose_startup_custom_css .='#slider img{';
			$multipurpose_startup_custom_css .='opacity:0.9';
		$multipurpose_startup_custom_css .='}';
	}

	/*-------------Slider Content Layout -------------------*/
	$multipurpose_startup_slider_layout = get_theme_mod( 'multipurpose_startup_slider_alignment_option','Left Align');
    if($multipurpose_startup_slider_layout == 'Left Align'){
		$multipurpose_startup_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$multipurpose_startup_custom_css .='text-align:left;';
		$multipurpose_startup_custom_css .='}';
		$multipurpose_startup_custom_css .='#slider .carousel-caption{';
		$multipurpose_startup_custom_css .='left:15%; right:30%;';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == 'Center Align'){
		$multipurpose_startup_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$multipurpose_startup_custom_css .='text-align:center;';
		$multipurpose_startup_custom_css .='}';
		$multipurpose_startup_custom_css .='#slider .carousel-caption{';
		$multipurpose_startup_custom_css .='left:20%; right:20%;';
		$multipurpose_startup_custom_css .='}';
	}else if($multipurpose_startup_slider_layout == 'Right Align'){
		$multipurpose_startup_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$multipurpose_startup_custom_css .='text-align:right;';
		$multipurpose_startup_custom_css .='}';
		$multipurpose_startup_custom_css .='#slider .carousel-caption{';
		$multipurpose_startup_custom_css .='left:30%; right:15%;';
		$multipurpose_startup_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$multipurpose_startup_preloader_color = get_theme_mod('multipurpose_startup_preloader_color');

	if($multipurpose_startup_preloader_color != false){
		$multipurpose_startup_custom_css .=' .tg-loader{';
			$multipurpose_startup_custom_css .='border-color: '.esc_attr($multipurpose_startup_preloader_color).';';
		$multipurpose_startup_custom_css .='} ';
		$multipurpose_startup_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$multipurpose_startup_custom_css .='background-color: '.esc_attr($multipurpose_startup_preloader_color).';';
		$multipurpose_startup_custom_css .='} ';
	}

	$multipurpose_startup_preloader_bg_color = get_theme_mod('multipurpose_startup_preloader_bg_color');

	if($multipurpose_startup_preloader_bg_color != false){
		$multipurpose_startup_custom_css .=' #overlayer, .preloader{';
			$multipurpose_startup_custom_css .='background-color: '.esc_attr($multipurpose_startup_preloader_bg_color).';';
		$multipurpose_startup_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/
	$multipurpose_startup_top_button_padding = get_theme_mod('multipurpose_startup_top_button_padding');
	$multipurpose_startup_bottom_button_padding = get_theme_mod('multipurpose_startup_bottom_button_padding');
	$multipurpose_startup_left_button_padding = get_theme_mod('multipurpose_startup_left_button_padding');
	$multipurpose_startup_right_button_padding = get_theme_mod('multipurpose_startup_right_button_padding');
	if($multipurpose_startup_top_button_padding != false || $multipurpose_startup_bottom_button_padding != false || $multipurpose_startup_left_button_padding != false || $multipurpose_startup_right_button_padding != false){
		$multipurpose_startup_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
			$multipurpose_startup_custom_css .='padding-top: '.esc_attr($multipurpose_startup_top_button_padding).'px; padding-bottom: '.esc_attr($multipurpose_startup_bottom_button_padding).'px; padding-left: '.esc_attr($multipurpose_startup_left_button_padding).'px; padding-right: '.esc_attr($multipurpose_startup_right_button_padding).'px; display:inline-block;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_button_border_radius = get_theme_mod('multipurpose_startup_button_border_radius');
	$multipurpose_startup_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
		$multipurpose_startup_custom_css .='border-radius: '.esc_attr($multipurpose_startup_button_border_radius).'px;';
	$multipurpose_startup_custom_css .='}';

	/*----------- Copyright css -----*/
	$multipurpose_startup_copyright_top_padding = get_theme_mod('multipurpose_startup_top_copyright_padding');
	$multipurpose_startup_copyright_bottom_padding = get_theme_mod('multipurpose_startup_top_copyright_padding');
	if($multipurpose_startup_copyright_top_padding != false || $multipurpose_startup_copyright_bottom_padding != false){
		$multipurpose_startup_custom_css .='.inner{';
			$multipurpose_startup_custom_css .='padding-top: '.esc_attr($multipurpose_startup_copyright_top_padding).'px; padding-bottom: '.esc_attr($multipurpose_startup_copyright_bottom_padding).'px; ';
		$multipurpose_startup_custom_css .='}';
	} 

	$multipurpose_startup_copyright_alignment = get_theme_mod('multipurpose_startup_copyright_alignment', 'center');
	if($multipurpose_startup_copyright_alignment == 'center' ){
		$multipurpose_startup_custom_css .='#footer .copyright p{';
			$multipurpose_startup_custom_css .='text-align: '. $multipurpose_startup_copyright_alignment .';';
		$multipurpose_startup_custom_css .='}';
	}elseif($multipurpose_startup_copyright_alignment == 'left' ){
		$multipurpose_startup_custom_css .='#footer .copyright p{';
			$multipurpose_startup_custom_css .=' text-align: '. $multipurpose_startup_copyright_alignment .';';
		$multipurpose_startup_custom_css .='}';
	}elseif($multipurpose_startup_copyright_alignment == 'right' ){
		$multipurpose_startup_custom_css .='#footer .copyright p{';
			$multipurpose_startup_custom_css .='text-align: '. $multipurpose_startup_copyright_alignment .';';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_copyright_font_size = get_theme_mod('multipurpose_startup_copyright_font_size');
	$multipurpose_startup_custom_css .='#footer .copyright p{';
		$multipurpose_startup_custom_css .='font-size: '.esc_attr($multipurpose_startup_copyright_font_size).'px;';
	$multipurpose_startup_custom_css .='}';

	/*------ Topbar padding ------*/
	$multipurpose_startup_top_topbar_padding = get_theme_mod('multipurpose_startup_top_topbar_padding');
	$multipurpose_startup_bottom_topbar_padding = get_theme_mod('multipurpose_startup_bottom_topbar_padding');
	if($multipurpose_startup_top_topbar_padding != false || $multipurpose_startup_bottom_topbar_padding != false){
		$multipurpose_startup_custom_css .='.top-header{';
			$multipurpose_startup_custom_css .='padding-top: '.esc_attr($multipurpose_startup_top_topbar_padding).'px; padding-bottom: '.esc_attr($multipurpose_startup_bottom_topbar_padding).'px; ';
		$multipurpose_startup_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$multipurpose_startup_product_border = get_theme_mod('multipurpose_startup_product_border',true);

	if($multipurpose_startup_product_border == false){
		$multipurpose_startup_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_startup_custom_css .='border: 0;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_product_top = get_theme_mod('multipurpose_startup_product_top_padding',10);
	$multipurpose_startup_product_bottom = get_theme_mod('multipurpose_startup_product_bottom_padding',10);
	$multipurpose_startup_product_left = get_theme_mod('multipurpose_startup_product_left_padding',10);
	$multipurpose_startup_product_right = get_theme_mod('multipurpose_startup_product_right_padding',10);
	if($multipurpose_startup_product_top != false || $multipurpose_startup_product_bottom != false || $multipurpose_startup_product_left != false || $multipurpose_startup_product_right != false){
		$multipurpose_startup_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_startup_custom_css .='padding-top: '.esc_attr($multipurpose_startup_product_top).'px; padding-bottom: '.esc_attr($multipurpose_startup_product_bottom).'px; padding-left: '.esc_attr($multipurpose_startup_product_left).'px; padding-right: '.esc_attr($multipurpose_startup_product_right).'px;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_product_border_radius = get_theme_mod('multipurpose_startup_product_border_radius');
	if($multipurpose_startup_product_border_radius != false){
		$multipurpose_startup_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_startup_custom_css .='border-radius: '.esc_attr($multipurpose_startup_product_border_radius).'px;';
		$multipurpose_startup_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$multipurpose_startup_product_button_top = get_theme_mod('multipurpose_startup_product_button_top_padding',10);
	$multipurpose_startup_product_button_bottom = get_theme_mod('multipurpose_startup_product_button_bottom_padding',10);
	$multipurpose_startup_product_button_left = get_theme_mod('multipurpose_startup_product_button_left_padding',15);
	$multipurpose_startup_product_button_right = get_theme_mod('multipurpose_startup_product_button_right_padding',15);
	if($multipurpose_startup_product_button_top != false || $multipurpose_startup_product_button_bottom != false || $multipurpose_startup_product_button_left != false || $multipurpose_startup_product_button_right != false){
		$multipurpose_startup_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$multipurpose_startup_custom_css .='padding-top: '.esc_attr($multipurpose_startup_product_button_top).'px; padding-bottom: '.esc_attr($multipurpose_startup_product_button_bottom).'px; padding-left: '.esc_attr($multipurpose_startup_product_button_left).'px; padding-right: '.esc_attr($multipurpose_startup_product_button_right).'px;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_product_button_border_radius = get_theme_mod('multipurpose_startup_product_button_border_radius');
	if($multipurpose_startup_product_button_border_radius != false){
		$multipurpose_startup_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$multipurpose_startup_custom_css .='border-radius: '.esc_attr($multipurpose_startup_product_button_border_radius).'px;';
		$multipurpose_startup_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$multipurpose_startup_product_sale_top = get_theme_mod('multipurpose_startup_product_sale_top_padding');
	$multipurpose_startup_product_sale_bottom = get_theme_mod('multipurpose_startup_product_sale_bottom_padding');
	$multipurpose_startup_product_sale_left = get_theme_mod('multipurpose_startup_product_sale_left_padding');
	$multipurpose_startup_product_sale_right = get_theme_mod('multipurpose_startup_product_sale_right_padding');
	if($multipurpose_startup_product_sale_top != false || $multipurpose_startup_product_sale_bottom != false || $multipurpose_startup_product_sale_left != false || $multipurpose_startup_product_sale_right != false){
		$multipurpose_startup_custom_css .='.woocommerce span.onsale {';
			$multipurpose_startup_custom_css .='padding-top: '.esc_attr($multipurpose_startup_product_sale_top).'px; padding-bottom: '.esc_attr($multipurpose_startup_product_sale_bottom).'px; padding-left: '.esc_attr($multipurpose_startup_product_sale_left).'px; padding-right: '.esc_attr($multipurpose_startup_product_sale_right).'px;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_product_sale_border_radius = get_theme_mod('multipurpose_startup_product_sale_border_radius',50);
	if($multipurpose_startup_product_sale_border_radius != false){
		$multipurpose_startup_custom_css .='.woocommerce span.onsale {';
			$multipurpose_startup_custom_css .='border-radius: '.esc_attr($multipurpose_startup_product_sale_border_radius).'px;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_menu_case = get_theme_mod('multipurpose_startup_product_sale_position', 'Right');
	if($multipurpose_startup_menu_case == 'Right' ){
		$multipurpose_startup_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_startup_custom_css .=' left:auto; right:0;';
		$multipurpose_startup_custom_css .='}';
	}elseif($multipurpose_startup_menu_case == 'Left' ){
		$multipurpose_startup_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_startup_custom_css .=' left:-10px; right:auto;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_product_sale_font_size = get_theme_mod('multipurpose_startup_product_sale_font_size',13);
	$multipurpose_startup_custom_css .='.woocommerce span.onsale {';
		$multipurpose_startup_custom_css .='font-size: '.esc_attr($multipurpose_startup_product_sale_font_size).'px;';
	$multipurpose_startup_custom_css .='}';

	/*---- Slider Image overlay -----*/
	$multipurpose_startup_slider_image_overlay = get_theme_mod('multipurpose_startup_slider_image_overlay',true);
	if($multipurpose_startup_slider_image_overlay == false){
		$multipurpose_startup_custom_css .='#slider img {';
			$multipurpose_startup_custom_css .='opacity: 1;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_slider_overlay_color = get_theme_mod('multipurpose_startup_slider_overlay_color');
	if($multipurpose_startup_slider_overlay_color != false){
		$multipurpose_startup_custom_css .='#slider  {';
			$multipurpose_startup_custom_css .='background-color: '.esc_attr($multipurpose_startup_slider_overlay_color).';';
		$multipurpose_startup_custom_css .='}';
	}

	/*---- Comment form ----*/
	$multipurpose_startup_comment_width = get_theme_mod('multipurpose_startup_comment_width', '100');
	$multipurpose_startup_custom_css .='#comments textarea{';
		$multipurpose_startup_custom_css .=' width:'.esc_attr($multipurpose_startup_comment_width).'%;';
	$multipurpose_startup_custom_css .='}';

	$multipurpose_startup_comment_submit_text = get_theme_mod('multipurpose_startup_comment_submit_text', 'Post Comment');
	if($multipurpose_startup_comment_submit_text == ''){
		$multipurpose_startup_custom_css .='#comments p.form-submit {';
			$multipurpose_startup_custom_css .='display: none;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_comment_title = get_theme_mod('multipurpose_startup_comment_title', 'Leave a Reply');
	if($multipurpose_startup_comment_title == ''){
		$multipurpose_startup_custom_css .='#comments h2#reply-title {';
			$multipurpose_startup_custom_css .='display: none;';
		$multipurpose_startup_custom_css .='}';
	} 

	/*------ Footer background css -------*/
	$multipurpose_startup_footer_bg_color = get_theme_mod('multipurpose_startup_footer_bg_color');
	if($multipurpose_startup_footer_bg_color != false){
		$multipurpose_startup_custom_css .='#footer{';
			$multipurpose_startup_custom_css .='background-color: '.esc_attr($multipurpose_startup_footer_bg_color).';';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_footer_bg_image = get_theme_mod('multipurpose_startup_footer_bg_image');
	if($multipurpose_startup_footer_bg_image != false){
		$multipurpose_startup_custom_css .='#footer{';
			$multipurpose_startup_custom_css .='background: url('.esc_attr($multipurpose_startup_footer_bg_image).');';
		$multipurpose_startup_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$multipurpose_startup_feature_image_border_radius = get_theme_mod('multipurpose_startup_feature_image_border_radius');
	if($multipurpose_startup_feature_image_border_radius != false){
		$multipurpose_startup_custom_css .='.blog-sec img{';
			$multipurpose_startup_custom_css .='border-radius: '.esc_attr($multipurpose_startup_feature_image_border_radius).'px;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_feature_image_shadow = get_theme_mod('multipurpose_startup_feature_image_shadow');
	if($multipurpose_startup_feature_image_shadow != false){
		$multipurpose_startup_custom_css .='.blog-sec img{';
			$multipurpose_startup_custom_css .='box-shadow: '.esc_attr($multipurpose_startup_feature_image_shadow).'px '.esc_attr($multipurpose_startup_feature_image_shadow).'px '.esc_attr($multipurpose_startup_feature_image_shadow).'px #aaa;';
		$multipurpose_startup_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$multipurpose_startup_top_sticky_header_padding = get_theme_mod('multipurpose_startup_top_sticky_header_padding');
	$multipurpose_startup_bottom_sticky_header_padding = get_theme_mod('multipurpose_startup_bottom_sticky_header_padding');
	$multipurpose_startup_custom_css .=' .fixed-header{';
		$multipurpose_startup_custom_css .=' padding-top: '.esc_attr($multipurpose_startup_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($multipurpose_startup_bottom_sticky_header_padding).'px';
	$multipurpose_startup_custom_css .='}';

	/*------ Related products ---------*/
	$multipurpose_startup_related_products = get_theme_mod('multipurpose_startup_single_related_products',true);
	if($multipurpose_startup_related_products == false){
		$multipurpose_startup_custom_css .=' .related.products{';
			$multipurpose_startup_custom_css .='display: none;';
		$multipurpose_startup_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$multipurpose_startup_menu_font_size = get_theme_mod('multipurpose_startup_menu_font_size',14);
	if($multipurpose_startup_menu_font_size != false){
		$multipurpose_startup_custom_css .='.nav-menu li a{';
			$multipurpose_startup_custom_css .='font-size: '.esc_attr($multipurpose_startup_menu_font_size).'px;';
		$multipurpose_startup_custom_css .='}';
	}

	$multipurpose_startup_menu_font_weight = get_theme_mod('multipurpose_startup_menu_font_weight');
	$multipurpose_startup_custom_css .='.nav-menu li a{';
		$multipurpose_startup_custom_css .='font-weight: '.esc_attr($multipurpose_startup_menu_font_weight).';';
	$multipurpose_startup_custom_css .='}';

	$multipurpose_startup_menu_case = get_theme_mod('multipurpose_startup_menu_case', 'uppercase');
	if($multipurpose_startup_menu_case == 'uppercase' ){
		$multipurpose_startup_custom_css .='.nav-menu li a{';
			$multipurpose_startup_custom_css .=' text-transform: uppercase;';
		$multipurpose_startup_custom_css .='}';
	}elseif($multipurpose_startup_menu_case == 'capitalize' ){
		$multipurpose_startup_custom_css .='.nav-menu li a{';
			$multipurpose_startup_custom_css .=' text-transform: capitalize;';
		$multipurpose_startup_custom_css .='}';
	}

	// Social Icons Font Size
	$multipurpose_startup_social_icons_font_size = get_theme_mod('multipurpose_startup_social_icons_font_size', '15');
	$multipurpose_startup_custom_css .='.social-media i{';
		$multipurpose_startup_custom_css .='font-size: '.esc_attr($multipurpose_startup_social_icons_font_size).'px;';
	$multipurpose_startup_custom_css .='}';

	// Featured image header
	$header_image_url = multipurpose_startup_banner_image( $image_url = '' );
	$multipurpose_startup_custom_css .='#page-site-header{';
		$multipurpose_startup_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$multipurpose_startup_custom_css .='}';

	$multipurpose_startup_post_featured_image = get_theme_mod('multipurpose_startup_post_featured_image', 'in-content');
	if($multipurpose_startup_post_featured_image == 'banner' ){
		$multipurpose_startup_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img, .page .title-box h1{';
			$multipurpose_startup_custom_css .=' display: none;';
		$multipurpose_startup_custom_css .='}';
		$multipurpose_startup_custom_css .='.page-template-custom-front-page #page-site-header{';
			$multipurpose_startup_custom_css .=' display: none;';
		$multipurpose_startup_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$multipurpose_startup_shop_page_navigation = get_theme_mod('multipurpose_startup_shop_page_navigation',true);
	if ($multipurpose_startup_shop_page_navigation == false) {
		$multipurpose_startup_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$multipurpose_startup_custom_css .='display: none;';
		$multipurpose_startup_custom_css .='}';
	}

	/*---- Slider Height ------*/
	$multipurpose_startup_slider_height = get_theme_mod('multipurpose_startup_slider_height');
	$multipurpose_startup_custom_css .='#slider img{';
		$multipurpose_startup_custom_css .='height: '.esc_attr($multipurpose_startup_slider_height).'px;';
	$multipurpose_startup_custom_css .='}';
	$multipurpose_startup_custom_css .='@media screen and (max-width: 768px){
		#slider img{';
		$multipurpose_startup_custom_css .='height: auto;';
	$multipurpose_startup_custom_css .='} }';

	/*----- Blog Post display type css ------*/
	$multipurpose_startup_blog_post_display_type = get_theme_mod('multipurpose_startup_blog_post_display_type', 'blocks');
	if($multipurpose_startup_blog_post_display_type == 'without blocks' ){
		$multipurpose_startup_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$multipurpose_startup_custom_css .='border: 0;';
		$multipurpose_startup_custom_css .='}';
	}

	/*---------- Responsive style ---------*/
	if (get_theme_mod('multipurpose_startup_hide_topbar_responsive',true) == true && get_theme_mod('multipurpose_startup_top_bar',false) == false) {
		$multipurpose_startup_custom_css .='.top-header{';
			$multipurpose_startup_custom_css .=' display: none;';
		$multipurpose_startup_custom_css .='} ';
	}
	if (get_theme_mod('multipurpose_startup_hide_topbar_responsive',true) == false) {
		$multipurpose_startup_custom_css .='@media screen and (max-width: 575px){
			.top-header{';
			$multipurpose_startup_custom_css .=' display: none;';
		$multipurpose_startup_custom_css .='} }';
	} else if(get_theme_mod('multipurpose_startup_hide_topbar_responsive',true) == true){
		$multipurpose_startup_custom_css .='@media screen and (max-width: 575px){
			.top-header{';
			$multipurpose_startup_custom_css .=' display: block;';
		$multipurpose_startup_custom_css .='} }';
	}

	// Metabox Seperator
	$multipurpose_startup_metabox_seperator = get_theme_mod('multipurpose_startup_metabox_seperator');
	if($multipurpose_startup_metabox_seperator != '' ){
		$multipurpose_startup_custom_css .='.post-info span:after{';
			$multipurpose_startup_custom_css .=' content: "'.esc_attr($multipurpose_startup_metabox_seperator).'"; padding-left:10px;';
		$multipurpose_startup_custom_css .='}';
		$multipurpose_startup_custom_css .='.post-info span:last-child:after{';
			$multipurpose_startup_custom_css .=' content: none;';
		$multipurpose_startup_custom_css .='}';
	}