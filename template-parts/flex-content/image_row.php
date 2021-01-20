<?php

  $image = get_sub_field('image');

 ?>

 <?php 
if( !empty( $image ) ): ?>
    <img class="full" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
<?php endif; ?>
