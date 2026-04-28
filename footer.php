
<!-- FOOTER CTA -->
<section class="footer-cta">
	<div class="footer-cta-text">
		<h2>Ready to <em>Take Your Shot?</em></h2>
		<p>Join thousands of players and start scoring.</p>
	</div>
	<a href="https://app.freeflickfootball.com" class="btn-yellow">Play Free Now</a>
</section>

<!-- FOOTER -->
<footer>
	<div class="footer-inner">
		<div class="footer-top">
			<div class="footer-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				</a>
			</div>
			<div class="footer-col">
				<h4>Game</h4>
				<ul>
					<li><a href="https://app.freeflickfootball.com">Play</a></li>
					<li><a href="#how-to-play">How to Play</a></li>
					<li><a href="https://app.freeflickfootball.com/blog">Blog</a></li>
					<li><a href="https://app.freeflickfootball.com/blog">Updates</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Company</h4>
				<ul>
					<li><a href="https://app.freeflickfootball.com/about">About</a></li>
					<li><a href="https://app.freeflickfootball.com/contact">Contact</a></li>
					<li><a href="https://app.freeflickfootball.com/privacy">Privacy Policy</a></li>
					<li><a href="https://app.freeflickfootball.com/terms">Terms of Service</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>PRO</h4>
				<ul>
					<li><a href="https://app.freeflickfootball.com/pro">Go PRO</a></li>
					<li><a href="https://app.freeflickfootball.com/pro">Pricing</a></li>
					<li><a href="https://app.freeflickfootball.com/pro">Cosmetics</a></li>
				</ul>
			</div>
			<div class="footer-social">
				<h4>Follow Us</h4>
				<div class="social-icons">
					<a href="https://x.com/coltpdx" class="social-icon" aria-label="X / Twitter">𝕏</a>
					<a href="https://youtube.com" class="social-icon" aria-label="YouTube">▶</a>
					<a href="https://instagram.com" class="social-icon" aria-label="Instagram">◉</a>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			&copy; <?php echo date( 'Y' ); ?> Free Flick Football &mdash; <?php bloginfo( 'name' ); ?>. All rights reserved.
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
