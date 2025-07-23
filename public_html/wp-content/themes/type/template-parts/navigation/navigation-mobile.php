<?php
/**
 * Displays Mobile Navigation
 *
 * @package Type
 * @since Type 1.1.3
 */

?>

	<nav id="mobile-navigation" class="main-navigation mobile-navigation" aria-label="<?php esc_attr_e( 'Mobile Menu', 'type' ); ?>">
		<?php
		wp_nav_menu( array(
			'theme_location'        => 'main_menu',
			'menu_id'               => 'mobile-menu',
			'menu_class'            => 'main-menu mobile-menu',
			'show_sub_menu_toggles' => true,
			'container'             => false,
			'fallback_cb'           => 'type_fallback_menu'
		) );
		if ( has_nav_menu( 'social_menu' ) ) {
			wp_nav_menu(
				array(
					'theme_location'  => 'social_menu',
					'container'       => false,
					'menu_class'      => 'social-menu mobile-social-menu',
					'depth'           => 1,
					'link_before'     => '<span class="screen-reader-text">',
					'link_after'      => '</span>',
					'fallback_cb'     => '',
			) );
		}
		?>
	</nav>
