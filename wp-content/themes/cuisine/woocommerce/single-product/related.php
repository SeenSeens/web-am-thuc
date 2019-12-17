<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

<div class="chopcafe_grid_shop row">
	<div class="col-lg-12">
		<div class="releted_menu">
	<h4 style="padding-bottom: 25px;border-bottom: 1px solid #e1e1e1;margin-bottom: 60px;"><?php esc_html_e( 'Related products', 'woocommerce' ); ?></h4>

	<?php woocommerce_product_loop_start(); ?>

		<?php
		foreach ( $related_products as $related_product ) :
			$id = $related_product->id;
			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img370-365');
			$product = wc_get_product($id);
			$price = $product->get_price_html();
		 	$post_object = get_post( $related_product->get_id() );
			setup_postdata( $GLOBALS['post'] =& $post_object );
			//wc_get_template_part( 'content', 'product' );
			?>
			<div class="col-lg-4 col-md-6 col-sm-12 menu_item breakfast lunch snaks">
				<div class="grid_item food_grid_box">
					<div class="grid_inner_item">
						<div class="chopcafe_img">
							<img src="<?php echo $thumb[0]; ?>" class="img-fluid" alt="">
							<div class="overlay_img"></div>
							<div class="overlay_content">
								<a href="<?php echo $thumb[0]; ?>" class="btn_a zoom_img"><i class="fas fa-search"></i></a>
								<a href="<?php the_permalink(); ?>" class="btn_a btn_link"><i class="fas fa-link"></i></a>
							</div>
						</div>
						<div class="chopcafe_info text-center">
							<h3><a href="<?php the_permalink(); ?>"><?php echo $related_product->name; ?></a></h3>
							<ul class="rating">
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
							<p><?php echo $price; ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>

	<?php woocommerce_product_loop_end(); ?>
		</div>
	</div>
</div>

<?php endif;

wp_reset_postdata();
