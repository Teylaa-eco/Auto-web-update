<section class="newsletter">
	
	<div class="container mb-50">
		
		<div class="display-flex flex-wrap align-center background-4 pt-40 pb-40 pl-40 pr-40 pt-sm-20 pb-sm-20 pl-sm-20 pr-sm-20">
			
			<div class="blk-7 blk-sm-12">
				
				<h3 class="size-4 color-0">
					
					<?php echo get_field('footer', 'option')['newsletter_title']; ?>

				</h3>

				<p class="color-0 mb-15">
					
					<?php echo get_field('footer', 'option')['newsletter_subtitle']; ?>

				</p>

			</div>

			<div class="blk-5 blk-sm-12">
					
				<?php echo do_shortcode(get_field('footer', 'option')['newsletter_contactform']); ?>

			</div>

		</div>

	</div>

</section>