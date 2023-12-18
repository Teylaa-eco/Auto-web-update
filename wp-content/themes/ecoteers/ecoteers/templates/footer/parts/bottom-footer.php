<div class="bottom-footer container pt-75 pb-75">
	
	<div class="row">
		
		<?php 

		$count = count(get_field('footer', 'option')['footer_menu']);

		foreach(get_field('footer', 'option')['footer_menu'] as $menu): ?>

			<ul class="<?php echo (($count == 4) ? 'blk-3' : 'blk-4'); ?> blk-sm-12 mb-sm-30 no-list">

				<h3 class="size-4 mb-20">
				
					<?php echo $menu['title']; ?>

				</h3>

				<?php foreach($menu['footer_menu'] as $link): ?>

					<li class="mb-5">
						
						<a aria-label="<?php echo $link['link']['title']; ?>" href="<?php echo $link['link']['url']; ?>" target="<?php echo (($link['link']['target']) ? '_blank' : '_self'); ?>">
							
							<?php echo $link['link']['title']; ?>

						</a>

					</li>

				<?php endforeach; ?>

			</ul>

		<?php endforeach; ?>

	</div>

</div>