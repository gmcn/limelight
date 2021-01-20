<div class="container-fluid two-column-block">

  <div class="container">

    <div class="row">

      <?php if( have_rows('two_column_blocks') ): ?>
          <div class="row">
          <?php while( have_rows('two_column_blocks') ): the_row();
              $heading = get_sub_field('heading');
              $content_body = get_sub_field('content_body');
              $link = get_sub_field('link');
              $block_bg_colour = get_sub_field('block_bg_colour');
              ?>
              <div class="col-md-6 ">

                <div class="two-column-block--wrap" style="background: <?php echo $block_bg_colour; ?>">

                  <p class="title matchheight"><?php echo $heading ?></p>

                  <?php echo $content_body ?>

                    <?php if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>

                          <svg xmlns="http://www.w3.org/2000/svg" width="25.189" height="12.201" viewBox="0 0 25.189 12.201">
                            <g id="right-arrow" transform="translate(0 -132)">
                              <g id="Group_6" data-name="Group 6" transform="translate(0 132)">
                                <path id="Path_37" data-name="Path 37" d="M24.9,137.4h0l-5.141-5.117a.984.984,0,0,0-1.388,1.395l3.452,3.435H.984a.984.984,0,0,0,0,1.968H21.822L18.37,142.52a.984.984,0,0,0,1.388,1.395L24.9,138.8h0A.985.985,0,0,0,24.9,137.4Z" transform="translate(0 -132)" fill="#0adb9b"/>
                              </g>
                            </g>
                          </svg>


                        </a>
                    <?php endif; ?>

                </div>




              </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>

  </div>

</div>
