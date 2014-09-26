<?php
/**
 * Custom functions
 */

define( 'img_dir', get_stylesheet_directory_uri().'/assets/img/' );


add_action( 'wp_enqueue_scripts', 'my_font_scripts', 2 );
function my_font_scripts () {
	wp_enqueue_style( 'custom-fonts', 'http://fast.fonts.com/cssapi/e8eff68c-12bc-497a-83a6-0d975a85d96e.css' );
}

add_action( 'wp_enqueue_scripts', 'my_stylesheet', 222 );
function my_stylesheet () {
	wp_dequeue_style( 'roots_main', get_template_directory_uri() . '/assets/css/main.min.css', false, '9880649384aea9f1ee166331c0a30daa');
	wp_enqueue_style( 'child_app', get_stylesheet_directory_uri() . '/assets/css/app.css', false, null);
}
