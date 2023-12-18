<section class="best-selling">

	<div class="container mb-30">

		<h2 class="size-4 mb-15">

			<?php echo get_field('best-selling')['title']; ?>

		</h2>

		<div class="woocommerce">

			<ul class="products columns-5">

				<?php

				$args = array(
					'post_type' => 'product',
					'showposts' => -1,
					'post__in' => get_field('best-selling')['products']
				);

				$query = new WP_Query($args);

				while ($query->have_posts()) :
					$query->the_post();

					$_product = wc_get_product(get_the_ID());

				?>

					<li class="product">

						<a href="<?php echo get_the_permalink(); ?>">

							<figure class="position-relative">

								<?php

								echo the_post_thumbnail('full');

								echo ($_product->get_sale_price()) ? '<span class="sale-badge">aanbieding</span>' : '';

								?>

							</figure>

							<h2 class="woocommerce-loop-product__title">

								<?php the_title(); ?>

							</h2>

							<div class="meta">

								<span class="price">

									<?php if ($_product->get_sale_price()) : ?>

										<del aria-hidden="true">

											<span class="woocommerce-Price-amount amount">

												<bdi>

													<span class="woocommerce-Price-currencySymbol"></span>

													<?php echo $_product->get_price(); ?>

												</bdi>

											</span>

										</del>

										&nbsp;

									<?php endif; ?>

									<?php echo ($_product->get_sale_price()) ? '<ins>' : ''; ?>

									<span class="woocommerce-Price-amount amount">

										<bdi>

											<span class="woocommerce-Price-currencySymbol"></span>

											<?php

											if ($_product->get_sale_price()) :

												echo (floor($_product->get_sale_price()) == $_product->get_sale_price()) ? $_product->get_sale_price() . ',-' : $_product->get_sale_price();

											else :

												echo (floor($_product->get_price()) == $_product->get_price()) ? $_product->get_price() . ',-' : $_product->get_price();

											endif;

											?>

										</bdi>

									</span>

									<?php echo ($_product->get_sale_price()) ? '</ins>' : ''; ?>

								</span>


								<?php
								global $product;

								if ($product->is_in_stock()) {
									echo '<div class="stock-archieve"><svg class="check-style" xmlns="http://www.w3.org/2000/svg" height="1.1em" viewBox="0 0 448 512" style="fill: #8ab87f;">' .
										'<path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>' .
										'</svg>'. __(' Op voorraad', 'envy') .
										'</div>';
								} else {
									echo '<div class="stock-archieve" style="margin-bottom: 2.9em;"></div>';
								}

								echo apply_filters('woocommerce_loop_add_to_cart_link',
								    sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
								        esc_url($product->add_to_cart_url()),
								        esc_attr($product->id),
								        esc_attr($product->get_sku()),
								        $product->is_purchasable() ? 'add_to_cart_button' : '',
								        esc_attr($product->product_type),
								        esc_html($product->add_to_cart_text())
								    ),
								$product);

								?>

							</div>

						</a>

					</li>

				<?php

				endwhile;

				wp_reset_query();

				?>

			</ul>

		</div>

	</div>

</section>