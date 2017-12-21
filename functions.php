<?php
/**
 * @package Make Child
 *
 * Add your custom functions here.
 */

/**
 * Provides a theme version for use in cache busting.
 *
 * @since 0.1.0
 *
 * @return string
 */
function everettuc_theme_version() {
	return '0.1.0';
}

add_filter( 'wp_nav_menu_items', 'add_search_box_to_menu', 10, 2 );
/**
 * Adds a search box to the primary nav menu.
 */
function add_search_box_to_menu( $items, $args ) {
	if ( 'primary' === $args->theme_location ) {
		return $items . "<li class='menu-header-search'>
		<form role='search' method='get' class='search-form' action='" . esc_url( home_url( '/' ) ) . "'>
			<label>
				<span class='screen-reader-text'>Search for:</span>
				<input type='search' name='s' value='' title='Press Enter to submit your search' placeholder='Search…' class='search-field'>
			</label>
		</form>
		</li>";
	}

	return $items;
}

/**
 * Defines the `TTFMAKE_CHILD_VERSION` constant as `1.1.0`
 * in order to enqueue the Make parent theme stylesheet.
 *
 * NOTE: This number does not need to be changed.
 *
 * @since 0.1.0
 */
define( 'TTFMAKE_CHILD_VERSION', '1.1.0' );

add_action( 'wp_enqueue_scripts', 'everettuc_stylesheet_version', 20 );
/**
 * Applies `everettuc_theme_version` as the version string for this theme's stylsheet.
 *
 * @since 0.1.0
 */
function everettuc_stylesheet_version() {
	if ( ! function_exists( 'Make' ) ) {
		return;
	}

	Make()->scripts()->update_version( 'make-main', everettuc_theme_version(), 'style' );
}
