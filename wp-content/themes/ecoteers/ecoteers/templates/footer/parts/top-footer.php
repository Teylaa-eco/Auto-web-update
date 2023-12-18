<div class="top-footer container pt-75 pb-75">
	
	<div class="row">
		
		<div class="blk-3 blk-md-4 blk-sm-12 mb-sm-30">
			
			<figure>
				
				<?php echo file_get_contents(get_field('footer', 'option')['footer_image']); ?>

			</figure>

			<div class="display-flex flex-wrap">
				
				<?php

				foreach(get_field('footer', 'option')['payment_options'] as $logo):

					echo'<div class="pr-10">';

						echo file_get_contents($logo);

					echo'</div>';

				endforeach;

				?>

			</div>

		</div>

		<div class="blk-5 blk-md-4 blk-sm-12 mb-sm-30">
			
			<div class="content-regular pl-50 pr-50 pr-md-0 pl-md-0">

				<h3 class="size-4 mb-20">
					
					<?php echo get_field('footer', 'option')['title']; ?>

				</h3>
				
				<p>
					
					<?php echo get_field('footer', 'option')['content']; ?>

				</p>

			</div>

		</div>

		<div class="blk-4 blk-md-4 blk-sm-12">
			
			<h3 class="size-4 mb-20">
					
				<?php echo get_field('footer', 'option')['title_socials']; ?>

			</h3>

			<ul class="socials display-flex flex-wrap no-list">
				
				<?php if(get_field('footer', 'option')['facebook']): ?>

					<li>
						
						<a aria-label="Facebook" class="display-flex align-center justify-center width-100 height-100" href="<?php echo get_field('footer', 'option')['facebook']; ?>" target="_blank" rel="no-follow">
							
							<svg width="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>

						</a>

					</li>

				<?php endif; ?>

				<?php if(get_field('footer', 'option')['instagram']): ?>

					<li>
						
						<a aria-label="Instagram" class="display-flex align-center justify-center width-100 height-100" href="<?php echo get_field('footer', 'option')['instagram']; ?>" target="_blank" rel="no-follow">
							
							<svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>

						</a>

					</li>

				<?php endif; ?>

				<?php if(get_field('footer', 'option')['linkedin']): ?>

					<li>
						
						<a aria-label="LinkedIn" class="display-flex align-center justify-center width-100 height-100" href="<?php echo get_field('footer', 'option')['linkedin']; ?>" target="_blank" rel="no-follow">
							
							<svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>

						</a>

					</li>

				<?php endif; ?>

				<?php if(get_field('footer', 'option')['youtube']): ?>

					<li>
						
						<a aria-label="Youtube" class="display-flex align-center justify-center width-100 height-100" href="<?php echo get_field('footer', 'option')['youtube']; ?>" target="_blank" rel="no-follow">
							
							<svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>

						</a>

					</li>

				<?php endif; ?>

			</ul>

		</div>

	</div>

</div>