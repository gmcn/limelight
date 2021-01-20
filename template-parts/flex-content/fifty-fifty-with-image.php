<?php

  $bg_colour = get_sub_field('bg_colour');
  $image = get_sub_field('image');
  $sub_heading = get_sub_field('sub_heading');
  $heading = get_sub_field('heading');
  $link = get_sub_field('link');

?>


<div class="container-fluid fifty-fifty-with-image <?php echo $bg_colour ?>">

  <div class="row">

    <div class="col-lg-5 offset-lg-1 align-self-center fifty-fifty-with-image--copy">

      <?php if ($sub_heading): ?>
        <p class="sub_heading"><?php echo $sub_heading ?></p>
      <?php endif; ?>

      <h3><?php echo $heading ?></h3>

      <?php if( have_rows('content_body') ): ?>
          <div class="row content_body">
          <?php while( have_rows('content_body') ): the_row();
              $content_body = get_sub_field('content_body');
              ?>
              <div class="col-md-12">
                  <?php echo $content_body; ?>
              </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <?php
        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

    </div>

    <div class="col-lg-6 fifty-fifty-with-image--img" style="background: url(<?php echo esc_url($image['url']); ?>) center center; background-size: cover">

    </div>

  </div>

</div>
