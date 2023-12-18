<?php

$viewed_products = !empty($_COOKIE['woocommerce_recently_viewed']) ? (array) explode('|', wp_unslash($_COOKIE['woocommerce_recently_viewed'])) : array();
$viewed_products = array_reverse(array_filter(array_map('absint', $viewed_products)));

if(!empty($viewed_products)) {

	$viewed_products = array_slice($viewed_products, -5);
	$product_ids = implode(',', $viewed_products);

}

?>

<section class="categories">
	
	<div class="container mb-50">

		<h2 class="size-4 mb-15">
			
			<?php _e('Dit heb je eerder bekeken', 'ecoteers'); ?>

		</h2>
		
		<?php 

		if(!empty($product_ids)) {

			echo do_shortcode("[products limit=4 columns=4 ids='$product_ids']"); 

		} else {

			echo'<div class="content-regular">';

				_e('Je hebt nog geen producten bekeken. Bekijk <a href="'. get_permalink(wc_get_page_id('shop')) .'">hier</a> ons aanbod!', 'betaalbaarshoppen');

			echo'</div>';

		}

		?>

	</div>

</section>