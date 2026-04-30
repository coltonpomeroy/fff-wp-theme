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
<section class="fff-footer-cta-wrap">
  <div class="fff-footer-cta">
    <div class="fff-footer-cta-text">
      <h2>Ready to <span>Take Your Shot?</span></h2>
      <p>Join thousands of players and start scoring.</p>
    </div>
    <a href="https://app.freeflickfootball.com" class="fff-btn-yellow">Play Free Now</a>
  </div>
</section>

<footer class="fff-footer">
  <div class="fff-footer-inner">
    <div class="fff-footer-top">
      <div class="fff-footer-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo $logo; ?>" alt="Free Flick Football" width="88" height="88">
        </a>
      </div>
      <div class="fff-footer-col">
        <h4>Play</h4>
        <ul>
          <li><a href="https://app.freeflickfootball.com">Play Now</a></li>
          <li><a href="#how-to-play">How to Play</a></li>
          <li><a href="https://app.freeflickfootball.com/blog">Blog</a></li>
          <li><a href="https://app.freeflickfootball.com/blog">Updates</a></li>
        </ul>
      </div>
      <div class="fff-footer-col">
        <h4>About</h4>
        <ul>
          <li><a href="https://app.freeflickfootball.com/about">About</a></li>
          <li><a href="https://app.freeflickfootball.com/faqs">FAQs</a></li>
          <li><a href="https://app.freeflickfootball.com/contact">Contact</a></li>
          <li><a href="https://app.freeflickfootball.com/privacy">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="fff-footer-col">
        <h4>Legal</h4>
        <ul>
          <li><a href="https://app.freeflickfootball.com/terms">Terms of Service</a></li>
          <li><a href="https://app.freeflickfootball.com/cookies">Cookie Policy</a></li>
        </ul>
      </div>
      <div class="fff-footer-social">
        <h4>Follow Us</h4>
        <div class="fff-social-icons">
          <a href="https://facebook.com" class="fff-social-icon" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="https://x.com/coltpdx" class="fff-social-icon" aria-label="X / Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.741l7.73-8.835L1.254 2.25H8.08l4.259 5.63L18.244 2.25zm-1.161 17.52h1.833L7.084 4.126H5.117L17.083 19.77z"/></svg>
          </a>
          <a href="https://youtube.com" class="fff-social-icon" aria-label="YouTube">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </a>
          <a href="https://instagram.com" class="fff-social-icon" aria-label="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
        </div>
      </div>
    </div>
    <div class="fff-footer-bottom">
      &copy; <?php echo $year; ?> Free Flick Football &mdash; SoonerTech Solutions LLC. All rights reserved.
    </div>
  </div>
</footer>
<!-- /wp:html -->
