<?php

  $colour_bg = get_sub_field('colour_bg');
  $heading = get_sub_field('heading');
  $sub_heading = get_sub_field('sub_heading');
  $content_body = get_sub_field('content_body');

 ?>

 <div class="container-fluid" style="background-color: <?php echo $colour_bg ?>">

   <div class="container twenty-eighty">
     <div class="row">

       <div class="col-md-4 twenty-eighty--heading">

         <?php if ($sub_heading): ?>
           <p><?php echo $sub_heading ?></p>
         <?php endif; ?>

         <h3><?php echo $heading ?></h3>

       </div>

       <div class="col-md-8 twenty-eighty--copy">

         <?php echo $content_body ?>

       </div>

     </div>
   </div>

 </div>
