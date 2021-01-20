<?php if( have_rows('columnx3') ): ?>
  <div class="container columnx3">
    <div class="row">
      <?php while( have_rows('columnx3') ): the_row();
      $heading = get_sub_field('heading');
      $content_body = get_sub_field('content_body');
      ?>
        <div class="col-md-4">
          <p class="title"><?php echo $heading ?></p>
          <?php echo $content_body; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>
