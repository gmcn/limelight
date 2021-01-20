<div class="container-fluid image-nav">
  <div class="container">

    <div class="row">

      <?php if( have_rows('links') ): ?>
          <?php $i = 1; while( have_rows('links') ): the_row();
              $link_image = get_sub_field('link_image');
              $link_title = get_sub_field('link_title');
              $link = get_sub_field('link');
              ?>

              <?php if ($i == 1): ?>

              <div class="col-lg-6">

                <div class="row">
                  <div class="col-lg-12 image-nav__top">

                    <a href="<?php echo $link ?>">



                      <?php
                        if( $link_image ):

                            // Image variables.
                            $url = $link_image['url'];
                            $title = $link_image['title'];
                            $alt = $link_image['alt'];

                            // Thumbnail size attributes.
                            $size = 'gallery_large';
                            $thumb = $link_image['sizes'][ $size ];
                            $width = $link_image['sizes'][ $size . '-width' ];
                            $height = $link_image['sizes'][ $size . '-height' ]; ?>

                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" loading="lazy">

                        <?php endif; ?>

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

              <?php if ($i == 2): ?>

                <div class="row">
                  <div class="col-sm-6">

                    <a href="<?php echo $link ?>">

                      <?php
                        if( $link_image ):

                            // Image variables.
                            $url = $link_image['url'];
                            $title = $link_image['title'];
                            $alt = $link_image['alt'];

                            // Thumbnail size attributes.
                            $size = 'gallery_small';
                            $thumb = $link_image['sizes'][ $size ];
                            $width = $link_image['sizes'][ $size . '-width' ];
                            $height = $link_image['sizes'][ $size . '-height' ]; ?>

                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" loading="lazy">

                        <?php endif; ?>

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

                  <div class="col-sm-6">

                    <a href="<?php echo $link ?>">

                      <?php
                        if( $link_image ):

                            // Image variables.
                            $url = $link_image['url'];
                            $title = $link_image['title'];
                            $alt = $link_image['alt'];

                            // Thumbnail size attributes.
                            $size = 'gallery_small';
                            $thumb = $link_image['sizes'][ $size ];
                            $width = $link_image['sizes'][ $size . '-width' ];
                            $height = $link_image['sizes'][ $size . '-height' ]; ?>

                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" loading="lazy">

                        <?php endif; ?>

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

              </div>

              <?php endif; ?>


              <?php if ($i == 4): ?>

              <div class="col-lg-6">

                <div class="row">

                <div class="col-sm-6">

                  <a href="<?php echo $link ?>">

                    <?php
                      if( $link_image ):

                          // Image variables.
                          $url = $link_image['url'];
                          $title = $link_image['title'];
                          $alt = $link_image['alt'];

                          // Thumbnail size attributes.
                          $size = 'gallery_small';
                          $thumb = $link_image['sizes'][ $size ];
                          $width = $link_image['sizes'][ $size . '-width' ];
                          $height = $link_image['sizes'][ $size . '-height' ]; ?>

                              <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" loading="lazy">

                      <?php endif; ?>

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

              <?php if ($i == 5): ?>


                  <div class="col-sm-6">

                    <a href="<?php echo $link ?>">

                      <?php
                        if( $link_image ):

                            // Image variables.
                            $url = $link_image['url'];
                            $title = $link_image['title'];
                            $alt = $link_image['alt'];

                            // Thumbnail size attributes.
                            $size = 'gallery_small';
                            $thumb = $link_image['sizes'][ $size ];
                            $width = $link_image['sizes'][ $size . '-width' ];
                            $height = $link_image['sizes'][ $size . '-height' ]; ?>

                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" loading="lazy">

                        <?php endif; ?>

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

              <?php if ($i == 6): ?>



                <div class="row">
                  <div class="col-lg-12 image-nav__bottom">

                    <a href="<?php echo $link ?>">

                      <?php
                        if( $link_image ):

                            // Image variables.
                            $url = $link_image['url'];
                            $title = $link_image['title'];
                            $alt = $link_image['alt'];

                            // Thumbnail size attributes.
                            $size = 'gallery_large';
                            $thumb = $link_image['sizes'][ $size ];
                            $width = $link_image['sizes'][ $size . '-width' ];
                            $height = $link_image['sizes'][ $size . '-height' ]; ?>

                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" loading="lazy">

                        <?php endif; ?>

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

              </div>

              <?php endif; ?>



          <?php $i++; endwhile; ?>
      <?php endif; ?>




  </div>
</div>
</div>
