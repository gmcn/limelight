<?php if( have_rows('slides') ): ?>
  <div class="swiper-container portfolio_carousel">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
    <?php while( have_rows('slides') ): the_row();
    $slide_bg = get_sub_field('slide_bg');
    $slide_heading = get_sub_field('slide_heading');
    $slide_copy = get_sub_field('slide_copy');
    $slide_link = get_sub_field('slide_link');
        ?>
        <div class="swiper-slide">

            <?php
              $image = get_sub_field('slide_bg');
              if( $image ):

                  // Image variables.
                  $url = $image['url'];
                  $title = $image['title'];
                  $alt = $image['alt'];
                  $caption = $image['caption'];

                  // Thumbnail size attributes.
                  $size = 'blog_arch';
                  $thumb = $image['sizes'][ $size ];


                  ?>

                      <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" class="d-md-none" loading="lazy" />

                      <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" class="d-none d-md-block" loading="lazy" />

              <?php endif; ?>

            <div class="swiper-slide_details">
              <p class="title"><?php echo $slide_heading; ?></p>
              <p><?php echo $slide_copy ?></p>

              <?php if( $slide_link ):
                  $link_url = $slide_link['url'];
                  $link_title = $slide_link['title'];
                  $link_target = $slide_link['target'] ? $slide_link['target'] : '_self';
                  ?>
                  <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>

            </div>


        </div>
    <?php endwhile; wp_reset_query(); ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar
    <div class="swiper-scrollbar"></div>-->
  </div>
<?php endif; ?>
