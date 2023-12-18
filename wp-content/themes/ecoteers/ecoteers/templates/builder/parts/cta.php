<section class="cta <?php echo (get_sub_field('has_background', $id)) ? 'has_background' : ''; ?>">
	
	<div class="container">
		
		<div class="row">
			
			<div class="blk-1 hidden-md"></div>

			<div class="blk-10 blk-md-12">
				
				<div class="background-2 display-flex flex-wrap pt-50 pb-50 pl-75 pr-75">
					
					<div class="blk-8 blk-sm-12 text-center-sm">
						
						<h3 class="heading-1 mb-20" style="color: <?php echo get_field('styling', 'option')['menu_text_color']; ?>;">
							
							<?php echo get_sub_field('title', $id); ?>

						</h3>

						<p class="size-6 weight-3 text-center-sm mb-20" style="color: <?php echo get_field('styling', 'option')['menu_text_color']; ?>;">
							
							<?php echo get_sub_field('subtitle', $id); ?>

						</p>

					</div>

					<div class="blk-4 blk-sm-12 text-center-sm display-flex align-center justify-center">
						
						<a class="btn" href="<?php echo get_sub_field('button', $id)['url']; ?>" target="<?php echo (get_sub_field('button', $id)['target']) ? '_blank' : '_self'; ?>">
							
							<?php echo get_sub_field('button', $id)['title']; ?>

						</a>

					</div>

				</div>

			</div>

			<div class="blk-1 hidden-md"></div>

		</div>

	</div>

</section>