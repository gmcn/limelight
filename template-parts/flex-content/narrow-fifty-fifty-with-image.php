<?php

  $bg_colour = get_sub_field('bg_pick');
  $image = get_sub_field('image');
  $sub_heading = get_sub_field('sub_heading');
  $heading = get_sub_field('heading');
  $content_body = get_sub_field('content_body');
  $link = get_sub_field('link');
  $image_position = get_sub_field('image_position');

?>


<div class="container-fluid narrow-fifty-fifty-with-image <?php echo $bg_colour ?>">

  <div class="container">

    <div class="row">

      <?php if ($image_position == "left"): ?>
        <div class="col-lg-6 narrow-fifty-fifty-with-image--img" style="background: url(<?php echo esc_url($image['url']); ?>) center center; background-size: cover;">
          <!-- <?php
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?> -->
        </div>
      <?php endif; ?>

      <div class="col-lg-6 align-self-center narrow-fifty-fifty-with-image--copy">

        <?php if ($sub_heading ): ?>
          <p class="sub_heading"><?php echo $sub_heading ?></p>
        <?php endif; ?>

        <h3><?php echo $heading ?></h3>

          <?php echo $content_body; ?>

        <?php
          if( $link ):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>

      </div>

      <?php if ($image_position == "right"): ?>
        <div class="col-lg-6 narrow-fifty-fifty-with-image--img" style="background: url(<?php echo esc_url($image['url']); ?>) center center; background-size: cover;">
          <!-- <?php
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?> -->
        </div>
      <?php endif; ?>



    </div>

  </div>



</div>
