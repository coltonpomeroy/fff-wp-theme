<?php
defined( 'ABSPATH' ) || exit;

/** Hide admin bar for visitors. */
if ( ! is_admin() ) {
	add_filter( 'show_admin_bar', '__return_false' );
}

/** Favicon + theme-color. */
function fff_site_icon() {
	$icon = get_theme_file_uri( 'assets/images/site-icon.png' );
	$ver  = wp_get_theme()->get( 'Version' );
	echo "\n<!-- FFF favicon -->\n";
	echo '<link rel="icon" type="image/png" href="' . esc_url( $icon ) . '?v=' . esc_attr( $ver ) . '">' . "\n";
	echo '<link rel="apple-touch-icon" href="' . esc_url( $icon ) . '?v=' . esc_attr( $ver ) . '">' . "\n";
	echo '<meta name="theme-color" content="#0d1e4d">' . "\n";
}
add_action( 'wp_head', 'fff_site_icon', 5 );

/** Open Graph + Twitter Card meta. */
function fff_social_meta() {
	$og_image = get_theme_file_uri( 'assets/images/og.png' );
	$ver      = wp_get_theme()->get( 'Version' );
	$image    = esc_url( $og_image . '?v=' . $ver );

	$title       = is_singular() ? wp_get_document_title() : get_bloginfo( 'name' );
	$description = is_singular() && has_excerpt()
		? wp_strip_all_tags( get_the_excerpt() )
		: 'Fast, fun and free-to-play football action. Flick the ball, beat your opponent, and rise to the top. No download required.';
	$url = is_singular() ? esc_url( get_permalink() ) : esc_url( home_url( '/' ) );

	echo "\n<!-- FFF social meta -->\n";
	echo '<meta property="og:type" content="website">' . "\n";
	echo '<meta property="og:site_name" content="Free Flick Football">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta property="og:url" content="' . $url . '">' . "\n";
	echo '<meta property="og:image" content="' . $image . '">' . "\n";
	echo '<meta property="og:image:width" content="1200">' . "\n";
	echo '<meta property="og:image:height" content="628">' . "\n";
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	echo '<meta name="twitter:site" content="@coltpdx">' . "\n";
	echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
	echo '<meta name="twitter:image" content="' . $image . '">' . "\n";
}
add_action( 'wp_head', 'fff_social_meta', 6 );

/** Enqueue custom CSS. */
function fff_enqueue_assets() {
	wp_enqueue_style(
		'fff-custom',
		get_theme_file_uri( 'assets/css/custom.css' ),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'fff_enqueue_assets' );

/** Register block pattern category. */
function fff_register_pattern_categories() {
	register_block_pattern_category( 'fff', [ 'label' => __( 'Free Flick Football', 'fff' ) ] );
}
add_action( 'init', 'fff_register_pattern_categories' );
