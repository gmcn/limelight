<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header();

	$featImg = the_post_thumbnail();

?>

	<?php if ($featImg): ?>

		<?php echo $featImg; ?>

	<?php endif; ?>

	<article class="container-fluid blog-single">



		<div class="row">
			<div class="col-md-12">

				<p class="dentry"><?php echo get_the_date(); ?></p>
				<h1 class="hentry"><?php echo the_title(); ?></h1>
				<?php the_content(); ?>

			</div>

		</div>
	</article>

<?php
get_footer();
