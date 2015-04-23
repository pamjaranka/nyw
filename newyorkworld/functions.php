<?php
/* add thumbnail support */
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
	add_image_size( 'mainPost', 860, 587, true );
	add_image_size( 'smallPost', 160, 160, true );
	add_image_size( 'sidebarPost', 258, 145, true );
	add_image_size( 'sidebarPartners', 90 );
}
// menu in two locations.
register_nav_menus( array(
	'primary' => __( 'Primary Menu' ),
	'social'  => __( 'Social Links Menu' ),
) );


