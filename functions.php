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
        return $items."<li class='menu-header-search'>
		<form action='/' class='search-form' method='get' role='search'>
			<label>
				<span class='screen-reader-text'>Search for:</span>
				<input type='search' name='s' value='' title='Press Enter to submit your search' placeholder='Search…' class='search-field'>
			</label>
		</form>
		</li>";

    return $items;
}
