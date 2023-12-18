<section class="woocommerce products">
	
	<div class="container">
		
		<?php

		$args = array(
			'post_type' => 'product',
			'showposts' => -1,
			'post__in' => get_sub_field('products', $id)
		);

		$query = new WP_Query($args);

		if($query->have_posts()):

			echo'<ul class="products columns-4">';

				while($query->have_posts()):
				$query->the_post();

					$_product = wc_get_product(get_the_ID());

					echo'<li class="product">';
					
						echo'<a href="'. get_the_permalink() .'">';

							echo'<figure class="position-relative">';

								echo the_post_thumbnail('full');

								echo ($_product->get_sale_price()) ? '<span class="sale-badge">aanbieding</span>' : '';

							echo'</figure>';

							echo'<h2 class="woocommerce-loop-product__title">';

								the_title();

							echo'</h2>';

							echo'<span class="price">';

								if($_product->get_sale_price()):

									echo'<del aria-hidden="true">';

										echo'<span class="woocommerce-Price-amount amount">';

											echo'<bdi>';

												echo'<span class="woocommerce-Price-currencySymbol"></span>';

												echo $_product->get_price();

											echo'</bdi>';

										echo'</span>';

									echo'</del>';

									echo'&nbsp;';

								endif;

								echo ($_product->get_sale_price()) ? '<ins>' : '';

									echo'<span class="woocommerce-Price-amount amount">';

										echo'<bdi>';

											echo'<span class="woocommerce-Price-currencySymbol"></span>';

											if($_product->get_sale_price()):

												echo (floor($_product->get_sale_price()) == $_product->get_sale_price()) ? $_product->get_sale_price() . ',-' : $_product->get_sale_price();

											else:

												echo (floor($_product->get_price()) == $_product->get_price()) ? $_product->get_price() . ',-' : $_product->get_price();

											endif;

										echo'</bdi>';

									echo'</span>';

								echo ($_product->get_sale_price()) ? '</ins>' : '';

							echo'</span>';

							echo'<span class="button">';

								echo'Meer informatie';

							echo'</span>';

						echo'</a>';

					echo'</li>';

				endwhile;

				wp_reset_query();

			echo'</ul>';

		endif;

		?>

	</div>

</section>