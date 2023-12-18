<section class="ctas">
	
	<div class="container mb-50">
		
		<div class="row">
			
			<div class="gutter-sm blk-6 blk-sm-12">
				
				<a class="display-flex flex-wrap mb-sm-15" href="<?php echo get_field('category_ctas')['link_left']['url']; ?>" target="<?php echo (get_field('category_ctas')['link_left']['target']) ? '_blank' : '_self'; ?>">
					
					<div class="blk-7 blk-sm-12 no-gutter">

						<div class="cta__content display-flex flex-wrap align-center background-4 pt-30 pb-30 pl-30 pr-30">
							
							<h4 class="heading-0 color-0 display-block width-100">
								
								<?php echo get_field('category_ctas')['title_left']; ?>

							</h4>

							<p class="size-3 mb-15 color-0 display-block width-100">
								
								<?php echo get_field('category_ctas')['subtitel_left']; ?>

							</p>

							<span class="cta__content-link size-2 color-1 display-flex align-center">

								<svg width="7" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#fff" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

								<span class="pl-5 color-0 size-1">
									
									<?php echo get_field('category_ctas')['link_left']['title']; ?>

								</span>

							</span>

						</div>

					</div>

					<figure class="blk-5 hidden-sm no-gutter">
						
						<?php echo wp_get_attachment_image(get_field('category_ctas')['image_left'], 'full'); ?>

					</figure>

				</a>

			</div>

			<div class="gutter-sm blk-6 blk-sm-12">
				
				<a class="display-flex flex-wrap" href="<?php echo get_field('category_ctas')['link_right']['url']; ?>" target="<?php echo (get_field('category_ctas')['link_right']['target']) ? '_blank' : '_self'; ?>">
					
					<div class="blk-7 blk-sm-12 no-gutter">

						<div class="cta__content display-flex flex-wrap align-center background-4 pt-30 pb-30 pl-30 pr-30">
							
							<h4 class="heading-0 color-0 display-block width-100">
								
								<?php echo get_field('category_ctas')['title_right']; ?>

							</h4>

							<p class="size-3 mb-5 color-0 display-block width-100">
								
								<?php echo get_field('category_ctas')['subtitel_right']; ?>

							</p>

							<span class="cta__content-link size-2 color-1 display-flex align-center">

								<svg width="7" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#fff" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

								<span class="pl-5 color-0 size-1">
									
									<?php echo get_field('category_ctas')['link_right']['title']; ?>

								</span>

							</span>

						</div>

					</div>

					<figure class="blk-5 hidden-sm no-gutter">
						
						<?php echo wp_get_attachment_image(get_field('category_ctas')['image_right'], 'full'); ?>

					</figure>

				</a>

			</div>

		</div>

	</div>

</section>