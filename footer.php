<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container">

			<div class="row">
				<div class="col-md-6">

					<img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">

					<p>London, England</p>
					<p>
						<a href="mailto:support@limelightworkspace.co.uk">support@limelightworkspace.co.uk
						</a>
					</p>
					<p>
						<a href="tel:+442084474690">+44 20 8447 4690</a>
					</p>

				</div>
				<div class="col-md-2">

					<h5>Company</h5>
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'footer-nav'
							) );
						?>

				</div>
				<div class="col-md-4">

					<h5>Latest Post</h5>

					<?php
						$args = array(
							'post_type'   => 'post',
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );

						if ( $query->have_posts() ) :
						?>
							<?php while( $query->have_posts() ) : $query->the_post() ?>
								<div class="footer_twitter">
									<a href="<?php echo the_permalink(); ?>"><p><?php echo the_title(); ?></p></a>


								</div>
							<?php endwhile ?>
						<?php endif ?>






				</div>
			</div>

			<div class="sig row">

				<div class="col-md-6">
					Copyright © <?php echo date('Y'); ?>. Limelight Workspace. Design by <a href="https://creativemediani.com" target="_blank">Creative Media</a>
				</div>

				<div class="col-md-6 sig_social">

					<a href="#" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Follow Us On Facebook">
					</a>

					<a href="#" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Follow Us On Twitter">
					</a>

					<a href="#" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Follow Us On Instagram">
					</a>

					<a href="#" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Follow Us On Linkedin">
					</a>

				</div>

			</div><!-- .site-info -->

		</div>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
