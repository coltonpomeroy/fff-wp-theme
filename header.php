<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;800;900&family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav id="fff-nav">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		} else {
			echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/logo.png' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
		}
		?>
	</a>

	<?php
	wp_nav_menu( [
		'theme_location' => 'primary',
		'menu_class'     => 'nav-links',
		'container'      => false,
		'fallback_cb'    => function() { ?>
			<ul class="nav-links">
				<li><a href="https://app.freeflickfootball.com">Play</a></li>
				<li><a href="#how-to-play">How to Play</a></li>
				<li><a href="https://app.freeflickfootball.com/blog">Blog</a></li>
				<li><a href="https://app.freeflickfootball.com/blog">Updates</a></li>
			</ul>
		<?php },
	] );
	?>

	<a href="https://app.freeflickfootball.com" class="btn-nav">Play Free</a>
</nav>
