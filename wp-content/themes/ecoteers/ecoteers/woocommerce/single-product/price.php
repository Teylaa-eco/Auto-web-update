<?php

/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;

the_title('<h1 class="product_title entry-title heading-0 mb-20">', '</h1>');

?>

<div class="display-flex flex-wrap width-100">

	<p class="<?php echo esc_attr(apply_filters('woocommerce_product_price_class', 'price')); ?>">€ <?php echo $product->get_price_html(); ?></p>


	<p class="stock <?php echo esc_attr($class); ?>"><svg class="check-style" xmlns="http://www.w3.org/2000/svg" height="1.1em" viewBox="0 0 448 512" style="fill: #8ab87f;">
			<path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
		</svg><span class="weight-3 pl-10"><?php echo ($product->get_stock_status() == 'instock') ? 'Op voorraad' : 'Uitverkocht'; ?></span></p>


	<div class="blk-10 blk-md-12">
		
		<div class="row width-100">

		<div class="blk-6 no-gutter">

			<?php
			$pros_and_cons = get_field('pros_and_cons');
			if ($pros_and_cons) {
				foreach ($pros_and_cons as $item) {
					$pros_text = $item['pros_text'];
					echo '<p><i class="bi bi-check pros-custom-color"></i> ' . $pros_text . '</p>';
				}
			}
			?>

		</div>

		<div class="blk-6 no-gutter">

			<?php
			$pros_and_cons = get_field('pros_and_cons');
			if ($pros_and_cons) {
				foreach ($pros_and_cons as $item) {
					$cons_text = $item['cons_text'];
					echo '<p><i class="bi bi-x cons-custom-color"></i> ' . $cons_text . '</p>';
				}
			}
			?>

		</div>

	</div>

	</div>

</div>