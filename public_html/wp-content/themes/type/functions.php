<?php
/**
 * Type functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Type
 * @since Type 1.0
 */


/**
* Make theme available for translation.
*/
add_action( 'init', function() {
	load_theme_textdomain( 'type', get_template_directory() . '/languages');
} );


if ( ! function_exists( 'type_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function type_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnail
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'type-medium', 520, 400, true );
	add_image_size( 'type-large', 800, 500, true );
	add_image_size( 'type-fullwidth', 1200, 580, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 1160;

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main_menu' => esc_html__( 'Main Menu', 'type' ),
		'social_menu' => esc_html__( 'Social Menu', 'type' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Enable support for Post Formats
	add_theme_support('post-formats', array( 'image', 'video', 'audio', 'gallery', 'quote' ) );

	// Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 400,
		'width'       => 400,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Set up the WordPress Custom Background Feature.
	$defaults = array(
		'default-color'	=> '#ffffff',
		'default-image'	=> '',
	);
	add_theme_support( 'custom-background', $defaults );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add AMP support
	add_theme_support( 'amp' );

	// This theme styles the visual editor to resemble the theme style,
	add_editor_style( array( 'inc/css/editor-style.css', type_fonts_url() ) );

	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );

	// Add support for custom color scheme.
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Black', 'type' ),
			'slug'  => 'black',
			'color' => '#000000',
		),
		array(
			'name'  => __( 'Dark Gray', 'type' ),
			'slug'  => 'dark-gray',
			'color' => '#222222',
		),
		array(
			'name'  => __( 'Medium Gray', 'type' ),
			'slug'  => 'medium-gray',
			'color' => '#444444',
		),
		array(
			'name'  => __( 'Light Gray', 'type' ),
			'slug'  => 'light-gray',
			'color' => '#888888',
		),
		array(
			'name'  => __( 'White', 'type' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),
		array(
			'name'  => __( 'Accent Color', 'type' ),
			'slug'  => 'accent',
			'color' => esc_attr( get_theme_mod( 'accent_color', '#2e64e6' ) ),
		),
	) );

}
endif;
add_action( 'after_setup_theme', 'type_setup' );


if ( ! function_exists( 'type_fonts_url' ) ) :
/**
 * Register Google fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function type_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Nunito Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Nunito Sans: on or off', 'type' ) ) {
		$fonts[] = 'Nunito Sans:400,700,300,400italic,700italic';
	}

	/* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Poppins: on or off', 'type' ) ) {
		$fonts[] = 'Poppins:400,700';
	}

	/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'type' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
			'display' => 'swap',
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;



/**
 * Add preconnect for Google Fonts.
 *
 * @since Type 1.1.5
 *
 * @param array  $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function type_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'type-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'type_resource_hints', 10, 2 );


/**
 * Enqueue scripts and styles.
 */
function type_scripts() {

	// Add Google Fonts
	wp_enqueue_style( 'type-fonts', type_fonts_url(), array(), null );

	// Add Material Icons
	wp_enqueue_style( 'type-material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons&display=swap', array(), null );

	// Theme stylesheet
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'type-style', get_stylesheet_uri(), array(), $theme_version );

	// Add Social Icons
	wp_enqueue_style( 'type-social-icons', get_template_directory_uri() . '/assets/css/social-icons.css', array(), '1.0.0' );

	if( ! type_is_amp() ) {
		// Main js.
		wp_enqueue_script( 'type-script', get_template_directory_uri() . '/assets/js/script.js', array(), '20210930', true );
		// Comment reply script.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

}
add_action( 'wp_enqueue_scripts', 'type_scripts' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function type_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'type' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'type' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 1', 'type' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'type' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 2', 'type' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'type' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 3', 'type' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'type' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Bottom Widget Area', 'type' ),
		'id'            => 'footer-4',
		'description'   => __( 'One Column Widget Area. Add widgets here to appear at the bottom of the page.', 'type' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	if ( type_is_woocommerce_active() ) {
		register_sidebar( array(
			'name'          => __( 'Shop Sidebar', 'type' ),
			'id'            => 'sidebar-shop',
			'description'   => __( 'Add widgets here to appear in your Shop.', 'type' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title"><span>',
			'after_title'   => '</span></h3>',
		) );
	}
}
add_action( 'widgets_init', 'type_widgets_init' );


/**
 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
 */
if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}


/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function type_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#content">' . __( 'Skip to content', 'type' ) . '</a>';
}
add_action( 'wp_body_open', 'type_skip_link', 5 );


/**
 * Determine whether the current response being served as AMP.
 */
function type_is_amp() {
	return function_exists( 'is_amp_endpoint' ) && is_amp_endpoint();
}


/**
 * Adds a Sub Nav Toggle to the Mobile Menu.
 */
function type_add_sub_menu_toggles( $output, $item, $depth, $args ) {
	if( ! type_is_amp() ) {
		if ( isset( $args->show_sub_menu_toggles ) && $args->show_sub_menu_toggles && in_array( 'menu-item-has-children', $item->classes, true ) ) {
			$output = $output . '<button class="dropdown-toggle" aria-expanded="false"><span class="screen-reader-text">' . __( 'Show sub menu', 'type' ) . '</span>' . '</button>';
		}
	} else {
		if ( isset( $args->show_sub_menu_toggles ) && $args->show_sub_menu_toggles && in_array( 'menu-item-has-children', $item->classes, true ) ) {
			$output = $output . '<button data-amp-bind-class="visible' . $item->ID . ' ? \'dropdown-toggle is-open\' : \'dropdown-toggle is-closed\'" on="tap:AMP.setState({visible' . $item->ID . ': !visible' . $item->ID . '})" class="dropdown-toggle" aria-expanded="false"><span class="screen-reader-text">' . __( 'Show sub menu', 'type' ) . '</span>' . '</button>';
		}
	}
	return $output;
}
add_filter( 'walker_nav_menu_start_el', 'type_add_sub_menu_toggles', 10, 4 );


/**
 * Display the Search Icon
 */
function type_top_search() {
	if( ! type_is_amp() ) {
		echo '<div class="top-search">';
		echo '<span id="top-search-button" class="top-search-button"><i class="search-icon"></i></span>';
		get_search_form();
		echo '</div>';
	} else {
		echo '<div [class]="ampsearch ? \'top-search active\' : \'top-search \'" class="top-search">';
		echo '<span id="top-search-button" class="top-search-button" on="tap:AMP.setState({ampsearch: !ampsearch})"><i class="search-icon"></i></span>';
		get_search_form();
		echo '</div>';
	}
}


/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer-css.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 *  Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function type_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	$header_layout = esc_attr( get_theme_mod('header_layout', 'header-layout1') );
	$blog_sidebar_position = get_theme_mod('blog_sidebar_position', 'content-sidebar');
	$archive_sidebar_position = get_theme_mod('archive_sidebar_position', 'content-sidebar');
	$post_sidebar_position = esc_attr( get_theme_mod('post_sidebar_position', 'content-sidebar') );
	$post_style = esc_attr( get_theme_mod('post_style', 'fimg-classic') );
	$page_sidebar_position = esc_attr( get_theme_mod('page_sidebar_position', 'content-sidebar') );
	$page_style = esc_attr( get_theme_mod('page_style', 'fimg-classic') );

	// Adds a class for Header Layout
	$classes[] = $header_layout;

	if ( type_is_woocommerce_active() && is_woocommerce() ) {

		$woo_layout = esc_attr( get_theme_mod('woocommerce_sidebar_position', 'content-sidebar') );

		// Check if there is no Sidebar.
		if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
			$classes[] = 'has-no-sidebar';
		} else {
			$classes[] = $woo_layout;
		}

	} else {

		// Adds a class to Posts
		if ( is_single() ) {
			$classes[] = $post_style;
		}

		// Adds a class to Pages
		if ( is_page() ) {
			$classes[] = $page_style;
		}

		// Check if there is no Sidebar.
		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			$classes[] = 'has-no-sidebar';
		} else {
			if ( is_home() ) {
				$classes[] = $blog_sidebar_position;
			}
			if ( is_archive() || is_search() ) {
				$classes[] = $archive_sidebar_position;
			}
			if ( is_single() ) {
				$classes[] = $post_sidebar_position;
			}
			if ( is_page() && ! is_home() ) {
				$classes[] = $page_sidebar_position;
			}
		}

	}

	return $classes;
}
add_filter( 'body_class', 'type_body_classes' );


/**
 * Menu Fallback
 *
 */
function type_fallback_menu() {
	$home_url = esc_url( home_url( '/' ) );
	echo '<ul class="main-menu"><li><a href="' . $home_url . '" rel="home">' . __( 'Home', 'type' ) . '</a></li></ul>';
}


/**
 * Display Custom Logo
 *
 */
function type_custom_logo() {

	if ( is_front_page() && is_home() ) {
		if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) { ?>
			<h1 class="site-title site-logo"><?php the_custom_logo(); ?></h1>
		<?php } else { ?>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
		<?php }
	} else {
		if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) { ?>
			<p class="site-title site-logo"><?php the_custom_logo(); ?></p>
		<?php } else { ?>
			<p class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</p>
		<?php }
	}
}


/**
 * Filter the except length.
 *
 */
function type_excerpt_length( $excerpt_length ) {

	if ( is_admin() ) {
		return $excerpt_length;
	}

	if ( is_home() ) {
		$excerpt_length = get_theme_mod( 'blog_excerpt_length', 25 );
	} elseif ( is_archive() || is_search() ) {
		$excerpt_length = get_theme_mod( 'archive_excerpt_length', 25 );
	} else {
		$excerpt_length = 25;
	}
	return intval( $excerpt_length );
}
add_filter( 'excerpt_length', 'type_excerpt_length', 999 );


/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 */
function type_excerpt_more( $more ) {
	if ( is_admin() ) {
		return $more;
	}
	if ( get_theme_mod( 'show_read_more', 1 ) ) {
		$more = sprintf( '<span class="read-more-link"><a class="read-more" href="%1$s">%2$s</a></span>',
			esc_url( get_permalink( get_the_ID() ) ),
			__( 'Read More', 'type' )
	);
	return ' [&hellip;] ' . $more;
	}
}
add_filter( 'excerpt_more', 'type_excerpt_more' );


/**
 * Blog: Post Templates
 *
 */
function type_blog_template() {
	$blog_layout = get_theme_mod('blog_layout', 'list');

	if ('list' == $blog_layout) {
		return sanitize_file_name('list');
	} elseif ('grid' == $blog_layout) {
		return sanitize_file_name('grid');
	} else {
		return;
	}
}


/**
 * Blog: Post Columns
 *
 */
function type_blog_column() {
	$blog_layout = get_theme_mod('blog_layout', 'list');
	$blog_sidebar_position = get_theme_mod('blog_sidebar_position', 'content-sidebar');

	if ('list' == $blog_layout) {
		if ( ! is_active_sidebar( 'sidebar-1' ) || 'content-fullwidth' == $blog_sidebar_position ) {
			$blog_column = 'col-6 col-sm-6';
		} else {
			$blog_column = 'col-12';
		}
	} elseif ( 'grid' == $blog_layout ) {
		if ( ! is_active_sidebar( 'sidebar-1' ) || 'content-fullwidth' == $blog_sidebar_position ) {
			$blog_column = 'col-4 col-sm-6';
		} else {
			$blog_column = 'col-6 col-sm-6';
		}
	} else {
		$blog_column = 'col-12';
	}
	return esc_attr($blog_column);
}


/**
 * Archive: Post Templates
 *
 */
function type_archive_template() {
	$archive_layout = get_theme_mod( 'archive_layout', 'list' );

	if ('list' == $archive_layout) {
		return sanitize_file_name('list');
	} elseif ('grid' == $archive_layout) {
		return sanitize_file_name('grid');
	} else {
		return;
	}
}


/**
 * Archive: Post Columns
 *
 */
function type_archive_column() {
	$archive_layout = get_theme_mod('archive_layout', 'list');
	$archive_sidebar_position = get_theme_mod('archive_sidebar_position', 'content-sidebar');

	if ('list' == $archive_layout) {
		if ( ! is_active_sidebar( 'sidebar-1' ) || 'content-fullwidth' == $archive_sidebar_position ) {
			$archive_column = 'col-6 col-sm-6';
		} else {
			$archive_column = 'col-12';
		}
	} elseif ( 'grid' == $archive_layout ) {
		if ( ! is_active_sidebar( 'sidebar-1' ) || 'content-fullwidth' == $archive_sidebar_position ) {
			$archive_column = 'col-4 col-sm-6';
		} else {
			$archive_column = 'col-6 col-sm-6';
		}
	} else {
		$archive_column = 'col-12';
	}
	return esc_attr($archive_column);
}


/**
 * WooCommerce Support
 */

if ( ! function_exists( 'type_is_woocommerce_active' ) ) {
	// Query WooCommerce activation
	function type_is_woocommerce_active() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

if ( type_is_woocommerce_active() ) {

	// Declare WooCommerce support.
	function type_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'type_woocommerce_support' );

	// WooCommerce Hooks.
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

	add_action('woocommerce_before_main_content', 'type_wrapper_start', 10);
	add_action('woocommerce_after_main_content', 'type_wrapper_end', 10);

	function type_wrapper_start() {
		echo '<div id="primary" class="content-area"><main id="main" class="site-main" role="main"><div class="woocommerce-content">';
	}

	function type_wrapper_end() {
		echo '</div></main></div>';
	}

	function type_remove_woocommerce_sidebar() {
		if ( get_theme_mod('woocommerce_sidebar_position') == 'content-fullwidth' ) {
			remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
		} else {
			return;
		}
	}
	add_action('woocommerce_before_main_content', 'type_remove_woocommerce_sidebar' );
}


/**
 * Exclude Featured Posts from the Main Loop
 */
if ( get_theme_mod( 'show_featured_posts' ) && get_theme_mod('exclude_featured_posts', 1) ) {

	function type_get_featured_posts_ids() {
		$featured_posts_cat = absint( get_theme_mod('featured_posts_category', get_option('default_category') ) );
		if( ! is_numeric( $featured_posts_cat ) ) {
		$featured_posts_cat = '';
		}

		$featured_posts_not_in = array();

		$featured_posts = get_posts( array(
		'post_type'			=> 'post',
		'posts_per_page'	=> 3,
    	'orderby'			=> 'date',
    	'order'				=> 'DESC',
    	'cat' 				=> $featured_posts_cat,
    	'ignore_sticky_posts' => true,
		) );

		if ( $featured_posts ) {
			foreach ( $featured_posts as $post ) :
			$featured_posts_not_in[] = $post->ID;
			endforeach;
			wp_reset_postdata();
		}
		return $featured_posts_not_in;
	}

	function type_exclude_featured_posts( $query ) {
		if ( $query->is_main_query() && $query->is_home() ) {
			$query->set( 'post__not_in', type_get_featured_posts_ids() );
		}
	}
	add_action( 'pre_get_posts', 'type_exclude_featured_posts' );
}


/**
 * Prints Credits in the Footer
 */
function type_credits() {
	$website_credits = '';
	$website_author = get_bloginfo('name');
	$website_date = date_i18n(__( 'Y', 'type' ) );
	$website_credits = '&copy; ' . $website_date . ' ' . $website_author;
	echo esc_html($website_credits);
}


/**
 * Add Upsell "pro" link to the customizer
 *
 */
require_once( trailingslashit( get_template_directory() ) . '/inc/customize-pro/class-customize.php' );


/**
 * Add About Page
 */
require_once get_template_directory() . '/inc/about-page/about-type.php';


/**
 * Add Upsell notice
 */
function type_notice() {
	$user_id = get_current_user_id();
	if ( ! get_user_meta( $user_id, 'type_notice_dismissed' ) ) {
	?>
	<div class="updated notice notice-success is-dismissible type-admin-notice">
		<h2 class="welcome-title">
			<?php esc_html_e( 'Welcome! Thank you for choosing Type WordPress Theme', 'type' ); ?>
		</h2>
		<p>
			<?php echo wp_kses_post( __( '<strong>To fully take advantage</strong> of the best our theme can offer, please visit our', 'type' ) ); ?> <a href="<?php echo esc_url( admin_url( 'themes.php?page=about_type' ) ); ?>"><strong><?php echo esc_html__( 'Welcome Page', 'type' ); ?></strong></a>
		</p>
		<p>
			<a class="button button-primary" href="<?php echo esc_url( 'https://www.designlabthemes.com/type-plus-wordpress-theme/?utm_source=WordPress&utm_medium=notice&utm_campaign=type_upsell' ); ?>" target="_blank">
				<?php esc_html_e( 'View Type Plus', 'type' ); ?>
			</a>
			<a style="color: #646970;margin-left: 0.5em;" href="<?php echo esc_url( '?type-dismissed' ); ?>">
				<?php esc_html_e( 'Dismiss', 'type' ); ?>
			</a>
		</p>
	</div>
	<?php
	}
}
add_action( 'admin_notices', 'type_notice' );

function type_notice_dismissed() {
	$user_id = get_current_user_id();
	if ( isset( $_GET['type-dismissed'] ) ) {
		add_user_meta( $user_id, 'type_notice_dismissed', 'true', true );
	}
}
add_action( 'admin_init', 'type_notice_dismissed' );
