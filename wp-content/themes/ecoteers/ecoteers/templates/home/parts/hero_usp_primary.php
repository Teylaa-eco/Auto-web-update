<section class="usp header-usp mb-50">
	
	<div class="container">
		
		<div class="row pl-15 pr-15">
			
			<div class="no-gutter blk-8 blk-md-12">

				<div class="display-flex">
				
					<?php

					if(get_field('hero')['hero_usps']):

						foreach(get_field('hero')['hero_usps'] as $usp):

					?>

						<div class="display-flex align-center pr-20">
							
							<svg width="12" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#34a334" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>

							<span class="size-1 pl-5">
								
								<?php echo $usp['hero_usp']; ?>

							</span>

						</div>

					<?php

						endforeach;

					endif;

					?>

				</div>

			</div>

			<div class="no-gutter blk-4 blk-md-12">
				
				<div class="display-flex justify-end">
					
					<?php

					if(get_field('hero')['usefull_links']):

						foreach(get_field('hero')['usefull_links'] as $link):

					?>

							<div class="content-regular pl-20">
								
								<a class="size-1 weight-3" href="<?php echo $link['link']['url']; ?>" target="<?php echo ($link['link']['target']) ? '_blank' : '_self'; ?>">
									
									<?php echo $link['link']['title']; ?>

								</a>

							</div>

					<?php

						endforeach;

					endif;

					?>

				</div>

			</div>

		</div>

	</div>

</section>