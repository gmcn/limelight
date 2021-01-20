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

	<div class="container-fluid hire-us">
		<div class="row">
			<a href="#" class="col-md-6 hire-us--assessment">



				<p>Workspace Assessment</p>
				<p>Hire Us Now</p>

				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="14" viewBox="0 0 24 14">
				  <image id="Icon" width="24" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAOCAYAAAA1+Nx+AAAAAXNSR0IArs4c6QAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAGKADAAQAAAABAAAADgAAAAAuXTW1AAAA+0lEQVQ4EbWSzwoBURTGjSwsrKgZj+BhUPMCVjYWFsqahbIQyoqlwht4C3mQkZL/K43fp4gxG3PHqV93zp3ud879zrV8309EDcdxUpw9wh6qnuctg1rJ4MaPubqbgwMzCpa+zusGpti2PQEfdlB+1zMWf4ohPA4rYmrRyxH8r5F0IQ1T7Crrp0XVImtWiWHcOK+Ge5CHHVRUYMtHDv4Raz2zARRiUNcNpOdCBk6wiG3IGjZuuKCXdICm9lTROBiohUgdRnCBNkPvs5oXCBFvIS7bH2H0TBHX+Qao8zN8iJMnLPkUNSggizXMK3TofBjUMp2BulvBBiZBceV3pab3MnSa2yUAAAAASUVORK5CYII="/>
				</svg>



			</a>
			<a href="#" class="col-md-6 hire-us--project">
				<p>Workspace Project</p>
				<p>Work With Us</p>

				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="14" viewBox="0 0 24 14">
				  <image id="Icon" width="24" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAOCAYAAAA1+Nx+AAAAAXNSR0IArs4c6QAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAGKADAAQAAAABAAAADgAAAAAuXTW1AAAA+0lEQVQ4EbWSzwoBURTGjSwsrKgZj+BhUPMCVjYWFsqahbIQyoqlwht4C3mQkZL/K43fp4gxG3PHqV93zp3ud879zrV8309EDcdxUpw9wh6qnuctg1rJ4MaPubqbgwMzCpa+zusGpti2PQEfdlB+1zMWf4ohPA4rYmrRyxH8r5F0IQ1T7Crrp0XVImtWiWHcOK+Ge5CHHVRUYMtHDv4Raz2zARRiUNcNpOdCBk6wiG3IGjZuuKCXdICm9lTROBiohUgdRnCBNkPvs5oXCBFvIS7bH2H0TBHX+Qao8zN8iJMnLPkUNSggizXMK3TofBjUMp2BulvBBiZBceV3pab3MnSa2yUAAAAASUVORK5CYII="/>
				</svg>



			</a>
		</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container">

			<div class="row">
				<div class="col-md-6">

					<img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">

					<p>London, England</p>
					<p>
						<a href="mailto:support@limelightworkspace.com">support@limelightworkspace.com
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
