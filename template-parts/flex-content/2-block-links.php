 <?php if( have_rows('2-block-link') ): ?>
   <div class="container-fluid two-block-links">
     <div class="row">
    <?php while( have_rows('2-block-link') ): the_row();

          $twoBlockLinksHeading = get_sub_field('2-block-links_heading');
          $twoBlockLinksSubHeading = get_sub_field('2-block-links_subheading');
          $twoBlockLinksLink = get_sub_field('2-block-links_link');

        ?>
        <a href="<?php echo $twoBlockLinksLink; ?>" class="col-md-6 two-block-links--link">

          <p><?php echo $twoBlockLinksSubHeading ?></p>
          <p><?php echo $twoBlockLinksHeading ?></p>

          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="14" viewBox="0 0 24 14">
            <image id="Icon" width="24" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAOCAYAAAA1+Nx+AAAAAXNSR0IArs4c6QAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAGKADAAQAAAABAAAADgAAAAAuXTW1AAAA+0lEQVQ4EbWSzwoBURTGjSwsrKgZj+BhUPMCVjYWFsqahbIQyoqlwht4C3mQkZL/K43fp4gxG3PHqV93zp3ud879zrV8309EDcdxUpw9wh6qnuctg1rJ4MaPubqbgwMzCpa+zusGpti2PQEfdlB+1zMWf4ohPA4rYmrRyxH8r5F0IQ1T7Crrp0XVImtWiWHcOK+Ge5CHHVRUYMtHDv4Raz2zARRiUNcNpOdCBk6wiG3IGjZuuKCXdICm9lTROBiohUgdRnCBNkPvs5oXCBFvIS7bH2H0TBHX+Qao8zN8iJMnLPkUNSggizXMK3TofBjUMp2BulvBBiZBceV3pab3MnSa2yUAAAAASUVORK5CYII="/>
          </svg>

        </a>
    <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>
