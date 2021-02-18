<?php if( have_rows('tilex4') ): ?>
  <div class="container tilex4">
    <div class="row">
      <?php while( have_rows('tilex4') ): the_row();
      $tilex4_image = get_sub_field('tilex4_image');
      $tilex4_heading = get_sub_field('tilex4_heading');
      $tilex4_content_body = get_sub_field('tilex4_content_body');
      ?>
        <div class="col-6 col-md-3">

          <div class="tilex4_wrap">

            <?php
              if( $tilex4_image ):

                  // Image variables.
                  $url = $tilex4_image['url'];
                  $title = $tilex4_image['title'];
                  $alt = $tilex4_image['alt'];
                  $caption = $tilex4_image['caption'];

                  // Thumbnail size attributes.
                  $size = 'tile_img';
                  $thumb = $tilex4_image['sizes'][ $size ];
                  $width = $tilex4_image['sizes'][ $size . '-width' ];
                  $height = $tilex4_image['sizes'][ $size . '-height' ]; ?>

                  <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />

              <?php endif; ?>


            <div class="tilex4_wrap--content">
              <p class="title"><?php echo $tilex4_heading ?></p>
              <?php echo $tilex4_content_body; ?>
            </div>

          </div>



        </div>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>
