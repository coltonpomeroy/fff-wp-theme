<?php
/**
 * Title: Header
 * Slug: fff/header
 * Categories: fff
 * Inserter: false
 */
$logo = esc_url( get_theme_file_uri( 'assets/images/logo.png' ) );
?>
<!-- wp:html -->
<nav id="fff-nav">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fff-nav-logo">
    <img src="<?php echo $logo; ?>" alt="Free Flick Football" width="140" height="52">
  </a>
  <ul class="fff-nav-links">
    <li><a href="https://app.freeflickfootball.com">Play</a></li>
    <li><a href="#how-to-play">How to Play</a></li>
    <li><a href="https://app.freeflickfootball.com/blog">Blog</a></li>
    <li><a href="https://app.freeflickfootball.com/blog">Updates</a></li>
  </ul>
  <a href="https://app.freeflickfootball.com" class="fff-btn-nav">Play Free</a>
</nav>
<!-- /wp:html -->
