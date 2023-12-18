<div class="footer__copyright pt-20 pb-20">
	
	<div class="container">
		
		<div class="row">
			
			<div class="blk-5 blk-sm-12">
				
				<?php _e(date('Y') . ' &copy; ' . get_bloginfo('name') . ' | Made with love by <a aria-label="Ecoteers" href="http://ecoteers.nl/" target="_blank">Ecoteers</a>'); ?>

			</div>

			<div class="blk-7 blk-sm-12">
				
				<ul class="display-flex justify-end no-list mt-15">
					
					<?php foreach(get_field('footer', 'option')['footer_copyright'] as $link): ?>

						<li class="pl-10">
							
							<a aria-label="<?php echo $link['link']['title']; ?>" href="<?php echo $link['link']['url']; ?>" target="<?php echo ($link['link']['target']) ? '_blank' : '_self'; ?>">
								
								<?php echo $link['link']['title']; ?>

							</a>

						</li>

					<?php endforeach; ?>

				</ul>

			</div>

		</div>

	</div>

</div>