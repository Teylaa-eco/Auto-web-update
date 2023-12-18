<section class="partners">
	
	<div class="container mb-50">
		
		<h2 class="size-4 mb-15">
			
			<?php echo get_field('partners')['title']; ?>

		</h2>

		<div class="splide partner-slider">

			<div class="splide__track">
	
				<ul class="splide__list">
			        
					<?php

					if (get_field('partners')['logos']):

						foreach (get_field('partners')['logos'] as $field):

					?>

						<li class="splide__slide">
						
							<?php echo wp_get_attachment_image($field, 'full'); ?>

						</li>

					<?php

						endforeach;

					endif;

					?>

			    </ul>

			    

			</div>

		</div>

	</div>

</section>