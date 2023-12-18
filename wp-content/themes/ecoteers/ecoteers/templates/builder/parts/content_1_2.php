<section class="content <?php echo (get_sub_field('enable_background_color', $id)) ? 'has_background' : '';?>">
	
	<div class="container">
		
		<div class="row">
			
			<div class="blk-6 blk-sm-12">
				
				<div class="content-regular mb-sm-30">
					
					<?php echo get_sub_field('content_left', $id); ?>

				</div>

			</div>

			<div class="blk-6 blk-sm-12">

				<div class="content-regular">
					
					<?php echo get_sub_field('content_right', $id); ?>

				</div>

			</div>

		</div>

	</div>

</section>