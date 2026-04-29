<?php
/**
 * Title: Footer
 * Slug: fff/footer
 * Categories: fff
 * Inserter: false
 */
$logo = esc_url( get_theme_file_uri( 'assets/images/logo.png' ) );
$year = date( 'Y' );
?>
<!-- wp:html -->
<section class="fff-footer-cta">
  <div class="fff-footer-cta-text">
    <h2>Ready to <em>Take Your Shot?</em></h2>
    <p>Join thousands of players and start scoring.</p>
  </div>
  <a href="https://app.freeflickfootball.com" class="fff-btn-yellow">Play Free Now</a>
</section>

<footer class="fff-footer">
  <div class="fff-footer-inner">
    <div class="fff-footer-top">
      <div class="fff-footer-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo $logo; ?>" alt="Free Flick Football" width="140" height="52">
        </a>
      </div>
      <div class="fff-footer-col">
        <h4>Game</h4>
        <ul>
          <li><a href="https://app.freeflickfootball.com">Play</a></li>
          <li><a href="#how-to-play">How to Play</a></li>
          <li><a href="https://app.freeflickfootball.com/blog">Blog</a></li>
          <li><a href="https://app.freeflickfootball.com/blog">Updates</a></li>
        </ul>
      </div>
      <div class="fff-footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="https://app.freeflickfootball.com/about">About</a></li>
          <li><a href="https://app.freeflickfootball.com/contact">Contact</a></li>
          <li><a href="https://app.freeflickfootball.com/privacy">Privacy Policy</a></li>
          <li><a href="https://app.freeflickfootball.com/terms">Terms of Service</a></li>
        </ul>
      </div>
      <div class="fff-footer-col">
        <h4>PRO</h4>
        <ul>
          <li><a href="https://app.freeflickfootball.com/pro">Go PRO</a></li>
          <li><a href="https://app.freeflickfootball.com/pro">Pricing</a></li>
          <li><a href="https://app.freeflickfootball.com/pro">Cosmetics</a></li>
        </ul>
      </div>
      <div class="fff-footer-social">
        <h4>Follow Us</h4>
        <div class="fff-social-icons">
          <a href="https://x.com/coltpdx" class="fff-social-icon" aria-label="X / Twitter">𝕏</a>
          <a href="https://youtube.com" class="fff-social-icon" aria-label="YouTube">▶</a>
          <a href="https://instagram.com" class="fff-social-icon" aria-label="Instagram">◉</a>
        </div>
      </div>
    </div>
    <div class="fff-footer-bottom">
      &copy; <?php echo $year; ?> Free Flick Football &mdash; SoonerTech Solutions LLC. All rights reserved.
    </div>
  </div>
</footer>
<!-- /wp:html -->
