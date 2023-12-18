<section class="usps">
	
	<div class="container">
		
		<div class="row justify-center">
			
			<?php 

			$count = 0;

			foreach(get_sub_field('usps', $id) as $usp): ?>

				<div class="blk-3 text-center">
					
					<?php echo file_get_contents($usp['icon']); ?>

					<span>
						
						<?php echo $usp['usp']; ?>

					</span>

				</div>

			<?php endforeach; ?>

		</div>

	</div>

</section>