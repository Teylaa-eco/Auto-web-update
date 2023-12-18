<section class="banners">
	
	<div class="container mt-50 mb-50">
		
		<div class="row">
			
			<div class="gutter-sm blk-6">

				<?php

				$field = get_field('hero')['banners'];

				?>
				
				<a class="banner__url" href="<?php echo $field['main_banner_link_left']['url']; ?>" target="<?php echo ($field['main_banner_link_left']['target']) ? '_blank' : '_self'; ?>" style="background: url(<?php echo wp_get_attachment_image_url($field['main_banner_left'], 'full'); ?>) no-repeat 0 0;">

					<div class="banner__text">
						
						<h4 class="banner__text-content heading-2 mb-10">

							<?php echo $field['main_banner_text_left']; ?>

						</h4>

						<span class="banner__text-sub size-3 weight-2 mb-10 display-block">
							
							<?php echo $field['main_banner_subtext_left']; ?>

						</span>

						<div class="content-regular size-1 color-0">
							
							<?php echo $field['main_banner_short_text_left']; ?>

						</div>

						<span class="banner__text-link size-2 color-1 display-flex align-center">

							<svg width="7" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#fff" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>

							<span class="size-1 pl-5 color-0">
								
								<?php echo $field['main_banner_link_left']['title']; ?>

							</span>

						</span>

					</div>

				</a>

			</div>

			<div class="blk-6 gutter-sm">
				
				<div class="hero__filters pt-40 pb-40 pl-40 pr-40 display-flex flex-wrap align-between">
					
					<div class="filters__inner width-100">
						
						<h2 class="size-4 mb-20">
						
						<?php _e('Waar ben je naar opzoek?', 'Ecoteers'); ?>

					</h2>

					<form method="post" action="">
						
						<div class="form-field mb-10">
							
							<select>
							
								<option selected disabled>
									
									<?php _e('Kies een materiaal'); ?>

								</option>

								<option>
									
									<?php _e('Hout'); ?>

								</option>

								<option>
									
									<?php _e('Kunststof'); ?>

								</option>

								<option>
									
									<?php _e('Aluminium'); ?>

								</option>

							</select>

						</div>

						<div class="form-field mb-10">

							<select>
								
								<option selected disabled>
									
									<?php _e('Kies een type'); ?>

								</option>

								<option>
									
									<?php _e('Valraam'); ?>

								</option>

								<option>
									
									<?php _e('Uitzetramen'); ?>

								</option>

								<option>
									
									<?php _e('Losse ramen'); ?>

								</option>

							</select>
							
						</div>

						<div class="form-field">
							
							<input type="submit" value="Zoek onderdelen">

						</div>

					</form>

					</div>

					<div class="display-flex flex-wrap">
				
						<?php

						if(get_field('hero')['hero_usps']):

							foreach(get_field('hero')['hero_usps'] as $usp):

						?>

							<div class="blk-6 display-flex align-center pr-20">
								
								<svg width="12" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#34a334" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>

								<span class="size-0 pl-5">
									
									<?php echo $usp['hero_usp']; ?>

								</span>

							</div>

						<?php

							endforeach;

						endif;

						?>

					</div>

				</div>

				</div>

			</div>

		</div>

	</div>

</section>