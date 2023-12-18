<section class="hero position-relative full-width <?php echo (get_sub_field('enable_background_color', $id)) ? 'has_background' : ''; ?>">
	
	<div class="height-100 width-100 position-relative">

		<figure class="hero__background-image height-100 width-100 position-absolute top-left <?php echo (get_sub_field('align_text_right', $id)) ? 'align-right' : '';?>">
			
			<?php echo wp_get_attachment_image(get_sub_field('background_image', $id), 'full'); ?>

		</figure>
		
		<div class="display-flex flex-wrap align-center width-100 height-100 <?php echo (get_sub_field('align_text_right', $id)) ? 'alignright' : ''; ?>">
			
			<div class="container">
				
				<div class="inner-hero position-relative width-100">
				
					<h1 class="heading-2 color-0">
					
						<?php echo get_sub_field('title', $id); ?>

					</h1>

					<?php 

					if(get_sub_field('content', $id)):

						echo'<div class="regular-content mt-20 color-0 size-6 weight-1">';

							echo get_sub_field('content', $id);

						echo'</div>';

					endif;

					if(get_sub_field('button', $id)):

						echo'<a class="btn mt-20" href="'. get_sub_field('button', $id)['url'] .'" target="'. ((get_sub_field('button', $id)['target']) ? '_blank' : '_self') .'">';

							echo get_sub_field('button', $id)['title'];

						echo'</a>';

					endif;

					?>

				</div>

			</div>

		</div>

	</div>

</section>