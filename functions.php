<?php

add_theme_support( 'post-thumbnails' );
add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );
add_filter('show_admin_bar', '__return_false');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

register_nav_menus(array(
	'header' => 'Header',
	'footer' => 'Footer'
));

const EXPERTISE_ID = 8;

function get_mood_image($post_ID) {
	if (has_post_thumbnail($post_ID)) {
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post_ID), 'large' );
		return $thumbnail[0];
	} else {
		return get_template_directory_uri() . "/images/mood.jpg";
	}
}

function remove_menus(){

  remove_menu_page( 'edit-comments.php' );          //Comments

}
add_action( 'admin_menu', 'remove_menus' );


function new_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter('excerpt_more', 'new_excerpt_more');