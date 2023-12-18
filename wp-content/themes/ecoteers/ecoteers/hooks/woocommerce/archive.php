<?php

function opening_tag_meta_product() {

	echo'<div class="meta">';

}

add_action('woocommerce_shop_loop_item_title', 'opening_tag_meta_product', 10);

// Change add to cart text

function change_add_to_cart_text($text) {

    return '';

}

add_filter('woocommerce_product_add_to_cart_text', 'change_add_to_cart_text', 10, 1);