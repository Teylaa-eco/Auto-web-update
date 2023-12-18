<section class="categories">
	
	<div class="container mb-50">

		<h2 class="size-4 mb-15">
			
			<?php echo get_field('categories')['title_brands']; ?>

		</h2>
		
		<div class="row">
			
			<?php 

			if(get_field('categories')['brands']):

				foreach(get_field('categories')['brands'] as $brands):

			?>

				<div class="gutter-sm blk-4 blk-md-6 blk-sm-12">
					
					<div class="brand__block">
						
						<figure class="brand__image">
							
							<?php echo wp_get_attachment_image($brands['image'], 'full'); ?>

						</figure>

						<div class="brand__content pt-15 pl-15 pb-15 pr-15">
							
							<strong class="size-2 mb-10 display-inline-block">
							
								<?php echo $brands['title']; ?>

							</strong>

							<div class="content-regular">
								
								<?php echo $brands['content']; ?>

								<div class="display-flex flex-wrap">
									
									<?php

									if($brands['links']):

										$length = count($brands['links']);
										$count = 0;

										foreach($brands['links'] as $link):

											echo ($count == $length -1) ? '<a class="size-0 weight-3" href="'. $link['link']['href'] .'">'. $link['link']['title'] .'</a>' : '<a class="size-0 weight-3" href="'. $link['link']['href'] .'">'. $link['link']['title'] .'</a><span class="pl-5 pr-5">|</span>';

											$count++;

										endforeach;

									endif;

									?>

								</div>

							</div>

						</div>

					</div>

				</div>

			<?php

				endforeach;

			endif;

			?>

		</div>

	</div>

</section>