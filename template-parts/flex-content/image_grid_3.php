<?php $link_image = get_sub_field('image_grid_3_position'); ?>

<div class="container-fluid image-nav">
  <div class="container">

    <div class="row">
      <?php if( have_rows('links') ): ?>
          <?php $i = 1; while( have_rows('links') ): the_row();
              $link_image = get_sub_field('image_grid_3_link_image');
              $link_title = get_sub_field('image_grid_3_link_title');
              $link = get_sub_field('image_grid_3_link');
              ?>

              <?php if ($i == 1): ?>

              <div class="col-lg-7 ">

                <a href="<?php echo $link ?>">

                  <img src="<?php echo $link_image; ?>" alt="<?php echo $link_title; ?>" loading="lazy" class="align-self-center">

                  <?php if ($link_title): ?>
                    <p><?php echo $link_title; ?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="25.189" height="12.201" viewBox="0 0 25.189 12.201">
                      <g id="right-arrow" transform="translate(0 -132)">
                        <g id="Group_6" data-name="Group 6" transform="translate(0 132)">
                          <path id="Path_37" data-name="Path 37" d="M24.9,137.4h0l-5.141-5.117a.984.984,0,0,0-1.388,1.395l3.452,3.435H.984a.984.984,0,0,0,0,1.968H21.822L18.37,142.52a.984.984,0,0,0,1.388,1.395L24.9,138.8h0A.985.985,0,0,0,24.9,137.4Z" transform="translate(0 -132)" fill="#fff"/>
                        </g>
                      </g>
                    </svg>

                  </p>
                  <?php endif; ?>



                </a>

              </div>

              <?php endif; ?>

              <?php if ($i == 2): ?>

                <!-- <div class="row"> -->
                  <div class="col-sm-5">

                    <div class="col-12">

                      <a href="<?php echo $link ?>">

                        <img src="<?php echo $link_image; ?>" alt="<?php echo $link_title; ?>" loading="lazy">

                        <?php if ($link_title): ?>
                          <p><?php echo $link_title; ?>

                          <svg xmlns="http://www.w3.org/2000/svg" width="25.189" height="12.201" viewBox="0 0 25.189 12.201">
                            <g id="right-arrow" transform="translate(0 -132)">
                              <g id="Group_6" data-name="Group 6" transform="translate(0 132)">
                                <path id="Path_37" data-name="Path 37" d="M24.9,137.4h0l-5.141-5.117a.984.984,0,0,0-1.388,1.395l3.452,3.435H.984a.984.984,0,0,0,0,1.968H21.822L18.37,142.52a.984.984,0,0,0,1.388,1.395L24.9,138.8h0A.985.985,0,0,0,24.9,137.4Z" transform="translate(0 -132)" fill="#fff"/>
                              </g>
                            </g>
                          </svg>

                        </p>
                        <?php endif; ?>

                      </a>

                    </div>

              <?php endif; ?>

              <?php if ($i == 3): ?>

                  <div class="col-12">

                    <a href="<?php echo $link ?>">

                      <img src="<?php echo $link_image; ?>" alt="<?php echo $link_title; ?>" loading="lazy">

                      <?php if ($link_title): ?>
                        <p><?php echo $link_title; ?>

                        <svg xmlns="http://www.w3.org/2000/svg" width="25.189" height="12.201" viewBox="0 0 25.189 12.201">
                          <g id="right-arrow" transform="translate(0 -132)">
                            <g id="Group_6" data-name="Group 6" transform="translate(0 132)">
                              <path id="Path_37" data-name="Path 37" d="M24.9,137.4h0l-5.141-5.117a.984.984,0,0,0-1.388,1.395l3.452,3.435H.984a.984.984,0,0,0,0,1.968H21.822L18.37,142.52a.984.984,0,0,0,1.388,1.395L24.9,138.8h0A.985.985,0,0,0,24.9,137.4Z" transform="translate(0 -132)" fill="#fff"/>
                            </g>
                          </g>
                        </svg>

                      </p>
                      <?php endif; ?>

                    </a>

                  </div>
                </div>

              <?php endif; ?>



          <?php $i++; endwhile; ?>
      <?php endif; ?>
    </div>






  </div>
</div>
</div>
