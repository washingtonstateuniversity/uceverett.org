<?php
/**
 * @package Make Child
 *
 * Add your custom functions here.
 */



/* Adding Search Box to Primary Nav */
add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
        return $items . "<li class='menu-header-search'>
		<form role='search' method='get' class='search-form' action='" . esc_url( home_url( '/' ) ) . "'>
			<label>
				<span class='screen-reader-text'>Search for:</span>
				<input type='search' name='s' value='' title='Press Enter to submit your search' placeholder='Search…' class='search-field'>
			</label>
		</form>
		</li>";

    return $items;
}

add_action( 'wp_enqueue_scripts', 'everettuc_enqueue_styles' );

function everettuc_enqueue_styles() {
    wp_enqueue_style( 'make', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'everettuc', get_stylesheet_directory_uri() . '/style.css', array( 'make' ), wp_get_theme()->get( 'Version' ) );
}
