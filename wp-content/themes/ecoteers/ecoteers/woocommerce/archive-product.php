<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

$term = get_queried_object();

get_header('shop');

?>

<section class="shop">
	<div class="container mt-20 mb-50">

		<?php

		do_action('woocommerce_before_main_content');

		if (get_field('hero', 'product_cat_' . $term->term_id)['banners']) :

		?>

			<section class="banners">

				<div class="container">

					<div class="row">

						<div class="gutter-sm blk-6 blk-sm-12">

							<?php

							$field = get_field('hero', 'product_cat_' . $term->term_id)['banners'];

							?>

							<a class="banner__url mb-15" href="<?php echo $field['main_banner_link_left']['url']; ?>" target="<?php echo ($field['main_banner_link_left']['target']) ? '_self' : '_blank'; ?>">

								<div class="banner__text" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="300">

									<h4 class="banner__text-content size-6" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

										<?php echo $field['main_banner_text_left']; ?>

									</h4>

									<span class="banner__text-sub size-3 weight-2" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

										<?php echo $field['main_banner_subtext_left']; ?>

									</span>

									<div class="content-regular size-0 color-1">

										<?php echo $field['main_banner_short_text_left']; ?>

									</div>

									<span class="banner__text-link size-2 color-1 display-flex align-center">

										<svg width="7" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
											<path fill="<?php echo get_field('styling', 'option')['button_bg_color']; ?>" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
										</svg>

										<span class="size-0 pl-5" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

											<?php echo $field['main_banner_link_left']['title']; ?>

										</span>

									</span>

								</div>

								<figure class="banner__image">

									<?php echo wp_get_attachment_image($field['main_banner_left'], 'full'); ?>

								</figure>

							</a>

						</div>

						<div class="gutter-sm blk-6 blk-sm-12">

							<?php

							$field = get_field('hero', 'product_cat_' . $term->term_id)['banners'];

							?>

							<a class="banner__url mb-15" href="<?php echo $field['main_banner_link_right']['url']; ?>" target="<?php echo ($field['main_banner_link_right']['target']) ? '_self' : '_blank'; ?>">

								<div class="banner__text" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="300">

									<h4 class="banner__text-content size-6" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

										<?php echo $field['main_banner_text_right']; ?>

									</h4>

									<span class="banner__text-sub size-3 weight-2" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

										<?php echo $field['main_banner_subtext_right']; ?>

									</span>

									<div class="content-regular size-0 color-1">

										<?php echo $field['main_banner_short_text_right']; ?>

									</div>

									<span class="banner__text-link size-2 color-1 display-flex align-center">

										<svg width="7" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
											<path fill="<?php echo get_field('styling', 'option')['button_bg_color']; ?>" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
										</svg>

										<span class="size-0 pl-5" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

											<?php echo $field['main_banner_link_right']['title']; ?>

										</span>

									</span>

								</div>

								<figure class="banner__image">

									<?php echo wp_get_attachment_image($field['main_banner_right'], 'full'); ?>

								</figure>

							</a>

						</div>

					</div>

				</div>

			</section>

		<?php endif; ?>

		<div class="row mt-10">

			<a class="btn filters-mobile" href="#">

				<span>

					<?php _e('Filteren'); ?>

				</span>

				<svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
					<path fill="#fff" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" />
				</svg>

			</a>

			<div class="filters blk-3 blk-md-6 blk-sm-12" data-filter="<?php echo $term->slug; ?>">

				<?php

				$category_filter_value = get_field('category_filter', $term);

				if ($category_filter_value) {

					echo do_shortcode($category_filter_value);

				} else {

					$filtered_content = get_field('filter', 'option');

					echo do_shortcode($filtered_content);

				}

				?>

				<a class="close-filter" href="#">

					<svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#fff" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/></svg>
					
					<span>
						
						<?php _e('Filteren', 'Ecoteers'); ?>
						
					</span>

				</a>

			</div>

			<div class="blk-8 blk-md-12">

				<div class="regular-content">

					<h2 class="archieve-title-name"><?php echo str_replace('Category: ', '', get_the_archive_title()); ?></h2>

					<?php

					do_action('woocommerce_archive_description');

					?>

				</div>

				<?php

				if (woocommerce_product_loop()) {

					do_action('woocommerce_before_shop_loop');

					woocommerce_product_loop_start();

					if (wc_get_loop_prop('total')) {
						while (have_posts()) {
							the_post();

							do_action('woocommerce_shop_loop');

							wc_get_template_part('content', 'product');
						}
					}

					woocommerce_product_loop_end();

					do_action('woocommerce_after_shop_loop');
				} else {

					do_action('woocommerce_no_products_found');
				}

				do_action('woocommerce_after_main_content');

				?>

			</div>

		</div>

	</div>

</section>

<?php

echo '<div class="container">';

echo '<div class="row mb-75">';

echo get_template_part('templates/builder/builder');

echo '</div>';

echo '</div>';

if (get_field('hero', 'product_cat_' . $term->term_id)['banners']) :

?>

	<section class="banners">

		<div class="container mb-50">

			<div class="row">

				<div class="gutter-sm blk-6 blk-sm-12">

					<?php

					$field = get_field('hero', 'product_cat_' . $term->term_id)['banners'];

					?>

					<a class="banner__url mb-15" href="<?php echo $field['main_banner_link_left']['url']; ?>" target="<?php echo ($field['main_banner_link_left']['target']) ? '_self' : '_blank'; ?>">

						<div class="banner__text" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="300">

							<h4 class="banner__text-content size-6" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

								<?php echo $field['main_banner_text_left']; ?>

							</h4>

							<span class="banner__text-sub size-3 weight-2" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

								<?php echo $field['main_banner_subtext_left']; ?>

							</span>

							<div class="content-regular size-0 color-1">

								<?php echo $field['main_banner_short_text_left']; ?>

							</div>

							<span class="banner__text-link size-2 color-1 display-flex align-center">

								<svg width="7" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<path fill="<?php echo get_field('styling', 'option')['button_bg_color']; ?>" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
								</svg>

								<span class="size-0 pl-5" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

									<?php echo $field['main_banner_link_left']['title']; ?>

								</span>

							</span>

						</div>

						<figure class="banner__image">

							<?php echo wp_get_attachment_image($field['main_banner_left'], 'full'); ?>

						</figure>

					</a>

				</div>

				<div class="gutter-sm blk-6 blk-sm-12">

					<?php

					$field = get_field('hero', 'product_cat_' . $term->term_id)['banners'];

					?>

					<a class="banner__url mb-15" href="<?php echo $field['main_banner_link_right']['url']; ?>" target="<?php echo ($field['main_banner_link_right']['target']) ? '_self' : '_blank'; ?>">

						<div class="banner__text" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="300">

							<h4 class="banner__text-content size-6" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

								<?php echo $field['main_banner_text_right']; ?>

							</h4>

							<span class="banner__text-sub size-3 weight-2" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

								<?php echo $field['main_banner_subtext_right']; ?>

							</span>

							<div class="content-regular size-0 color-1">

								<?php echo $field['main_banner_short_text_right']; ?>

							</div>

							<span class="banner__text-link size-2 color-1 display-flex align-center">

								<svg width="7" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
									<path fill="<?php echo get_field('styling', 'option')['button_bg_color']; ?>" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
								</svg>

								<span class="size-0 pl-5" style="color: <?php echo get_field('styling', 'option')['button_bg_color']; ?>;">

									<?php echo $field['main_banner_link_right']['title']; ?>

								</span>

							</span>

						</div>

						<figure class="banner__image">

							<?php echo wp_get_attachment_image($field['main_banner_right'], 'full'); ?>

						</figure>

					</a>

				</div>

			</div>

		</div>

	</section>

<?php

endif;

get_footer('shop');
