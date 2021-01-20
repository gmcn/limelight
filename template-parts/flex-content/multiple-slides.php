<?php

  $multiple_slider_bg = get_sub_field('multiple_slider_background');

 ?>


<div class="container-fluid multiple-slider" style="background: <?php echo  $multiple_slider_bg ?>">
  <div class="container">

    <!-- Swiper -->
      <div class="swiper-container swiper-multiple">
        <div class="swiper-wrapper">

          <?php if( have_rows('multiple_slides') ): ?>

              <?php while( have_rows('multiple_slides') ): the_row();
                  $slide_heading = get_sub_field('slide_heading');
                  $slide_sub_heading = get_sub_field('slide_sub_heading');
                  $slide_copy = get_sub_field('slide_copy');
                  ?>

                  <div class="swiper-slide">

                    <?php if ($slide_sub_heading): ?>
                      <p class="sub"><?php echo $slide_sub_heading ?></p>
                    <?php endif; ?>

                    <p class="title matchheight"><?php echo $slide_heading ?></p>

                    <?php echo $slide_copy ?>

                  </div>

              <?php endwhile; ?>

          <?php endif; ?>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>


  </div>
</div>
