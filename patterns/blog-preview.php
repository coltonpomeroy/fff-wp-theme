<?php
/**
 * Title: Blog Preview
 * Slug: fff/blog-preview
 * Categories: fff
 * Inserter: false
 */
$thumb = esc_url( get_theme_file_uri( 'assets/images/gameplay-preview.jpg' ) );
?>
<!-- wp:html -->
<section class="fff-blog">
  <div class="fff-blog-inner">
    <div class="fff-blog-header">
      <div>
        <div class="fff-eyebrow">From the Blog</div>
        <h2>Latest Tips &amp; Updates</h2>
      </div>
      <a href="https://app.freeflickfootball.com/blog" class="fff-btn-outline-sm">View All Blog Posts</a>
    </div>
    <div class="fff-blog-grid">
      <a href="https://app.freeflickfootball.com/blog" class="fff-blog-card">
        <div class="fff-blog-thumb">
          <img src="<?php echo $thumb; ?>" alt="Free Flick Football gameplay">
        </div>
        <div class="fff-blog-card-body">
          <h3>5 Tips to Improve Your Flick</h3>
          <p>Simple techniques to help you score more and win more matches.</p>
          <div class="fff-blog-card-meta">May 10, 2025 &bull; <span>Tips</span></div>
        </div>
      </a>
      <a href="https://app.freeflickfootball.com/blog" class="fff-blog-card">
        <div class="fff-blog-thumb">
          <img src="<?php echo $thumb; ?>" alt="Free Flick Football gameplay">
        </div>
        <div class="fff-blog-card-body">
          <h3>Curve Shots Are Here — How to Use Them</h3>
          <p>Magnus-effect spin is now in the game. Here's how to put it to work.</p>
          <div class="fff-blog-card-meta">Apr 28, 2025 &bull; <span>Updates</span></div>
        </div>
      </a>
      <a href="https://app.freeflickfootball.com/blog" class="fff-blog-card">
        <div class="fff-blog-thumb">
          <img src="<?php echo $thumb; ?>" alt="Free Flick Football gameplay">
        </div>
        <div class="fff-blog-card-body">
          <h3>Master the Angle</h3>
          <p>Learn how angle-based shots can give you the winning edge.</p>
          <div class="fff-blog-card-meta">May 2, 2025 &bull; <span>Strategy</span></div>
        </div>
      </a>
    </div>
  </div>
</section>
<!-- /wp:html -->
