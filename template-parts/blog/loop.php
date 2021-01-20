<?php

	$content = apply_filters('the_content', get_post_field('post_content', 129));

 ?>

 <div class="container-fluid one_col_heading" style="background: <?php echo $one_col_colour; ?>" >
   <div class="container">
     <div class="row">
       <div class="col-12">

				 <h1><?php echo single_post_title() ?></h1>
	 				<!-- <div class="term-description"> -->
	 					<?php echo $content; ?>
	 				<!-- </div> -->

       </div>
     </div>
   </div>
 </div>



<div class="blog-archive">

	<?php
	if ( have_posts() ) : ?>

	<div class="row no-gutters">

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

		$thumb = get_the_post_thumbnail($_post->ID, 'blog_arch', array( 'loading' => 'lazy' ));

		?>

		<?php if ($thumb): ?>

		<article class="col-6 col-md-4 col-lg-3 blog-archive--entry wow fadeInUp">

		<?php else : ?>

		<article class="col-6 col-md-4 col-lg-3 blog-archive--entry__nothumb wow fadeInUp">

		<?php endif; ?>

		<a href="<?php the_permalink() ?>">




			<?php echo $thumb ?>

			<h2>

        <?php if ($thumb): ?>

          <span class="date"><?php echo get_the_date() ?></span>

        <?php endif; ?>

        <?php the_title(); ?>

      </h2>

		</a>


		</article>

		<?php endwhile; ?>

		</div>

	<?php endif; ?>

</div>
