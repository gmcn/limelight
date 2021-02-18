<?php

  $media_type = get_sub_field('media_type');

 ?>

 <?php if ($media_type == "asset"): ?>
   <div class="container knowledge">
     <div class="row">

       <?php if( have_rows('asset-download') ): ?>

          <?php $asset = 0; while( have_rows('asset-download') ): the_row();
              $asset_download_image = get_sub_field('asset-download_image');
              $asset_download_file = get_sub_field('asset-download_file');
              $asset_download_title = get_sub_field('asset-download_title');
              $asset_download_desc =  get_sub_field('asset-download_title_copy');

              ?>

              <div class="col-6 col-md-4 knowledge-asset">

                <?php if ($asset_download_file): ?>

                  <a href="<?php echo $asset_download_file; ?>" download>

                <?php endif; ?>

                <div class="knowledge-asset--imgwrap">
                  <?php if( !empty( $asset_download_image ) ): ?>
                        <img src="<?php echo esc_url($asset_download_image['url']); ?>" alt="<?php echo esc_attr($asset_download_image['alt']); ?>" />
                    <?php endif; ?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="97.459" height="97.459" viewBox="0 0 97.459 97.459">
                      <g id="play-button" transform="translate(-84.967 -84.967)">
                        <g id="Group_5" data-name="Group 5" transform="translate(84.967 84.967)">
                          <path id="Path_37" data-name="Path 37" d="M48.73,0a48.73,48.73,0,1,0,48.73,48.73A48.73,48.73,0,0,0,48.73,0ZM69.251,50.282a3.481,3.481,0,0,1-1.563,1.563v.017L39.843,65.785a3.481,3.481,0,0,1-5.037-3.133V34.807a3.481,3.481,0,0,1,5.037-3.115L67.689,45.614A3.48,3.48,0,0,1,69.251,50.282Z" fill="#fff"/>
                        </g>
                      </g>
                    </svg>
                </div>

                <?php if ($asset_download_file): ?>
                  </a>
                <?php endif; ?>



                  <p class="title"><?php echo $asset_download_title; ?></p>

                  <p><?php echo $asset_download_desc; ?></p>


              </div>

              <?php //$asset++; ?>
          		<?php //if( $asset < 4 ): ?>



              <?php //else : ?>




          		<?php //endif; ?>


          <?php endwhile; ?>

      <?php endif; ?>

        <!-- <a class="show" data-toggle="collapse" href="#collapseAsset" role="button" aria-expanded="false" aria-controls="collapseAsset">
          View Video Library
        </a> -->



     </div>


         <?php if( have_rows('asset-download--tempremoved') ): ?>

         <div class="collapse" id="collapseAsset">
           <div class="row">

            <?php $c = 0; while( have_rows('asset-download') ): the_row();
                $asset_download_image = get_sub_field('asset-download_image');
                $asset_download_file = get_sub_field('asset-download_file');
                $asset_download_title = get_sub_field('asset-download_title');
                $asset_download_desc =  get_sub_field('asset-download_title_copy');

                ?>

                <?php $c++; ?>
                <?php if( $c > 3 ): ?>

                  <div class="col-6 col-md-4 knowledge-asset">

                    <?php if ($asset_download_file): ?>

                      <a href="<?php echo $asset_download_file; ?>" download>

                    <?php endif; ?>

                    <div class="knowledge-asset--imgwrap">
                      <?php if( !empty( $asset_download_image ) ): ?>
                            <img src="<?php echo esc_url($asset_download_image['url']); ?>" alt="<?php echo esc_attr($asset_download_image['alt']); ?>" />
                        <?php endif; ?>

                        <svg xmlns="http://www.w3.org/2000/svg" width="97.459" height="97.459" viewBox="0 0 97.459 97.459">
                          <g id="play-button" transform="translate(-84.967 -84.967)">
                            <g id="Group_5" data-name="Group 5" transform="translate(84.967 84.967)">
                              <path id="Path_37" data-name="Path 37" d="M48.73,0a48.73,48.73,0,1,0,48.73,48.73A48.73,48.73,0,0,0,48.73,0ZM69.251,50.282a3.481,3.481,0,0,1-1.563,1.563v.017L39.843,65.785a3.481,3.481,0,0,1-5.037-3.133V34.807a3.481,3.481,0,0,1,5.037-3.115L67.689,45.614A3.48,3.48,0,0,1,69.251,50.282Z" fill="#fff"/>
                            </g>
                          </g>
                        </svg>
                    </div>

                    <?php if ($asset_download_file): ?>
                      </a>
                    <?php endif; ?>



                      <p class="title"><?php echo $asset_download_title; ?></p>

                      <p><?php echo $asset_download_desc; ?></p>


                  </div>


                <?php endif; ?>




            <?php endwhile; ?>
          </div>

        </div>
        <?php endif; ?>



   </div>
 <?php endif; ?>

 <?php if ($media_type == "download"): ?>
   <div class="container knowledge">
     <div class="row">

       <?php if( have_rows('asset-download') ): ?>

          <?php $dl = 0; while( have_rows('asset-download') ): the_row();
              $asset_download_image = get_sub_field('asset-download_image');
              $asset_download_file = get_sub_field('asset-download_file');
              $asset_download_title = get_sub_field('asset-download_title');
              $asset_download_desc =  get_sub_field('asset-download_title_copy');

              ?>

              <div class="col-6 col-md-3 knowledge-download">

                <?php if ($asset_download_file): ?>

                  <a href="<?php echo $asset_download_file; ?>" download>

                <?php endif; ?>

                <div class="knowledge-download--imgwrap">
                  <?php if( !empty( $asset_download_image ) ): ?>
                        <img src="<?php echo esc_url($asset_download_image['url']); ?>" alt="<?php echo esc_attr($asset_download_image['alt']); ?>" />
                    <?php endif; ?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                     <g id="Group_7" data-name="Group 7" transform="translate(-850 -1114.06)">
                       <rect id="Rectangle_10" data-name="Rectangle 10" width="40" height="40" transform="translate(850 1114.06)" fill="#101010"/>
                       <g id="download-to-storage-drive" transform="translate(825 962.73)">
                         <g id="Group_6" data-name="Group 6" transform="translate(37.216 143.894)">
                           <path id="Path_38" data-name="Path 38" d="M15.595,310.9a.882.882,0,0,0-.648-.267H10.524l-1.3,1.3a1.841,1.841,0,0,1-2.593,0l-1.287-1.3H.915a.883.883,0,0,0-.648.267.882.882,0,0,0-.267.648v3.05a.882.882,0,0,0,.267.648.883.883,0,0,0,.648.267H14.947a.911.911,0,0,0,.915-.915v-3.05A.882.882,0,0,0,15.595,310.9Zm-3.574,3.212a.6.6,0,1,1,.181-.429A.587.587,0,0,1,12.02,314.112Zm2.44,0a.6.6,0,1,1,.181-.429A.586.586,0,0,1,14.461,314.112Z" transform="translate(0 -282.602)" fill="#04e19e"/>
                           <path id="Path_39" data-name="Path 39" d="M95.528,28.46a.6.6,0,0,0,.858,0l4.271-4.271a.55.55,0,0,0,.133-.667.57.57,0,0,0-.562-.372h-2.44V18.88a.618.618,0,0,0-.61-.61H94.737a.619.619,0,0,0-.61.61v4.271h-2.44a.57.57,0,0,0-.562.372.55.55,0,0,0,.134.667Z" transform="translate(-88.026)" fill="#04e19e"/>
                         </g>
                       </g>
                     </g>
                   </svg>
                </div>

                <?php if ($asset_download_file): ?>
                  </a>
                <?php endif; ?>



                  <p class="title"><?php echo $asset_download_title; ?></p>

                  <p><?php echo $asset_download_desc; ?></p>


              </div>

              <?php //$dl++; ?>
          		<?php //if( $dl < 6 ): ?>

          		<?php //endif; ?>


          <?php endwhile; ?>

      <?php endif; ?>

        <!-- <a class="show" data-toggle="collapse" href="#collapseDownload" role="button" aria-expanded="false" aria-controls="collapseDownload">
          View All Downloads
        </a> -->

     </div>


         <?php if( have_rows('asset-download--tempremoved') ): ?>
         <div class="collapse" id="collapseDownload">
           <div class="row">
            <?php $c = 0; while( have_rows('asset-download') ): the_row();
                $asset_download_image = get_sub_field('asset-download_image');
                $asset_download_file = get_sub_field('asset-download_file');
                $asset_download_title = get_sub_field('asset-download_title');
                $asset_download_desc =  get_sub_field('asset-download_title_copy');

                ?>

                <?php $c++; ?>
                <?php if ($c > 5): ?>

                  <div class="col-md-2 knowledge-download">

                    <?php if ($asset_download_file): ?>

                      <a href="<?php echo $asset_download_file; ?>" download>

                    <?php endif; ?>

                    <div class="knowledge-download--imgwrap">
                      <?php if( !empty( $asset_download_image ) ): ?>
                          <img src="<?php echo esc_url($asset_download_image['url']); ?>" alt="<?php echo esc_attr($asset_download_image['alt']); ?>" />
                        <?php endif; ?>

                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                         <g id="Group_7" data-name="Group 7" transform="translate(-850 -1114.06)">
                           <rect id="Rectangle_10" data-name="Rectangle 10" width="40" height="40" transform="translate(850 1114.06)" fill="#101010"/>
                           <g id="download-to-storage-drive" transform="translate(825 962.73)">
                             <g id="Group_6" data-name="Group 6" transform="translate(37.216 143.894)">
                               <path id="Path_38" data-name="Path 38" d="M15.595,310.9a.882.882,0,0,0-.648-.267H10.524l-1.3,1.3a1.841,1.841,0,0,1-2.593,0l-1.287-1.3H.915a.883.883,0,0,0-.648.267.882.882,0,0,0-.267.648v3.05a.882.882,0,0,0,.267.648.883.883,0,0,0,.648.267H14.947a.911.911,0,0,0,.915-.915v-3.05A.882.882,0,0,0,15.595,310.9Zm-3.574,3.212a.6.6,0,1,1,.181-.429A.587.587,0,0,1,12.02,314.112Zm2.44,0a.6.6,0,1,1,.181-.429A.586.586,0,0,1,14.461,314.112Z" transform="translate(0 -282.602)" fill="#04e19e"/>
                               <path id="Path_39" data-name="Path 39" d="M95.528,28.46a.6.6,0,0,0,.858,0l4.271-4.271a.55.55,0,0,0,.133-.667.57.57,0,0,0-.562-.372h-2.44V18.88a.618.618,0,0,0-.61-.61H94.737a.619.619,0,0,0-.61.61v4.271h-2.44a.57.57,0,0,0-.562.372.55.55,0,0,0,.134.667Z" transform="translate(-88.026)" fill="#04e19e"/>
                             </g>
                           </g>
                         </g>
                       </svg>



                    </div>

                    <?php if ($asset_download_file): ?>
                      </a>
                    <?php endif; ?>



                      <p class="title"><?php echo $asset_download_title; ?></p>

                      <p><?php echo $asset_download_desc; ?></p>


                  </div>

                <?php endif; ?>




            <?php endwhile; ?>
            </div>

          </div>
        <?php endif; ?>



   </div>
 <?php endif; ?>
