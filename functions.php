<?php
defined( 'ABSPATH' ) || exit;

function fff_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', [
		'height'      => 80,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	] );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption' ] );
	register_nav_menus( [ 'primary' => __( 'Primary Menu', 'fff' ) ] );
}
add_action( 'after_setup_theme', 'fff_setup' );

function fff_enqueue() {
	$ver = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'fff-main', get_template_directory_uri() . '/assets/css/main.css', [], $ver );
	wp_enqueue_script( 'fff-main', get_template_directory_uri() . '/assets/js/main.js', [], $ver, true );
}
add_action( 'wp_enqueue_scripts', 'fff_enqueue' );

// Remove emoji, block library CSS on front end — not needed for this theme.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
add_action( 'wp_enqueue_scripts', fn() => wp_dequeue_style( 'wp-block-library' ), 100 );
