<?php
/**
 * Functions and definitions
 *
 *
 */
 function revery_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails.
	add_theme_support( 'post-thumbnails' );
    
    // Make theme available for translation.
	load_theme_textdomain( 'revery' );

	// Admin editor styles.
	add_theme_support( 'editor-styles' );

	// Switch default core markup for different forms to output valid HTML5.
	add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Enable block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style();
}
add_action( 'after_setup_theme', 'revery_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function revery_scripts() {
	wp_enqueue_style( 'revery-style', get_stylesheet_uri(), array());
}
add_action( 'wp_enqueue_scripts', 'revery_scripts' );
