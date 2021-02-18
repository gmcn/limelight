<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>



<div class="container">

	<?php if (is_shop() ) : ?>

		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h1 class="page-title">All Products</h1>
				<div class="term-description">
					<?php echo the_content(); ?>
				</div>
			</div>
		</div>

	<?php endif; ?>

	<?php if (is_product_category() ) : ?>

		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h1 class="page-title"><?php echo single_term_title(); ?></h1>
				<div class="term-description">
					<?php echo term_description(); ?>
				</div>
			</div>
		</div>

	<?php endif; ?>

	<div class="row">

		<?php if (is_shop() || is_product_category() ) : ?>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-lg-9 wc_archive">
				<?php //woocommerce_content(); ?>

				<?php //woocommerce_product_loop_start(); ?>

				<?php //woocommerce_product_subcategories(); ?>

				<div class="row">

				<?php if (have_posts()): ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<a class="col-md-4 products--product" href="<?php the_permalink(); ?>">

						<div class="matchheight">
							<?php echo get_the_post_thumbnail($_post->ID, 'feat_prod'); ?>
						</div>

						<p><?php the_title(); ?></p>

						<?php

						$terms = get_the_terms( $post->ID, 'product_cat' ); ?>

						<p class="cat">
							<?php $i = 0; foreach ( $terms as $term ) {

								$i++;
								if ($i > 1 ) {
									echo ", ";
								}
								echo $term->name;
						} ?>
					</p>


					</a>

				<?php //wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

				<?php else: ?>

					<p class="woocommerce-info">No products were found matching your selection.</p>

				<?php endif; ?>

				</div>

				<?php //woocommerce_product_loop_end(); ?>

				<?php echo woocommerce_pagination(); ?>




			</div>
		<?php else : ?>
			<div class="col-lg-12">
				<?php woocommerce_content(); ?>
			</div>
		<?php endif ?>



	</div>

</div>





<?php

get_footer();
