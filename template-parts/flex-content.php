<?php if( have_rows('page_builder') ): ?>
 <?php while( have_rows('page_builder') ): the_row(); ?>

     <?php if( get_row_layout() == 'slider' ): ?>

       <?php include(locate_template("template-parts/flex-content/slider.php")); ?>

     <?php elseif( get_row_layout() == 'hero-no-slider' ): ?>

       <?php include(locate_template("template-parts/flex-content/hero-no-slide.php")); ?>

     <?php elseif( get_row_layout() == 'hr' ): ?>

       <?php include(locate_template("template-parts/flex-content/hr.php")); ?>

     <?php elseif( get_row_layout() == 'one_column_content' ): ?>

       <?php include(locate_template("template-parts/flex-content/one_column_content.php")); ?>

     <?php elseif( get_row_layout() == 'content-with-bg' ): ?>

       <?php include(locate_template("template-parts/flex-content/content-with-bg.php")); ?>

     <?php elseif( get_row_layout() == 'multiple_slider' ): ?>

       <?php include(locate_template("template-parts/flex-content/multiple-slides.php")); ?>

     <?php elseif( get_row_layout() == '2080_content' ): ?>

       <?php include(locate_template("template-parts/flex-content/twenty-eighty.php")); ?>

     <?php elseif( get_row_layout() == 'media' ): ?>

       <?php include(locate_template("template-parts/flex-content/media.php")); ?>

     <?php elseif( get_row_layout() == 'featured_products' ): ?>

       <?php include(locate_template("template-parts/flex-content/featured-products.php")); ?>

     <?php elseif( get_row_layout() == 'image_based_navigation' ): ?>

       <?php include(locate_template("template-parts/flex-content/image_based_navigation.php")); ?>

     <?php elseif( get_row_layout() == 'image_grid_3' ): ?>

       <?php include(locate_template("template-parts/flex-content/image_grid_3.php")); ?>

     <?php elseif( get_row_layout() == 'single-with-link' ): ?>

       <?php include(locate_template("template-parts/flex-content/single-with-link.php")); ?>

     <?php elseif( get_row_layout() == '5050_content_img' ): ?>

       <?php include(locate_template("template-parts/flex-content/fifty-fifty-with-image.php")); ?>

     <?php elseif( get_row_layout() == 'narrow_5050_content_img' ): ?>

       <?php include(locate_template("template-parts/flex-content/narrow-fifty-fifty-with-image.php")); ?>

     <?php elseif( get_row_layout() == 'two-column-block' ): ?>

       <?php include(locate_template("template-parts/flex-content/two-column-block.php")); ?>

     <?php elseif( get_row_layout() == 'columnx3' ): ?>

       <?php include(locate_template("template-parts/flex-content/columnx3.php")); ?>

     <?php elseif( get_row_layout() == 'tilex4' ): ?>

       <?php include(locate_template("template-parts/flex-content/tilesx4.php")); ?>

     <?php elseif( get_row_layout() == 'image_row' ): ?>

       <?php include(locate_template("template-parts/flex-content/image_row.php")); ?>

     <?php elseif( get_row_layout() == 'call_to_action' ): ?>

       <?php include(locate_template("template-parts/flex-content/call_to_action.php")); ?>

     <?php elseif( get_row_layout() == 'form' ): ?>

       <?php include(locate_template("template-parts/flex-content/form.php")); ?>

     <?php elseif( get_row_layout() == 'map' ): ?>

       <?php include(locate_template("template-parts/flex-content/map.php")); ?>




     <?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>
