<?php

  $slide_bg = get_sub_field('slide_bg');
  $slide_heading = get_sub_field('slide_heading');
  $slide_copy = get_sub_field('slide_copy');
  $slide_link = get_sub_field('slide_link');


 ?>

 <div class="container-fluid content-with-bg" style="background: url(<?php echo $slide_bg ?>) center center fixed; background-size: cover;">

   <div class="container">

     <div class="row content-with-bg--wrap">

       <div class="content-with-bg--content">

         <p class="title"><?php echo $slide_heading ?></h1>

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

   </div>



 </div>
