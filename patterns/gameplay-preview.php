<?php
/**
 * Title: Gameplay Preview
 * Slug: fff/gameplay-preview
 * Categories: fff
 * Inserter: false
 */
$img = esc_url( get_theme_file_uri( 'assets/images/gameplay-preview.jpg' ) );
?>
<!-- wp:html -->
<section class="fff-gameplay">
  <div class="fff-gameplay-panel">
    <div class="fff-gameplay-text">
      <div class="fff-eyebrow">Gameplay Preview</div>
      <h2>Simple Controls.<br>Serious Fun.</h2>
      <div class="fff-green-line"></div>
      <p>Flick, curve and smash your way to victory using easy-to-learn controls that reward skill.</p>
      <ul class="fff-checklist">
        <li><span>✓</span>Angle-Based Shooting</li>
        <li><span>✓</span>Fast Turns &amp; Rebounds</li>
        <li><span>✓</span>Simple, Responsive Controls</li>
      </ul>
    </div>
    <a href="https://app.freeflickfootball.com" class="fff-gameplay-screenshot" aria-label="Play Free Flick Football">
      <img src="<?php echo $img; ?>" alt="Free Flick Football gameplay — pins, ball and aim arrow on the pitch" class="fff-gameplay-img">
      <div class="fff-video-play" aria-hidden="true"></div>
    </a>
  </div>
</section>
<!-- /wp:html -->
