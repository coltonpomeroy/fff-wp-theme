<?php
/**
 * Title: Hero
 * Slug: fff/hero
 * Categories: fff
 * Inserter: false
 */
$screenshot = esc_url( get_theme_file_uri( 'assets/images/gameplay-preview.jpg' ) );
?>
<!-- wp:html -->
<section class="fff-hero">
  <div class="fff-hero-inner">

    <div class="fff-hero-text">
      <h1>Flick. Score.<br>Dominate the Table.</h1>
      <p>Fast, fun and free-to-play football action. Flick the ball, beat your opponent, and rise to the top.</p>
      <div class="fff-hero-buttons">
        <a href="https://app.freeflickfootball.com" class="fff-btn-primary">Play Free Now</a>
        <a href="https://app.freeflickfootball.com/blog" class="fff-btn-outline">Read the Blog</a>
      </div>
      <div class="fff-trust-badges">
        <div class="fff-badge">
          <div class="fff-badge-icon">
            <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <div class="fff-badge-text"><strong>Free to Play</strong><span>No downloads. No sign-up.</span></div>
        </div>
        <div class="fff-badge">
          <div class="fff-badge-icon">
            <svg viewBox="0 0 24 24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <div class="fff-badge-text"><strong>Fast &amp; Fun</strong><span>Jump in and play anytime.</span></div>
        </div>
        <div class="fff-badge">
          <div class="fff-badge-icon">
            <svg viewBox="0 0 24 24"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2z"/></svg>
          </div>
          <div class="fff-badge-text"><strong>Climb the Ranks</strong><span>Compete and prove your skill.</span></div>
        </div>
      </div>
    </div>

    <div class="fff-hero-screenshot">
      <a href="https://app.freeflickfootball.com" aria-label="Play Free Flick Football">
        <img src="<?php echo $screenshot; ?>" alt="Free Flick Football — live match in progress" class="fff-hero-img">
        <div class="fff-hero-play" aria-hidden="true"></div>
      </a>
    </div>

  </div>
</section>
<!-- /wp:html -->
