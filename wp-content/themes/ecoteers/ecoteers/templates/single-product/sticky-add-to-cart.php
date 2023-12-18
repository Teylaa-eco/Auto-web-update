<section class="sticky-add-to-cart">
	
	<div class="container">
		
		<div class="row align-center">

			<div class="blk-9 blk-md-6">
				
				<div class="display-flex flex-wrap">

					<div class="product-meta">
						
						<p class="size-1 weight-3">
						
							<?php the_title(); ?>

						</p>
						
					</div>

				</div>

			</div>

			<?php $_product = wc_get_product(get_the_ID()); ?>

			<div class="blk-3 blk-md-6 display-flex justify-center align-center">
				
				<a class="btn" href="<?php echo ($_product->is_type('simple')) ? esc_url(get_the_permalink() . '?add-to-cart='. get_the_ID() .'&quantity=1') : '#add-to-cart'; ?>">
					
					<?php _e('Toevoegen aan winkelwagen'); ?>

				</a>

			</div>

		</div>

	</div>

</section>