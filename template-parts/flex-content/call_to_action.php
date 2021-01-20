

<?php

  $cta_copy = get_sub_field('cta_copy');
  $cta_link = get_sub_field('cta_link');

 ?>



<div class="container-fluid cta">
  <div class="container">

    <div class="row">
      <div class="col-md-8 col-lg-9 cta--copy">
        <p><?php echo $cta_copy ?></p>
      </div>

      <div class="col-md-4 col-lg-3 cta--link">

        <?php
          if( $cta_link ):
              $link_url = $cta_link['url'];
              $link_title = $cta_link['title'];
              $link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
              ?>
              <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>


      </div>
    </div>



  </div>
</div>
