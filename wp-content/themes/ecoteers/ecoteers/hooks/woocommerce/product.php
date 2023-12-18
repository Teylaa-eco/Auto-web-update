<?php

/**
 * WooCommerce product
 *
 * @return void
 */

// WooCommerce remove product sale flash

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);

// WooCommerce remove product meta

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

// WooCommerce add image size for variation

add_image_size('variatie-afbeelding', 70, 70, true);

// Woocommerce product sale badge

function woocommerce_price_discount_product_badge()
{

	global $product;

	if ($product->is_on_sale()) :

		echo '<div class="badges"><span class="product__sale-badge">Aanbieding!</span></div>';

	endif;
}

add_action('woocommerce_before_single_product_summary', 'woocommerce_price_discount_product_badge', 5);

// Move title

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 1);

// Move review rating

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
add_action('woocommerce_before_add_to_cart_form', 'woocommerce_template_single_rating', 10);

// WooCommerce limit related products

add_filter('woocommerce_output_related_products_args', 'change_number_related_products', 9999);

function change_number_related_products($args)
{

	$args['posts_per_page'] = 4;
	$args['columns'] = 4;

	return $args;
}

// WooCommerce change tab names

function woo_rename_tabs($tabs)
{

	$tabs['description']['title'] = __('Beschrijving', 'Ecoteers');
	//$tabs['reviews']['title'] = __('Reviews', 'Ecoteers');
	$tabs['additional_information']['title'] = __('Extra informatie', 'Ecoteers');

	return $tabs;
}

add_filter('woocommerce_product_tabs', 'woo_rename_tabs', 98);

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['reviews'] );      	// Remove the description tab

    return $tabs;
}

// Change in stock message

function custom_in_stock_text($availability, $product)
{

	if ($product->is_in_stock() && $product->managing_stock()) $availability = 'Op voorraad';
	return $availability;
}

add_filter('woocommerce_get_availability_text', 'custom_in_stock_text', 99, 2);

// Change product slider

function update_woo_flexslider_options($options)
{

	$options['directionNav'] = true;
	$options['animation'] = 'slide';
	$options['maxItems'] = 4;

	return $options;
}

add_filter('woocommerce_single_product_carousel_options', 'update_woo_flexslider_options');

// Move tabs

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
add_action('woocommerce_after_single_product', 'woocommerce_output_product_data_tabs', 1);

// Add div around product details

function add_closing_div_to_details()
{

	return '</div>';
}

add_action('woocommerce_after_single_product_summary', 'add_closing_div_to_details', 20);

// Add div around product details

function add_usps_to_single_product()
{

	echo '<ul class="product__usps no-list">';

	foreach (get_field('webshop', 'options')['usps'] as $usp) :

		echo '<li>';

		echo '<svg width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
				<path fill="#24ad4f" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
			</svg>';

		echo '<span>';

		echo $usp['usp'];

		echo '</span>';

		echo '</li>';

	endforeach;

	echo '</ul>';
}

add_action('woocommerce_after_add_to_cart_form', 'add_usps_to_single_product', 10);

function product_meta_custom()
{

	if (get_field('deliver_information', get_the_ID()) || get_field('return_information', get_the_ID())) :

		echo '<div class="product-meta">';

		echo (get_field('deliver_information')) ? '<a class="display-block" href="#deliver-information"><svg xmlns="http://www.w3.org/2000/svg" width="8" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#a9a9a9" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg><span class="pl-10">Bezorginformatie</span></a>' : '';
		echo (get_field('return_information')) ? '<a class="display-block" href="#return-information"><svg xmlns="http://www.w3.org/2000/svg" width="8" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#a9a9a9" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg><span class="pl-10">Retourinformatie</span></a>' : '';

		echo '</div>';

	endif;
}

//add_action('woocommerce_after_add_to_cart_form', 'product_meta_custom', 15);

function add_payment_options_single_product()
{

	if (get_field('footer', 'options')['payments']) {

		echo '<div class="product__payment row gutter-sm">';

		foreach (get_field('footer', 'option')['payments'] as $payment) {

			echo '<figure class="gutter-sm">';

			echo wp_get_attachment_image($payment, 'full');

			echo '</figure>';
		}

		echo '</div>';
	}
}

add_action('woocommerce_after_add_to_cart_form', 'add_payment_options_single_product', 20);

// Move up sells as first item

remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);

function woocommerce_move_upsells()
{

	woocommerce_upsell_display(4, 4);
}

add_action('woocommerce_after_single_product', 'woocommerce_move_upsells', 10);

// Move related products to the bottom of the page

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action('woocommerce_after_single_product', 'woocommerce_output_related_products', 50);

// Change upsell text

function change_upsell_text()
{

	return 'Vaak samen gekocht';
}

add_filter('woocommerce_product_upsells_products_heading', 'change_upsell_text');

// Disable added to cart message

add_filter('wc_add_to_cart_message_html', '__return_false');

// Add class to body after succesfully add product to cart

function open_upsale_module($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data)
{

	// Get the product object
	$_product = wc_get_product($product_id);

	// Check if the product has upsells
	$upsell_ids = $_product->get_upsell_ids();

	if (!empty($upsell_ids)) :

		function open_module_class($classes)
		{

			$classes[] = 'open-module';

			return $classes;
		}

		add_filter('body_class', 'open_module_class');

	endif;
}

add_action('woocommerce_add_to_cart', 'open_upsale_module', 10, 6);

// Add a custom tab to the woocommerce tabs

function shipping_product_tab($tabs)
{

	// Add your custom tab

	$tabs['custom_tab'] = array(
		'title'     => __('Verzending & levertijden', 'Ecoteers'),
		'priority'  => 50,
		'callback'  => 'shipping_tab_content'
	);

	return $tabs;
}

add_filter('woocommerce_product_tabs', 'shipping_product_tab');

function shipping_tab_content()
{

	echo '<div class="row">';

	echo '<div class="blk-6 hidden-sm">';

	echo '<figure>';

	echo '<img src="' . get_template_directory_uri() . '/assets/images/package.jpg" alt="' . get_the_title() . '">';

	echo '</figure>';

	echo '</div>';

	echo '<div class="blk-6">';

	echo '<ul class="product-tabs no-list">';

	echo '<li class="tab-header active">';

	echo '<a href="#shipping-information">';

	echo '<span class="tab-toggle"></span>';
	echo '<span class="tab-toggle"></span>';

	_e('Bezorginformatie');

	echo '</a>';

	echo '<div id="shipping-information" class="tab-body">';

	echo '<div class="content-regular">';

	echo get_field('webshop', 'option')['deliver_information'];

	echo '</div>';

	echo '</div>';

	echo '</li>';

	echo '<li class="tab-header">';

	echo '<a href="#shipping-information">';

	echo '<span class="tab-toggle"></span>';
	echo '<span class="tab-toggle"></span>';

	_e('Retourinformatie');

	echo '</a>';

	echo '<div id="shipping-information" class="tab-body">';

	echo '<div class="content-regular">';

	echo get_field('webshop', 'option')['return_information'];

	echo '</div>';

	echo '</div>';

	echo '</li>';

	echo '</ul>';

	echo '</div>';

	echo '</div>';
}


// Add products to cart after popup
	
function add_upsell_to_cart() {

	if (isset($_POST['add_to_cart']) && !empty($_POST['add_to_cart'])) {

		foreach ($_POST['add_to_cart'] as $val) {	

			WC()->cart->add_to_cart($val, 1);

		}

	}

}

add_action('init', 'add_upsell_to_cart');

// Hook to apply the discount when the cart is loaded
add_action('woocommerce_before_calculate_totals', 'apply_upsell_discount');

function apply_upsell_discount($cart) {
    if (is_admin() && !defined('DOING_AJAX')) {
        return;
    }

    // Loop through each cart item
    foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
        // Check if the product has upsells
        $upsells = get_post_meta($cart_item['product_id'], '_upsell_ids', true);

        if (!empty($upsells)) {
            // Apply a 10% discount for upsell products
            $discount = $cart_item['data']->get_price() * 0.1;
            $cart_item['data']->set_price($cart_item['data']->get_price() - $discount);
        }
    }
}