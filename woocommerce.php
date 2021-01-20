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
				<?php woocommerce_content(); ?>
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
