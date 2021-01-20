<?php

  $one_col_colour = get_sub_field('one_col_colour');
  $one_col_heading = get_sub_field('one_col_heading');
  $one_col_content = get_sub_field('one_col_content');

 ?>


<div class="container-fluid one_col_heading" style="background: <?php echo $one_col_colour; ?>" >
  <div class="container">
    <div class="row">
      <div class="col-12">

        <?php if ($one_col_heading): ?>
          <h1><?php echo $one_col_heading ?></h1>
        <?php endif; ?>

        <?php echo $one_col_content ?>

      </div>
    </div>
  </div>
</div>
