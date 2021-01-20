<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>

<?php if( have_rows('accordian') ): ?>
	<div class="accordion" id="accordionExample">
    <?php $i = 1; while( have_rows('accordian') ): the_row();
        $title = get_sub_field('accordian_title');
				$desc = get_sub_field('accordian_copy');
        ?>
				<!-- <div class="card"> -->
			    <div class="card-header" id="heading<?php echo $i ?>">
			      <h2 class="mb-0">
			        <a type="button" data-toggle="collapse" data-target="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
			          <?php echo $title ?>
			        </a>
			      </h2>
			    </div>

			    <div id="collapse<?php echo $i ?>" class="collapse <?php if ($i == 1): ?>show<?php endif; ?> " aria-labelledby="headingOne" data-parent="#accordionExample">
			      <div class="card-body">
			        <?php echo $desc ?>
			      </div>
			    </div>
			  <!-- </div> -->
    <?php $i++; endwhile; ?>
		</div>
<?php endif; ?>
