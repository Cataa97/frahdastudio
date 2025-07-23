<?php
/**
 * Displays Social Menu
 *
 * @package Type
 * @since Type 1.0
 */

?>

	<nav class="social-links" aria-label="<?php esc_attr_e( 'Social Menu', 'type' ); ?>">
		<?php
		if ( has_nav_menu( 'social_menu' ) && get_theme_mod( 'show_header_social', 1 ) ) {
			wp_nav_menu(
				array(
					'theme_location'  => 'social_menu',
					'menu_class'      => 'social-menu',
					'container'       => false,
					'depth'           => 1,
					'link_before'     => '<span class="screen-reader-text">',
					'link_after'      => '</span>',
					'fallback_cb'     => '',
				)
			);
		}
		?>
	</nav>
