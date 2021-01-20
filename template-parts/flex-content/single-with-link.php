<?php


 $singleWithLinkImg = get_sub_field('single-with-link-img');
 $single_with_link = get_sub_field('single_with_link');


 ?>
<div class="container-fluid image-nav">
  <div class="container">

    <div class="row">

      <div class="col-12">

        <?php
          if( $single_with_link ):
              $link_url = $single_with_link['url'];
              $link_title = $single_with_link['title'];
              $link_target = $single_with_link['target'] ? $single_with_link['target'] : '_self';
              ?>

        <a href="<?php echo $link ?>">

          <?php
            if( !empty( $singleWithLinkImg ) ): ?>
                <img src="<?php echo esc_url($singleWithLinkImg['url']); ?>" alt="<?php echo $link_title; ?>" loading="lazy" class="align-self-center"/>
            <?php endif; ?>

                <p><?php echo $link_title; ?>

                <svg xmlns="http://www.w3.org/2000/svg" width="25.189" height="12.201" viewBox="0 0 25.189 12.201">
                  <g id="right-arrow" transform="translate(0 -132)">
                    <g id="Group_6" data-name="Group 6" transform="translate(0 132)">
                      <path id="Path_37" data-name="Path 37" d="M24.9,137.4h0l-5.141-5.117a.984.984,0,0,0-1.388,1.395l3.452,3.435H.984a.984.984,0,0,0,0,1.968H21.822L18.37,142.52a.984.984,0,0,0,1.388,1.395L24.9,138.8h0A.985.985,0,0,0,24.9,137.4Z" transform="translate(0 -132)" fill="#fff"/>
                    </g>
                  </g>
                </svg>

              </p>




        </a>

        <?php endif; ?>

      </div>
    </div>






  </div>
</div>
