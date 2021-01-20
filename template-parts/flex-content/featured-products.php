<div class="swiper-products__wrap">

  <div class="container">

    <?php
    $featured_products = get_sub_field('products');
    if( $featured_products ): ?>

      <div class="swiper-products">

        <div class="swiper-products_title">
          <h2><?php echo get_sub_field('products_section_title'); ?></h2>
        </div>


          <div class="swiper-wrapper">


            <?php foreach( $featured_products as $post ):

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>

                  <div class="swiper-slide">

                    <a href="<?php the_permalink(); ?>">

                      <?php echo get_the_post_thumbnail($_post->ID, 'feat_prod'); ?>

                      <p><?php the_title(); ?></p>

                      <?php

                      $terms = get_the_terms( $post->ID, 'product_cat' ); ?>

                      <?php foreach ( $terms as $term ) {
                          echo $term->name;
                      } ?>



                    </a>

                  </div>

              <?php endforeach; wp_reset_postdata(); ?>

          </div>

          <a class="view" href="/shop" target="_self">View all products</a>

        </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev-unique">

            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve"><g><g><path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
  			c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
  			c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
  			c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

          </div>
          <div class="swiper-button-next-unique">

            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve"><g><g><path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
  			c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
  			c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
  			c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

          </div>



    <?php endif; ?>

  </div>


</div>
