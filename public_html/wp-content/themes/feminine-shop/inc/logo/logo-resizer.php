<?php
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function feminine_shop_logo_customize_register( $wp_customize ) {
	// Logo Resizer additions
	$wp_customize->add_setting( 'logo_size', array(
		'default'              => 50,
		'type'                 => 'theme_mod',
		'theme_supports'       => 'custom-logo',
		'transport'            => 'refresh',
		'sanitize_callback'    => 'feminine_shop_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );

	$wp_customize->add_control( 'logo_size', array(
		'label'       => esc_html__( 'Logo Size','feminine-shop' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'range',
		'settings'    => 'logo_size',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 100,
			'aria-valuemin'    => 0,
			'aria-valuemax'    => 100,
			'aria-valuenow'    => 50,
			'aria-orientation' => 'horizontal',
		),
	) );

	$wp_customize->add_setting('feminine_shop_logo_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('feminine_shop_logo_padding',array(
		'label'	=> __('Logo Padding','feminine-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','feminine-shop'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'feminine-shop' ),
    ),
		'section'=> 'title_tagline',
		'type'=> 'text'
	));

	$wp_customize->add_setting('feminine_shop_logo_margin',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('feminine_shop_logo_margin',array(
		'label'	=> __('Logo Margin','feminine-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','feminine-shop'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'feminine-shop' ),
    ),
		'section'=> 'title_tagline',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'feminine_shop_logo_title_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'feminine_shop_switch_sanitization'
    ));  
    $wp_customize->add_control( new Feminine_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'feminine_shop_logo_title_hide_show',array(
		'label' => esc_html__( 'Show / Hide Site Title','feminine-shop' ),
		'priority'    => 10,
		'section' => 'title_tagline'
    )));

    $wp_customize->add_setting('feminine_shop_site_title_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('feminine_shop_site_title_font_size',array(
		'label'	=> __('Site Title Font Size','feminine-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','feminine-shop'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'feminine-shop' ),
    ),
		'section'=> 'title_tagline',
		'type'=> 'text',
		'active_callback' => 'feminine_shop_logo_title_hide_show'
	));

    $wp_customize->add_setting( 'feminine_shop_tagline_hide_show',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'feminine_shop_switch_sanitization'
    ));  
    $wp_customize->add_control( new Feminine_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'feminine_shop_tagline_hide_show',array(
		'label' => esc_html__( 'Show / Hide Site Tagline','feminine-shop' ),
		'priority'    => 11,
		'section' => 'title_tagline'
    )));

    $wp_customize->add_setting('feminine_shop_site_tagline_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('feminine_shop_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size','feminine-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','feminine-shop'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'feminine-shop' ),
    ),
    'priority'    => 12,
		'section'=> 'title_tagline',
		'type'=> 'text',
		'active_callback' => 'feminine_shop_tagline_hide_show'
	));
}
add_action( 'customize_register', 'feminine_shop_logo_customize_register' );

/**
 * Add support for logo resizing by filtering `get_custom_logo`
 */
function feminine_shop_customize_logo_resize( $html ) {
	$size = get_theme_mod( 'logo_size' );
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	// set the short side minimum
	$min = 48;

	// don't use empty() because we can still use a 0
	if ( is_numeric( $size ) && is_numeric( $custom_logo_id ) ) {

		// we're looking for $img['width'] and $img['height'] of original image
		$logo = wp_get_attachment_metadata( $custom_logo_id );
		if ( ! $logo ) return $html;

		// get the logo support size
		$sizes = get_theme_support( 'custom-logo' );

		// Check for max height and width, default to image sizes if none set in theme
		$max['height'] = isset( $sizes[0]['height'] ) ? $sizes[0]['height'] : $logo['height'];
		$max['width'] = isset( $sizes[0]['width'] ) ? $sizes[0]['width'] : $logo['width'];

		// landscape or square
		if ( $logo['width'] >= $logo['height'] ) {
			$output = feminine_shop_min_max( $logo['height'], $logo['width'], $max['height'], $max['width'], $size, $min );
			$img = array(
				'height'	=> $output['short'],
				'width'		=> $output['long']
			);
		// portrait
		} else if ( $logo['width'] < $logo['height'] ) {
			$output = feminine_shop_min_max( $logo['width'], $logo['height'], $max['width'], $max['height'], $size, $min );
			$img = array(
				'height'	=> $output['long'],
				'width'		=> $output['short']
			);
		}

		// add the CSS
		$css = '
<style>
.custom-logo {
	height: ' . $img['height'] . 'px;
	max-height: ' . $max['height'] . 'px;
	max-width: ' . $max['width'] . 'px;
	width: ' . $img['width'] . 'px;
}
</style>';

		$html = $css . $html;
	}

	return $html;
}
add_filter( 'get_custom_logo', 'feminine_shop_customize_logo_resize' );

/* Helper function to determine the max size of the logo */
function feminine_shop_min_max( $short, $long, $short_max, $long_max, $percent, $min ){
	$ratio = ( $long / $short );
	$max['long'] = ( $long_max >= $long ) ? $long : $long_max;
	$max['short'] = ( $short_max >= ( $max['long'] / $ratio ) ) ? floor( $max['long'] / $ratio ) : $short_max;

	$ppp = ( $max['short'] - $min ) / 100;

	$size['short'] = round( $min + ( $percent * $ppp ) );
	$size['long'] = round( $size['short'] / ( $short / $long ) );

	return $size;
}

/**
 * JS handlers for Customizer Controls
 */
function feminine_shop_customize_controls_js() {
	wp_enqueue_script( 'feminine-shop-customizer-controls', esc_url(get_template_directory_uri()) . '/inc/logo/js/customize-controls.js', array( 'jquery', 'customize-preview' ), '201709071000', true );
}
add_action( 'customize_controls_enqueue_scripts', 'feminine_shop_customize_controls_js' );

/**
 * Adds CSS to the Customizer controls.
 */
function feminine_shop_customize_css() {
	wp_add_inline_style( 'customize-controls', '#customize-control-logo_size input[type=range] { width: 100%; }' );
}
add_action( 'customize_controls_enqueue_scripts', 'feminine_shop_customize_css' );

/**
 * Testing function to remove logo_size theme mod
 */
function feminine_shop_remove_theme_mod() {
	if ( isset( $_GET['remove_logo_size'] ) && 'true' == $_GET['remove_logo_size'] ){
		set_theme_mod( 'logo_size', '' );
	}
}
add_action( 'wp_loaded', 'feminine_shop_remove_theme_mod' );