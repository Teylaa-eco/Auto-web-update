<div class="header__menu hidden-sm">
	
	<div class="container">
		
		<div class="row">

			<div class="blk-8">
				
				<ul class="no-list display-flex">

			        <?php wp_nav_menu(array('menu' => 'Hoofdmenu', 'walker' => new Custom_Walker_Nav_Menu(), 'container' => '', 'items_wrap' => '%3$s')); ?>

			    </ul>

			</div>

		    <div class="blk-4 order-sm-2">

				<div class="header__meta row no-gutter justify-end align-center">

					<a class="my-account-icon" aria-label="Zoek onderdelen" class="size-1" href="#">
						
						<svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#fff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>

					</a>

					<a class="my-account-icon" aria-label="Mijn account" class="size-1 pr-30" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>">

						<svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#fff" d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/></svg>

					</a>

					<a aria-label="Winkelwagen" class="size-1" href="<?php echo wc_get_cart_url(); ?>">

						<?php echo (WC()->cart->get_cart_contents_count() > 0) ? '<span class="cart-total display-flex align-center justify-center position-absolute">' . WC()->cart->get_cart_contents_count() . '</span>' : ''; ?>

						<svg xmlns="http://www.w3.org/2000/svg" width="21.45" height="18.426" viewBox="0 0 24.45 21.426">
							<g transform="translate(3.002)">
								<path fill="#fff" d="M3185.86,2622.986a1,1,0,0,1-.943-.664l-4.433-12.418a1,1,0,0,1,1.885-.672l4.433,12.418a1,1,0,0,1-.606,1.278A.986.986,0,0,1,3185.86,2622.986Z" transform="translate(-3180.426 -2608.566)"></path>
							</g>
							<g transform="translate(0 0.001)">
								<path fill="#fff" d="M3124.435,2610.581h-3a1,1,0,1,1,0-2h3a1,1,0,0,1,0,2Z" transform="translate(-3120.432 -2608.579)"></path>
							</g>
							<g transform="translate(4.866 3.411)">
								<path fill="#fff" d="M3236.263,2678.732h-17.582a1,1,0,1,1,0-2h17.582a1,1,0,0,1,0,2Z" transform="translate(-3217.68 -2676.73)"></path>
							</g>
							<g transform="translate(19.445 3.411)">
								<path fill="#fff" d="M3510.019,2687.734a1,1,0,0,1-.95-1.317l3-9.008a1,1,0,0,1,1.9.633l-3,9.008A1,1,0,0,1,3510.019,2687.734Z" transform="translate(-3509.018 -2676.725)"></path>
							</g>
							<g transform="translate(7.436 12.418)">
								<path fill="#fff" d="M3282.035,2858.732h-12.01a1,1,0,1,1,0-2h12.01a1,1,0,1,1,0,2Z" transform="translate(-3269.024 -2856.73)"></path>
							</g>
							<g transform="translate(7.086 15.421)">
								<path fill="#fff" d="M3265.027,2922.735a3,3,0,1,1,3-3A3.006,3.006,0,0,1,3265.027,2922.735Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,3265.027,2918.731Z" transform="translate(-3262.025 -2916.73)"></path>
							</g>
							<g transform="translate(15.592 15.421)">
								<path fill="#fff" d="M3435.026,2922.735a3,3,0,1,1,3-3A3.006,3.006,0,0,1,3435.026,2922.735Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,3435.026,2918.731Z" transform="translate(-3432.024 -2916.73)"></path>
							</g>
						</svg>

					</a>

				</div>

			</div>

		</div>

	</div>

</div>