<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info container">
					<div class="contact">
						<h3>Contact Us</h3>
						<p><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> info@inhabitent.com</p>
						<p><i class="fa fa-phone fa-fw" aria-hidden="true"></i> 778-456-7891</p>
						<div class="footer-icons">
							<i class="fa fa-facebook-square fa-fw" aria-hidden="true"></i>
							<i class="fa fa-twitter-square fa-fw" aria-hidden="true"></i>
							<i class="fa fa-google-plus-square fa-fw" aria-hidden="true"></i>
						</div>
					</div>
					<div class="hours">
						<h3>Business Hours</h3>
						<p><span class="bold">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="bold">Saturday:</span> 10am to 2pm</p>
						<p><span class="bold">Sunday:</span> Closed</p>
					</div>
					<div class="horizontal-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg" class="horizontal-logo" />
						</a>
					</div>
				</div><!-- .site-info -->
				<p class="copyright container">Copyright &copy; 2016 Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
