<div class="content content_image <?php echo (get_sub_field('enable_background_color', $id)) ? 'has_background' : ''; ?>">
	
	<div class="container">
		
		<div class="row">
			
			<div class="blk-6 blk-sm-12 display-flex flex-wrap align-center <?php echo (get_sub_field('align_image_left', $id)) ? 'order-2' : 'mb-sm-30'; ?>">
				
				<div class="content-regular">
					
					<?php echo get_sub_field('content', $id); ?>

				</div>

			</div>

			<div class="blk-6 blk-sm-12 display-flex flex-wrap align-center <?php echo (get_sub_field('align_image_left', $id)) ? 'order-1 mb-sm-30' : ''; ?>">
				
				<figure>
					
					<?php echo wp_get_attachment_image(get_sub_field('image', $id), 'full'); ?>

				</figure>

			</div>

		</div>

	</div>

</div>