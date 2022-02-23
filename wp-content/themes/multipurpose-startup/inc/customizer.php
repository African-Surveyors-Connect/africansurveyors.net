<?php
/**
 * Multipurpose Startup Theme Customizer
 * @package Multipurpose Startup
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function multipurpose_startup_customize_register( $wp_customize ) {	

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-selector.php' );

	class Multipurpose_Startup_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}	

	//add home page setting pannel
	$wp_customize->add_panel( 'multipurpose_startup_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'multipurpose-startup' ),
	    'description' => __( 'Description of what this panel does.', 'multipurpose-startup' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'multipurpose_startup_theme_color_option', array( 
		'panel' => 'multipurpose_startup_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'multipurpose-startup' ) 
	) );

  	$wp_customize->add_setting( 'multipurpose_startup_first_theme_color', array(
	    'default' => '#ffdd59',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_first_theme_color', array(
  		'label' => 'Color Option 1',
	    'description' => __('One can change complete theme global color settings on just one click.', 'multipurpose-startup'),
	    'section' => 'multipurpose_startup_theme_color_option',
	    'settings' => 'multipurpose_startup_first_theme_color',
  	)));

  	$wp_customize->add_setting( 'multipurpose_startup_second_theme_color', array(
	    'default' => '#0f3661',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_second_theme_color', array(
  		'label' => 'Color Option 2',
	    'description' => __('One can change complete theme global color settings on just one click.', 'multipurpose-startup'),
	    'section' => 'multipurpose_startup_theme_color_option',
	    'settings' => 'multipurpose_startup_second_theme_color',
  	)));

	// font array
	$multipurpose_startup_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'multipurpose_startup_typography', array(
    	'title' => __( 'Typography', 'multipurpose-startup' ),
		'priority'   => 30,
		'panel' => 'multipurpose_startup_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'multipurpose_startup_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_paragraph_color', array(
		'label' => __('Paragraph Color', 'multipurpose-startup'),
		'section' => 'multipurpose_startup_typography',
		'settings' => 'multipurpose_startup_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('multipurpose_startup_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_startup_paragraph_font_family', array(
	    'section'  => 'multipurpose_startup_typography',
	    'label'    => __( 'Paragraph Fonts','multipurpose-startup'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_startup_font_array,
	));

	$wp_customize->add_setting('multipurpose_startup_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('multipurpose_startup_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_typography',
		'setting'	=> 'multipurpose_startup_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'multipurpose_startup_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_atag_color', array(
		'label' => __('"a" Tag Color', 'multipurpose-startup'),
		'section' => 'multipurpose_startup_typography',
		'settings' => 'multipurpose_startup_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_startup_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_startup_atag_font_family', array(
	    'section'  => 'multipurpose_startup_typography',
	    'label'    => __( '"a" Tag Fonts','multipurpose-startup'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_startup_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'multipurpose_startup_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_li_color', array(
		'label' => __('"li" Tag Color', 'multipurpose-startup'),
		'section' => 'multipurpose_startup_typography',
		'settings' => 'multipurpose_startup_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('multipurpose_startup_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_startup_li_font_family', array(
	    'section'  => 'multipurpose_startup_typography',
	    'label'    => __( '"li" Tag Fonts','multipurpose-startup'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_startup_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'multipurpose_startup_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_h1_color', array(
		'label' => __('H1 Color', 'multipurpose-startup'),
		'section' => 'multipurpose_startup_typography',
		'settings' => 'multipurpose_startup_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_startup_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_startup_h1_font_family', array(
	    'section'  => 'multipurpose_startup_typography',
	    'label'    => __( 'H1 Fonts','multipurpose-startup'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_startup_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('multipurpose_startup_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('multipurpose_startup_h1_font_size',array(
		'label'	=> __('H1 Font Size','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_typography',
		'setting'	=> 'multipurpose_startup_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'multipurpose_startup_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_h2_color', array(
		'label' => __('h2 Color', 'multipurpose-startup'),
		'section' => 'multipurpose_startup_typography',
		'settings' => 'multipurpose_startup_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_startup_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_startup_h2_font_family', array(
	    'section'  => 'multipurpose_startup_typography',
	    'label'    => __( 'h2 Fonts','multipurpose-startup'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_startup_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('multipurpose_startup_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('multipurpose_startup_h2_font_size',array(
		'label'	=> __('h2 Font Size','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_typography',
		'setting'	=> 'multipurpose_startup_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'multipurpose_startup_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_h3_color', array(
		'label' => __('h3 Color', 'multipurpose-startup'),
		'section' => 'multipurpose_startup_typography',
		'settings' => 'multipurpose_startup_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_startup_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_startup_h3_font_family', array(
	    'section'  => 'multipurpose_startup_typography',
	    'label'    => __( 'h3 Fonts','multipurpose-startup'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_startup_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('multipurpose_startup_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('multipurpose_startup_h3_font_size',array(
		'label'	=> __('h3 Font Size','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_typography',
		'setting'	=> 'multipurpose_startup_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'multipurpose_startup_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_h4_color', array(
		'label' => __('h4 Color', 'multipurpose-startup'),
		'section' => 'multipurpose_startup_typography',
		'settings' => 'multipurpose_startup_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_startup_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_startup_h4_font_family', array(
	    'section'  => 'multipurpose_startup_typography',
	    'label'    => __( 'h4 Fonts','multipurpose-startup'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_startup_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('multipurpose_startup_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('multipurpose_startup_h4_font_size',array(
		'label'	=> __('h4 Font Size','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_typography',
		'setting'	=> 'multipurpose_startup_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'multipurpose_startup_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_h5_color', array(
		'label' => __('h5 Color', 'multipurpose-startup'),
		'section' => 'multipurpose_startup_typography',
		'settings' => 'multipurpose_startup_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_startup_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_startup_h5_font_family', array(
	    'section'  => 'multipurpose_startup_typography',
	    'label'    => __( 'h5 Fonts','multipurpose-startup'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_startup_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('multipurpose_startup_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('multipurpose_startup_h5_font_size',array(
		'label'	=> __('h5 Font Size','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_typography',
		'setting'	=> 'multipurpose_startup_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'multipurpose_startup_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_h6_color', array(
		'label' => __('h6 Color', 'multipurpose-startup'),
		'section' => 'multipurpose_startup_typography',
		'settings' => 'multipurpose_startup_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('multipurpose_startup_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control(
	    'multipurpose_startup_h6_font_family', array(
	    'section'  => 'multipurpose_startup_typography',
	    'label'    => __( 'h6 Fonts','multipurpose-startup'),
	    'type'     => 'select',
	    'choices'  => $multipurpose_startup_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('multipurpose_startup_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('multipurpose_startup_h6_font_size',array(
		'label'	=> __('h6 Font Size','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_typography',
		'setting'	=> 'multipurpose_startup_h6_font_size',
		'type'	=> 'text'
	));

    //Social Icons(topbar)
	$wp_customize->add_section('multipurpose_startup_top_header',array(
		'title'	=> __('Top Header','multipurpose-startup'),
		'description'	=> __('Add Header Content here','multipurpose-startup'),
		'priority'	=> null,
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_top_bar',array(
       'default' => false,
       'sanitize_callback' => 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_top_bar',array(
       'type' => 'checkbox',
       'label' => __('Enable Top Header','multipurpose-startup'),
       'section' => 'multipurpose_startup_top_header'
    ));

    $wp_customize->add_setting('multipurpose_startup_topbar_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_startup_topbar_padding',array(
		'label'	=> esc_html__('Topbar Padding','multipurpose-startup'),
		'section'=> 'multipurpose_startup_top_header',
	));

    $wp_customize->add_setting('multipurpose_startup_top_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_top_topbar_padding',array(
		'description'	=> __('Top','multipurpose-startup'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_startup_top_header',
		'type'=> 'number',
	));

	$wp_customize->add_setting('multipurpose_startup_bottom_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_bottom_topbar_padding',array(
		'description'	=> __('Bottom','multipurpose-startup'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_startup_top_header',
		'type'=> 'number',
	));

    $wp_customize->add_setting('multipurpose_startup_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','multipurpose-startup'),
       'section' => 'multipurpose_startup_top_header'
    ));

    $wp_customize->add_setting('multipurpose_startup_sticky_header_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_startup_sticky_header_padding',array(
		'label'	=> esc_html__('Sticky Header Padding','multipurpose-startup'),
		'section'=> 'multipurpose_startup_top_header',
		'type' => 'hidden',
	));

    $wp_customize->add_setting('multipurpose_startup_top_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_top_sticky_header_padding',array(
		'description'	=> __('Top','multipurpose-startup'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_startup_top_header',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_startup_bottom_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_bottom_sticky_header_padding',array(
		'description'	=> __('Bottom','multipurpose-startup'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_startup_top_header',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_startup_show_search',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_show_search',array(
       'type' => 'checkbox',
       'label' => __('Show/Hide Search','multipurpose-startup'),
       'section' => 'multipurpose_startup_top_header'
    ));

    $wp_customize->add_setting('multipurpose_startup_search_placeholder',array(
       'default' => __('Search','multipurpose-startup'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_startup_search_placeholder',array(
       'type' => 'text',
       'label' => __('Search Placeholder text','multipurpose-startup'),
       'section' => 'multipurpose_startup_top_header'
    ));

    $wp_customize->add_setting('multipurpose_startup_time_icon',array(
		'default'	=> 'far fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_time_icon',array(
		'label'	=> __('Time Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_top_header',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_time',array(
		'label'	=> __('Add Time','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_facebook_icon',array(
		'label'	=> __('Facebook Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_top_header',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_facebook',array(
		'label'	=> __('Add Facebook link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_twitter_icon',array(
		'label'	=> __('Twitter Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_top_header',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_twitter',array(
		'label'	=> __('Add Twitter link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_twitter',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_pintrest_icon',array(
		'default'	=> 'fab fa-pinterest-p',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_pintrest_icon',array(
		'label'	=> __('Pintrest Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_top_header',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_pintrest',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_pintrest',array(
		'label'	=> __('Add Pintrest link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_pintrest',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_insta_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_insta_icon',array(
		'label'	=> __('Instagram Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_top_header',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_insta',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_insta',array(
		'label'	=> __('Add Instagram link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_insta',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_linkdin_icon',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_linkdin_icon',array(
		'label'	=> __('Linkedin Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_top_header',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_linkdin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_linkdin',array(
		'label'	=> __('Add Linkedin link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_linkdin',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_youtube_icon',array(
		'label'	=> __('Youtube Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_top_header',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_youtube',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_youtube',array(
		'label'	=> __('Add Youtube link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_youtube',
		'type'	=> 'url'
	));

	$wp_customize->add_setting( 'multipurpose_startup_social_icons_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_social_icons_font_size', array(
        'label'  => __('Social Icons Font Size','multipurpose-startup'),
        'section'  => 'multipurpose_startup_top_header',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	$wp_customize->add_section('multipurpose_startup_header',array(
		'title'	=> __('Header','multipurpose-startup'),
		'priority'	=> null,
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_menu_case',array(
        'default' => 'uppercase',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_menu_case',array(
        'type' => 'select',
        'label' => __('Menu Case','multipurpose-startup'),
        'section' => 'multipurpose_startup_header',
        'choices' => array(
            'uppercase' => __('Uppercase','multipurpose-startup'),
            'capitalize' => __('Capitalize','multipurpose-startup'),
        ),
	) );

	$wp_customize->add_setting( 'multipurpose_startup_menu_font_size', array(
		'default'=> '14',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_menu_font_size', array(
        'label'  => __('Menu Font Size','multipurpose-startup'),
        'section'  => 'multipurpose_startup_header',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('multipurpose_startup_menu_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menu Font Weight','multipurpose-startup'),
        'section' => 'multipurpose_startup_header',
        'choices' => array(
            '100' => __('100','multipurpose-startup'),
            '200' => __('200','multipurpose-startup'),
            '300' => __('300','multipurpose-startup'),
            '400' => __('400','multipurpose-startup'),
            '500' => __('500','multipurpose-startup'),
            '600' => __('600','multipurpose-startup'),
            '700' => __('700','multipurpose-startup'),
            '800' => __('800','multipurpose-startup'),
            '900' => __('900','multipurpose-startup'),
        ),
	) );

	//Topbar section
	$wp_customize->add_section('multipurpose_startup_topbar_icon',array(
		'title'	=> __('Contact Details','multipurpose-startup'),
		'description'	=> __('Add Header Content here','multipurpose-startup'),
		'priority'	=> null,
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_address_icon',array(
		'default'	=> 'fas fa-map-marker-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_address_icon',array(
		'label'	=> __('Adrress Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_topbar_icon',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_address_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_startup_address_text',array(
		'label'	=> __('Add Adrress Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_address_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_address',array(
		'label'	=> __('Add Address','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_email_icon',array(
		'default'	=> 'fas fa-at',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_email_icon',array(
		'label'	=> __('Email Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_topbar_icon',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_email_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_startup_email_text',array(
		'label'	=> __('Add Email Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_email_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('multipurpose_startup_email',array(
		'label'	=> __('Add Email Address','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_call_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_call_icon',array(
		'label'	=> __('Contact Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_topbar_icon',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_call_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_call_text',array(
		'label'	=> __('Add Contact Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_call_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_call_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_phone_number'
	));	
	$wp_customize->add_control('multipurpose_startup_call_number',array(
		'label'	=> __('Add Contact Number','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_call_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_button_icon',array(
		'default'	=> 'fas fa-comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_button_icon',array(
		'label'	=> __('Button Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_topbar_icon',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_button_text',array(
		'label'	=> __('Add Button Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_button_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_button_link',array(
		'label'	=> __('Add Button Link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_button_link',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'multipurpose_startup_slider_section' , array(
    	'title'   => __( 'Slider Settings', 'multipurpose-startup' ),
		'priority'   => null,
		'panel' => 'multipurpose_startup_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_startup_slider_arrows',array(
      	'default' => false,
      	'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_startup_slider_arrows',array(
      	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','multipurpose-startup'),
      	'section' => 'multipurpose_startup_slider_section',
	));

	$wp_customize->add_setting('multipurpose_startup_slider_title',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_startup_slider_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Title','multipurpose-startup'),
      	'section' => 'multipurpose_startup_slider_section'
	));

	$wp_customize->add_setting('multipurpose_startup_slider_content',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_startup_slider_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Content','multipurpose-startup'),
      	'section' => 'multipurpose_startup_slider_section'
	));

	$wp_customize->add_setting('multipurpose_startup_slider_button',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_startup_slider_button',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','multipurpose-startup'),
      	'section' => 'multipurpose_startup_slider_section'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'multipurpose_startup_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'multipurpose_startup_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'multipurpose_startup_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'multipurpose-startup' ),
			'section'  => 'multipurpose_startup_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'multipurpose_startup_slider_speed', array(
		'default'              => 3000,
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_startup_slider_speed', array(
		'label'       => esc_html__( 'Slider Speed','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_slider_section',
		'type'        => 'number',
		'settings'    => 'multipurpose_startup_slider_speed',
		'input_attrs' => array(
			'step'             => 500,
			'min'              => 500,
			'max'              => 5000,
		),
	) );

	//content Alignment
    $wp_customize->add_setting('multipurpose_startup_slider_alignment_option',array(
    'default' => 'Left Align',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_slider_alignment_option',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','multipurpose-startup'),
        'section' => 'multipurpose_startup_slider_section',
        'choices' => array(
            'Center Align' => __('Center Align','multipurpose-startup'),
            'Left Align' => __('Left Align','multipurpose-startup'),
            'Right Align' => __('Right Align','multipurpose-startup'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'multipurpose_startup_slider_excerpt', array(
		'default'              => 25,
		'sanitize_callback'    => 'multipurpose_startup_sanitize_float',
	) );
	$wp_customize->add_control( 'multipurpose_startup_slider_excerpt', array(
		'label'       => esc_html__( 'Slider Excerpt length','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_slider_section',
		'type'        => 'number',
		'settings'    => 'multipurpose_startup_slider_excerpt',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('multipurpose_startup_slider_image_overlay',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_startup_slider_image_overlay',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Image Overlay','multipurpose-startup'),
      	'section' => 'multipurpose_startup_slider_section',
	));

	$wp_customize->add_setting( 'multipurpose_startup_slider_overlay_color', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_slider_overlay_color', array(
	    'label' => __('Slider Overlay Color', 'multipurpose-startup'),
	    'section' => 'multipurpose_startup_slider_section',
  	)));

	//Opacity
	$wp_customize->add_setting('multipurpose_startup_slider_opacity',array(
      'default'              => 0.5,
      'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control( 'multipurpose_startup_slider_opacity', array(
		'label'       => esc_html__( 'Slider Image Opacity','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_slider_section',
		'type'        => 'select',
		'settings'    => 'multipurpose_startup_slider_opacity',
		'choices' => array(
	      '0' =>  esc_attr('0','multipurpose-startup'),
	      '0.1' =>  esc_attr('0.1','multipurpose-startup'),
	      '0.2' =>  esc_attr('0.2','multipurpose-startup'),
	      '0.3' =>  esc_attr('0.3','multipurpose-startup'),
	      '0.4' =>  esc_attr('0.4','multipurpose-startup'),
	      '0.5' =>  esc_attr('0.5','multipurpose-startup'),
	      '0.6' =>  esc_attr('0.6','multipurpose-startup'),
	      '0.7' =>  esc_attr('0.7','multipurpose-startup'),
	      '0.8' =>  esc_attr('0.8','multipurpose-startup'),
	      '0.9' =>  esc_attr('0.9','multipurpose-startup')
	  ),
	));

	$wp_customize->add_setting( 'multipurpose_startup_slider_button_label', array(
		'default' => __('READ MORE','multipurpose-startup' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_startup_slider_button_label', array(
		'label' => esc_html__( 'Slider Button Label','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_slider_section',
		'type'        => 'text',
		'settings'    => 'multipurpose_startup_slider_button_label'
	) );

	$wp_customize->add_setting( 'multipurpose_startup_slider_height', array(
		'default'          => '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_startup_slider_height', array(
		'label'       => esc_html__( 'Slider Height','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_slider_section',
		'type'        => 'number',
		'description' => __('Measurement is in pixel.','multipurpose-startup'),
		'input_attrs' => array(
			'step' => 1,
			'min'  => 500,
			'max'  => 1000,
		),
	) );

	//Startup Section
	$wp_customize->add_section('multipurpose_startup_startup',array(
		'title'	=> __('Who We Are Section','multipurpose-startup'),
		'description'	=> __('Add Who We Are sections below.','multipurpose-startup'),
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_startup_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_startup_title',array(
		'label'	=> __('Section Title','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_startup',
		'type'		=> 'text'
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';	
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('multipurpose_startup_startup_post',array(
		'sanitize_callback' => 'multipurpose_startup_sanitize_choices',
	));
	$wp_customize->add_control('multipurpose_startup_startup_post',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','multipurpose-startup'),
		'section' => 'multipurpose_startup_startup',
	));

	//layout setting
	$wp_customize->add_section( 'multipurpose_startup_theme_layout', array(
    	'title'    => __( 'Blog Settings', 'multipurpose-startup' ),
		'priority'   => null,
		'panel' => 'multipurpose_startup_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('multipurpose_startup_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	) );
	$wp_customize->add_control('multipurpose_startup_layout',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Blog Layout', 'multipurpose-startup' ),
	        'section' => 'multipurpose_startup_theme_layout',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','multipurpose-startup'),
	            'Right Sidebar' => __('Right Sidebar','multipurpose-startup'),
	            'One Column' => __('One Column','multipurpose-startup'),
	            'Three Columns' => __('Three Columns','multipurpose-startup'),
	            'Four Columns' => __('Four Columns','multipurpose-startup'),
	            'Grid Layout' => __('Grid Layout','multipurpose-startup')
	        ),
	    )
    );

    $wp_customize->add_setting('multipurpose_startup_blog_post_display_type',array(
        'default' => 'blocks',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
    ));
	$wp_customize->add_control('multipurpose_startup_blog_post_display_type', array(
        'type' => 'select',
        'label' => __( 'Blog Page Display Type', 'multipurpose-startup' ),
        'section' => 'multipurpose_startup_theme_layout',
        'choices' => array(
            'blocks' => __('Blocks','multipurpose-startup'),
            'without blocks' => __('Without Blocks','multipurpose-startup'),
        ),
    ));

    $wp_customize->add_setting('multipurpose_startup_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','multipurpose-startup'),
       'section' => 'multipurpose_startup_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_startup_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','multipurpose-startup'),
       'section' => 'multipurpose_startup_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_startup_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback' => 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','multipurpose-startup'),
       'section' => 'multipurpose_startup_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_startup_metafields_time',array(
       'default' => 'true',
       'sanitize_callback' => 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_metafields_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Time','multipurpose-startup'),
       'section' => 'multipurpose_startup_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_startup_post_navigation',array(
       'default' => 'true',
       'sanitize_callback' => 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_post_navigation',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Post Navigation','multipurpose-startup'),
       'section' => 'multipurpose_startup_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_startup_metabox_seperator',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_startup_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','multipurpose-startup'),
       'description' => __('Ex: "/", "|", "-", ...','multipurpose-startup'),
       'section' => 'multipurpose_startup_theme_layout'
    ));

    $wp_customize->add_setting('multipurpose_startup_blog_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','multipurpose-startup'),
        'section' => 'multipurpose_startup_theme_layout',
        'choices' => array(
            'No Content' => __('No Content','multipurpose-startup'),
            'Full Content' => __('Full Content','multipurpose-startup'),
            'Excerpt Content' => __('Excerpt Content','multipurpose-startup'),
        ),
	) );

    $wp_customize->add_setting( 'multipurpose_startup_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_startup_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_theme_layout',
		'type'        => 'number',
		'settings'    => 'multipurpose_startup_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'multipurpose_startup_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'multipurpose_startup_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_startup_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_theme_layout',
		'type'        => 'text',
		'settings'    => 'multipurpose_startup_button_excerpt_suffix',
		'active_callback' => 'multipurpose_startup_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'multipurpose_startup_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_feature_image_border_radius', array(
        'label'  => __('Featured Image Border Radius','multipurpose-startup'),
        'section'  => 'multipurpose_startup_theme_layout',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'multipurpose_startup_feature_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_feature_image_shadow', array(
        'label'  => __('Featured Image Shadow','multipurpose-startup'),
        'section'  => 'multipurpose_startup_theme_layout',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'multipurpose_startup_pagination_type', array(
        'default'			=> 'page-numbers',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'multipurpose_startup_pagination_type', array(
        'section' => 'multipurpose_startup_theme_layout',
        'type' => 'select',
        'label' => __( 'Blog Pagination Style', 'multipurpose-startup' ),
        'choices'		=> array(
            'page-numbers'  => __( 'Number', 'multipurpose-startup' ),
            'next-prev' => __( 'Next/Prev', 'multipurpose-startup' ),
    )));

    $wp_customize->add_setting('multipurpose_startup_blog_nav_position',array(
        'default' => 'bottom',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
    ));
	$wp_customize->add_control('multipurpose_startup_blog_nav_position', array(
        'type' => 'select',
        'label' => __( 'Blog Post Navigation Position', 'multipurpose-startup' ),
        'section' => 'multipurpose_startup_theme_layout',
        'choices' => array(
            'top' => __('Top','multipurpose-startup'),
            'bottom' => __('Bottom','multipurpose-startup'),
            'both' => __('Both','multipurpose-startup')
        ),
    ));

	$wp_customize->add_section( 'multipurpose_startup_single_post_settings', array(
		'title' => __( 'Single Post Options', 'multipurpose-startup' ),
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_single_post_breadcrumb',array(
       'default' => 'true',
       'sanitize_callback' => 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_single_post_breadcrumb',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Breadcrumb','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

	$wp_customize->add_setting('multipurpose_startup_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Date','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_startup_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Author','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_startup_single_post_comment_no',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_single_post_comment_no',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment Number','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

	$wp_customize->add_setting('multipurpose_startup_metafields_tags',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_metafields_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Tags','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_startup_single_post_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Featured Image','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

    $wp_customize->add_setting( 'multipurpose_startup_post_featured_image', array(
        'default' => 'in-content',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'multipurpose_startup_post_featured_image', array(
        'section' => 'multipurpose_startup_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Featured Image Display Type', 'multipurpose-startup' ),
        'choices'		=> array(
            'banner'  => __('as Banner Image', 'multipurpose-startup'),
            'in-content' => __( 'as Featured Image', 'multipurpose-startup' ),
    )));

    $wp_customize->add_setting('multipurpose_startup_single_post_nav',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_single_post_nav',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Navigation','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

    $wp_customize->add_setting( 'multipurpose_startup_single_post_prev_nav_text', array(
		'default' => __('Previous','multipurpose-startup' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_startup_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_single_post_settings',
		'type'        => 'text',
		'settings'    => 'multipurpose_startup_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'multipurpose_startup_single_post_next_nav_text', array(
		'default' => __('Next','multipurpose-startup' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_startup_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_single_post_settings',
		'type'        => 'text',
		'settings'    => 'multipurpose_startup_single_post_next_nav_text'
	) );

    $wp_customize->add_setting('multipurpose_startup_single_post_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post comment','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

	$wp_customize->add_setting( 'multipurpose_startup_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_comment_width', array(
        'label'  => __('Comment textarea width','multipurpose-startup'),
        'section'  => 'multipurpose_startup_single_post_settings',
        'description' => __('Measurement is in %.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
        ),
    )));

    $wp_customize->add_setting('multipurpose_startup_comment_title',array(
       'default' => __('Leave a Reply','multipurpose-startup'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_startup_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_startup_comment_submit_text',array(
       'default' => __('Post Comment','multipurpose-startup'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_startup_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Label','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

	$wp_customize->add_setting('multipurpose_startup_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Posts','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

    $wp_customize->add_setting('multipurpose_startup_related_posts_title',array(
       'default' => __('You May Also Like','multipurpose-startup'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_startup_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','multipurpose-startup'),
       'section' => 'multipurpose_startup_single_post_settings'
    ));

    $wp_customize->add_setting( 'multipurpose_startup_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	) );
	$wp_customize->add_control( 'multipurpose_startup_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','multipurpose-startup' ),
		'section' => 'multipurpose_startup_single_post_settings',
		'type' => 'number',
		'settings' => 'multipurpose_startup_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'multipurpose_startup_post_shown_by', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'multipurpose_startup_post_shown_by', array(
        'section' => 'multipurpose_startup_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Related Posts must be shown:', 'multipurpose-startup' ),
        'choices' => array(
            'categories' => __('By Categories', 'multipurpose-startup'),
            'tags' => __( 'By Tags', 'multipurpose-startup' ),
    )));

	// Button option
	$wp_customize->add_section( 'multipurpose_startup_button_options', array(
		'title' =>  __( 'Button Options', 'multipurpose-startup' ),
		'panel' => 'multipurpose_startup_panel_id',
	));

    $wp_customize->add_setting( 'multipurpose_startup_blog_button_text', array(
		'default'   => __('Read Full','multipurpose-startup'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'multipurpose_startup_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','multipurpose-startup' ),
		'section'     => 'multipurpose_startup_button_options',
		'type'        => 'text',
		'settings'    => 'multipurpose_startup_blog_button_text'
	) );

	$wp_customize->add_setting('multipurpose_startup_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_startup_button_padding',array(
		'label'	=> esc_html__('Button Padding','multipurpose-startup'),
		'section'=> 'multipurpose_startup_button_options',
		'active_callback' => 'multipurpose_startup_button_enabled'
	));

	$wp_customize->add_setting('multipurpose_startup_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_top_button_padding',array(
		'label'	=> __('Top','multipurpose-startup'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_startup_button_options',
		'type'=> 'number',
		'active_callback' => 'multipurpose_startup_button_enabled'
	));

	$wp_customize->add_setting('multipurpose_startup_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_bottom_button_padding',array(
		'label'	=> __('Bottom','multipurpose-startup'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_startup_button_options',
		'type'=> 'number',
		'active_callback' => 'multipurpose_startup_button_enabled'
	));

	$wp_customize->add_setting('multipurpose_startup_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_left_button_padding',array(
		'label'	=> __('Left','multipurpose-startup'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_startup_button_options',
		'type'=> 'number',
		'active_callback' => 'multipurpose_startup_button_enabled'
	));

	$wp_customize->add_setting('multipurpose_startup_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_right_button_padding',array(
		'label'	=> __('Right','multipurpose-startup'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_startup_button_options',
		'type'=> 'number',
		'active_callback' => 'multipurpose_startup_button_enabled'
	));

	$wp_customize->add_setting( 'multipurpose_startup_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_button_border_radius', array(
        'label'  => __('Border Radius','multipurpose-startup'),
        'section'  => 'multipurpose_startup_button_options',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
		'active_callback' => 'multipurpose_startup_button_enabled'
    )));

    //Sidebar setting
	$wp_customize->add_section( 'multipurpose_startup_sidebar_options', array(
    	'title'   => __( 'Sidebar options', 'multipurpose-startup' ),
		'priority'   => null,
		'panel' => 'multipurpose_startup_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_startup_single_page_layout',array(
        'default' => 'One Column',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
    ));
	$wp_customize->add_control('multipurpose_startup_single_page_layout', array(
        'type' => 'select',
        'label' => __( 'Single Page Layout', 'multipurpose-startup' ),
        'section' => 'multipurpose_startup_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','multipurpose-startup'),
            'Right Sidebar' => __('Right Sidebar','multipurpose-startup'),
            'One Column' => __('One Column','multipurpose-startup')
        ),
    ));

    $wp_customize->add_setting('multipurpose_startup_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
    ));
	$wp_customize->add_control('multipurpose_startup_single_post_layout', array(
        'type' => 'select',
        'label' => __( 'Single Post Layout', 'multipurpose-startup' ),
        'section' => 'multipurpose_startup_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','multipurpose-startup'),
            'Right Sidebar' => __('Right Sidebar','multipurpose-startup'),
            'One Column' => __('One Column','multipurpose-startup')
        ),
    )); 

    //Advance Options
	$wp_customize->add_section( 'multipurpose_startup_advance_options', array(
    	'title' => __( 'Advance Options', 'multipurpose-startup' ),
		'priority'   => null,
		'panel' => 'multipurpose_startup_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_startup_preloader',array(
       'default' => 'true',
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','multipurpose-startup'),
       'section' => 'multipurpose_startup_advance_options'
    ));

    $wp_customize->add_setting( 'multipurpose_startup_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_preloader_color', array(
  		'label' => __('Preloader Color', 'multipurpose-startup'),
	    'section' => 'multipurpose_startup_advance_options',
	    'settings' => 'multipurpose_startup_preloader_color',
  	)));

  	$wp_customize->add_setting( 'multipurpose_startup_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'multipurpose_startup_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'multipurpose-startup'),
	    'section' => 'multipurpose_startup_advance_options',
	    'settings' => 'multipurpose_startup_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('multipurpose_startup_preloader_type',array(
        'default' => 'Square',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Type','multipurpose-startup'),
        'section' => 'multipurpose_startup_advance_options',
        'choices' => array(
            'Square' => __('Square','multipurpose-startup'),
            'Circle' => __('Circle','multipurpose-startup'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_startup_theme_layout_options',array(
        'default' => 'Default Theme',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','multipurpose-startup'),
        'section' => 'multipurpose_startup_advance_options',
        'choices' => array(
            'Default Theme' => __('Default Theme','multipurpose-startup'),
            'Container Theme' => __('Container Theme','multipurpose-startup'),
            'Box Container Theme' => __('Box Container Theme','multipurpose-startup'),
        ),
	) );

	//404 Page Option
	$wp_customize->add_section('multipurpose_startup_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','multipurpose-startup'),
		'priority'	=> null,
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_404_title',array(
		'label'	=> __('404 Title','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('multipurpose_startup_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_404_button_label',array(
		'label'	=> __('404 button Label','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_404_settings',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_search_result_title',array(
		'label'	=> __('No Search Result Title','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('multipurpose_startup_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_search_result_text',array(
		'label'	=> __('No Search Result Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_404_settings',
		'type'		=> 'text'
	));	

	//Responsive Settings
	$wp_customize->add_section('multipurpose_startup_responsive_options',array(
		'title'	=> __('Responsive Options','multipurpose-startup'),
		'panel' => 'multipurpose_startup_panel_id'
	));

	$wp_customize->add_setting('multipurpose_startup_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_menu_open_icon',array(
		'label'	=> __('Menu Open Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_mobile_menu_label',array(
       'default' => __('Menu','multipurpose-startup'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_startup_mobile_menu_label',array(
       'type' => 'text',
       'label' => __('Mobile Menu Label','multipurpose-startup'),
       'section' => 'multipurpose_startup_responsive_options'
    ));

	$wp_customize->add_setting('multipurpose_startup_menu_close_icon',array(
		'default'	=> 'fas fa-times-circle',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Multipurpose_Startup_Icon_Selector(
        $wp_customize,'multipurpose_startup_menu_close_icon',array(
		'label'	=> __('Menu Close Icon','multipurpose-startup'),
		'section' => 'multipurpose_startup_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('multipurpose_startup_close_menu_label',array(
       'default' => __('Close Menu','multipurpose-startup'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('multipurpose_startup_close_menu_label',array(
       'type' => 'text',
       'label' => __('Close Menu Label','multipurpose-startup'),
       'section' => 'multipurpose_startup_responsive_options'
    ));

	$wp_customize->add_setting('multipurpose_startup_hide_topbar_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_startup_hide_topbar_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Top Header','multipurpose-startup'),
      	'section' => 'multipurpose_startup_responsive_options',
	));

	//Woocommerce Options
	$wp_customize->add_section('multipurpose_startup_woocommerce',array(
		'title'	=> __('WooCommerce Options','multipurpose-startup'),
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Sidebar','multipurpose-startup'),
       'section' => 'multipurpose_startup_woocommerce'
    ));

    $wp_customize->add_setting('multipurpose_startup_shop_page_navigation',array(
       'default' => true,
       'sanitize_callback' => 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_shop_page_navigation',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Pagination','multipurpose-startup'),
       'section' => 'multipurpose_startup_woocommerce'
    ));

    $wp_customize->add_setting('multipurpose_startup_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Single Product Page Sidebar','multipurpose-startup'),
       'section' => 'multipurpose_startup_woocommerce'
    ));

    $wp_customize->add_setting('multipurpose_startup_single_related_products',array(
       'default' => true,
       'sanitize_callback' => 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_single_related_products',array(
       'type' => 'checkbox',
       'label' => __('Enable Related Products','multipurpose-startup'),
       'section' => 'multipurpose_startup_woocommerce'
    ));

    $wp_customize->add_setting('multipurpose_startup_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_products_per_page',array(
		'label'	=> __('Products Per Page','multipurpose-startup'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'multipurpose_startup_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('multipurpose_startup_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_products_per_row',array(
		'label'	=> __('Products Per Row','multipurpose-startup'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'multipurpose_startup_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('multipurpose_startup_product_border',array(
       'default' => true,
       'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
    ));
    $wp_customize->add_control('multipurpose_startup_product_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide product border','multipurpose-startup'),
       'section' => 'multipurpose_startup_woocommerce',
    ));

    $wp_customize->add_setting('multipurpose_startup_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_startup_product_padding',array(
		'label'	=> esc_html__('Product Padding','multipurpose-startup'),
		'section'=> 'multipurpose_startup_woocommerce',
	));

	$wp_customize->add_setting( 'multipurpose_startup_product_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_top_padding', array(
		'label' => esc_html__( 'Top','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_startup_product_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_startup_product_left_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_left_padding', array(
		'label' => esc_html__( 'Left','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_startup_product_right_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_right_padding', array(
		'label' => esc_html__( 'Right','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_startup_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_product_border_radius', array(
        'label'  => __('Product Border Radius','multipurpose-startup'),
        'section'  => 'multipurpose_startup_woocommerce',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	$wp_customize->add_setting('multipurpose_startup_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_startup_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','multipurpose-startup'),
		'section'=> 'multipurpose_startup_woocommerce',
	));

	$wp_customize->add_setting( 'multipurpose_startup_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_button_top_padding', array(
		'label' => esc_html__( 'Top','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_startup_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_startup_product_button_left_padding',array(
		'default' => 15,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_button_left_padding', array(
		'label' => esc_html__( 'Left','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_startup_product_button_right_padding',array(
		'default' => 15,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_button_right_padding', array(
		'label' => esc_html__( 'Right','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_startup_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_product_button_border_radius', array(
        'label'  => __('Product Button Border Radius','multipurpose-startup'),
        'section'  => 'multipurpose_startup_woocommerce',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('multipurpose_startup_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','multipurpose-startup'),
        'section' => 'multipurpose_startup_woocommerce',
        'choices' => array(
            'Left' => __('Left','multipurpose-startup'),
            'Right' => __('Right','multipurpose-startup'),
        ),
	) );

	$wp_customize->add_setting( 'multipurpose_startup_product_sale_font_size',array(
		'default' => '13',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_product_sale_font_size', array(
        'label'  => __('Product Sale Font Size','multipurpose-startup'),
        'section'  => 'multipurpose_startup_woocommerce',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('multipurpose_startup_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_startup_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','multipurpose-startup'),
		'section'=> 'multipurpose_startup_woocommerce',
	));

	$wp_customize->add_setting( 'multipurpose_startup_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_startup_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_startup_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('multipurpose_startup_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','multipurpose-startup' ),
		'type' => 'number',
		'section' => 'multipurpose_startup_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'multipurpose_startup_product_sale_border_radius',array(
		'default' => '50',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_product_sale_border_radius', array(
        'label'  => __('Product Sale Border Radius','multipurpose-startup'),
        'section'  => 'multipurpose_startup_woocommerce',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//footer text
	$wp_customize->add_section('multipurpose_startup_footer_section',array(
		'title'	=> __('Footer Section','multipurpose-startup'),
		'panel' => 'multipurpose_startup_panel_id'
	));

	$wp_customize->add_setting('multipurpose_startup_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'multipurpose_startup_sanitize_checkbox'
	));
	$wp_customize->add_control('multipurpose_startup_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','multipurpose-startup'),
      	'section' => 'multipurpose_startup_footer_section',
	));

	$wp_customize->add_setting('multipurpose_startup_back_to_top',array(
        'default' => 'Right',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','multipurpose-startup'),
        'section' => 'multipurpose_startup_footer_section',
        'choices' => array(
            'Left' => __('Left','multipurpose-startup'),
            'Right' => __('Right','multipurpose-startup'),
            'Center' => __('Center','multipurpose-startup'),
        ),
	) );

	$wp_customize->add_setting('multipurpose_startup_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'multipurpose_startup_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'multipurpose-startup'),
		'section'  => 'multipurpose_startup_footer_section',
	)));

	$wp_customize->add_setting('multipurpose_startup_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'multipurpose_startup_footer_bg_image',array(
        'label' => __('Footer Background Image','multipurpose-startup'),
        'section' => 'multipurpose_startup_footer_section'
	)));

	$wp_customize->add_setting('multipurpose_startup_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices',
    ));
    $wp_customize->add_control('multipurpose_startup_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'multipurpose-startup'),
        'section'     => 'multipurpose_startup_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'multipurpose-startup'),
        'choices' => array(
            '1' => __('One column', 'multipurpose-startup'),
            '2' => __('Two columns', 'multipurpose-startup'),
            '3' => __('Three columns', 'multipurpose-startup'),
            '4' => __('Four columns', 'multipurpose-startup')
        ),
    )); 

    $wp_customize->add_setting('multipurpose_startup_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('multipurpose_startup_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','multipurpose-startup'),
		'section'=> 'multipurpose_startup_footer_section',
	));

    $wp_customize->add_setting('multipurpose_startup_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_top_copyright_padding',array(
		'description'	=> __('Top','multipurpose-startup'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_startup_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_startup_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'multipurpose_startup_sanitize_float'
	));
	$wp_customize->add_control('multipurpose_startup_bottom_copyright_padding',array(
		'description'	=> __('Bottom','multipurpose-startup'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'multipurpose_startup_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('multipurpose_startup_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'
	));
	$wp_customize->add_control('multipurpose_startup_copyright_alignment',array(
        'type' => 'radio',
        'label' => __('Copyright Alignment','multipurpose-startup'),
        'section' => 'multipurpose_startup_footer_section',
        'choices' => array(
            'left' => __('Left','multipurpose-startup'),
            'right' => __('Right','multipurpose-startup'),
            'center' => __('Center','multipurpose-startup'),
        ),
	) );

	$wp_customize->add_setting( 'multipurpose_startup_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Multipurpose_Startup_WP_Customize_Range_Control( $wp_customize, 'multipurpose_startup_copyright_font_size', array(
        'label'  => __('Copyright Font Size','multipurpose-startup'),
        'section'  => 'multipurpose_startup_footer_section',
        'description' => __('Measurement is in pixel.','multipurpose-startup'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));
	
	$wp_customize->add_setting('multipurpose_startup_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_text',array(
		'label'	=> __('Copyright Text','multipurpose-startup'),
		'description'	=> __('Add some text for footer like copyright etc.','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'multipurpose_startup_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Multipurpose_Startup_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Multipurpose_Startup_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Multipurpose_Startup_Customize_Section_Pro(
			$manager,
			'multipurpose_startup_pro_link',
				array(
				'priority'   => 9,
				'title'    => esc_html__( 'Startup Pro', 'multipurpose-startup' ),
				'pro_text' => esc_html__( 'Go Pro', 'multipurpose-startup' ),
				'pro_url'  => esc_url('https://www.themesglance.com/themes/multipurpose-startup-wordpress-theme/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'multipurpose-startup-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'multipurpose-startup-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Multipurpose_Startup_Customize::get_instance();