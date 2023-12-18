<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop'); 

	echo'<section class="single__product">';

		echo'<div class="container mt-50 mb-50">';

			do_action('woocommerce_before_main_content');

			while(have_posts()):
				the_post();

				wc_get_template_part('content', 'single-product');

			endwhile;

			do_action('woocommerce_after_main_content');

		echo'</div>';

	echo'</section>';

	get_template_part('templates/single-product/sticky-add-to-cart');

get_footer('shop');

?>

<div class="module upsale-module display-flex align-center justify-center module-overlay">

	<?php

	$product_id = get_the_ID();
	$_product = wc_get_product($product_id);

	?>
	
	<div class="module__content">
		
		<div class="module-header pt-30 pb-30 pl-30 pr-30">
		
			<div class="row align-center">

				<div class="blk-8">

					<div class="display-flex align-center">

						<svg width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#237f1e" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
					
						<span class="size-1 weight-3 pl-15" style="color: #237f1e;">
							
							<?php _e('Het artikel is toegevoegd aan je winkelwagen', 'Ecoteers'); ?>

						</span>

					</div>

					<ul class="no-list pl-40">
						
						<li class="size-1">
								
							<?php echo get_the_title(); ?>

						</li>

						<li class="size-1">
								
							<?php echo '&euro;' . $product->get_price(); ?>

						</li>

					</ul>

				</div>

				<div class="blk-4">
					
					<a class="btn btn--smal display-inline-block mb-10" href="<?php echo wc_get_cart_url(); ?>">
						
						<?php _e('Verder naar bestellen', 'Ecoteers'); ?>

					</a>

					<br>

					<a class="modal-close" href="#">
						
						<?php _e('<span class="color-1">Of</span> verder winkelen', 'Ecoteers'); ?>

					</a>

				</div>

			</div>

		</div>

		<form method="post" action="">
			
			<div class="module-up-sell pt-20 pl-30 pr-30">
			
				<?php

				    // Check if the current page is a single product page
				    
			    	$upsell_ids = $_product->get_upsell_ids();

			        if (!empty($upsell_ids)) {
			        
			            $args = array(
			                'post_type' => 'product',
			                'post__in' => $upsell_ids,
			                'posts_per_page' => -1, // Retrieve all upsell products
			            );

			            $upsell_query = new WP_Query($args);

			            if ($upsell_query->have_posts()) {

			            	echo'<ul>';
			        
				                while ($upsell_query->have_posts()) {
				        
				                    $upsell_query->the_post();

				                    $product_obj = wc_get_product(get_the_ID());
				       				
				       				echo'<li class="display-flex align-center mb-10 pb-10">';

				       					echo'<div class="blk-1 height-100">';

				       						echo'<input type="checkbox" name="add_to_cart[]" value="'. $product_obj->get_id() .'">';

				       					echo'</div>';

				       					echo'<div class="blk-2 height-100">';

				       						echo get_the_post_thumbnail(get_the_ID(), 'full');

				       					echo'</div>';

				       					echo'<div class="'. (($product_obj->is_type('variable')) ? 'blk-5' : 'blk-9') .' height-100">';

				       						echo get_the_title();

				       					echo'</div>';

				       					echo'<div class="blk-1 height-100">';

				       						echo '&euro;' . $product_obj->get_price();

				       					echo'</div>';

				       					if ($product_obj->is_type('variable')) {

				       						echo'<div class="blk-4 height-100">';

				       							$ids = $product_obj->get_children();

				       							echo'<select name="variation[]">';

				       								echo'<option disabled selected>';

				       									_e('Selecteer een optie', 'Ecoteers');

				       								echo'</option>';

					       							foreach ($ids as $id) {

					       								$variation = wc_get_product($id);

					       								echo'<option value="'. $id .'">';

					       									echo $variation->get_name();

					       								echo'</option>';

					       							}

				       							echo'</select>';

				       						echo'</div>';

				       					}

				       				echo'</li>';
				        
				                }

			                echo'</ul>';
			        
			            }
			        
			            wp_reset_postdata(); // Reset the post data
			        
			        }

				?>

			</div>

			<div class="module-footer display-flex flex-wrap align-center pt-30 pb-30 pl-30 pr-30">
						
				<button type="submit" class="btn btn--smal display-inline-block" name="add_to_cart_bulk">
					
					<?php _e('Geselecteerde toevoegen aan winkelwagen?'); ?>

				</button>

			</div>

		</form>

	</div>

</div>