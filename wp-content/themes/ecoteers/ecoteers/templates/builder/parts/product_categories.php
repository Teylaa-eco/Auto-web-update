<?php

$terms = get_terms(array(
	'taxonomy' => 'product_cat',
	'include' => get_sub_field('categories', $id),
	'hide_empty' => false,
	'number' => 3
));
	
?>

<section class="product-categories <?php echo (get_sub_field('enable_highlited', $id)) ? 'cat-highlited' : ''; ?>">
	
	<div class="container">
		
		<div class="row gutter-sm">
			
			<?php 

			$count = 0;

			foreach($terms as $term): $count++; ?>

				<?php echo (get_sub_field('enable_highlited', $id) && $count == 2) ? '<div class="blk-6 gutter-sm cat-small">' : ''; ?>

				<?php echo (get_sub_field('enable_highlited', $id) && $count == 1) ? '<div class="blk-6 gutter-sm">' : ''; ?>

				<?php echo (get_sub_field('enable_highlited', $id) && $count != 1) ? '<div class="blk-12 no-gutter">' : ''; ?>

				<?php echo (!get_sub_field('enable_highlited', $id)) ? '<div class="blk-4 blk-sm-12 mb-sm-15 gutter-sm">' : ''; ?>
				
					<a class="display-block width-100 position-relative <?php echo (get_sub_field('enable_highlited', $id) && $count == 2) ? 'mb-15' : ''; ?>" href="<?php echo esc_url(get_the_permalink($term->term_id)); ?>">
						
						<figure class="position-absolute top-left width-100 heigh-100">
							
							<?php

							$thumbnail = get_term_meta($term->term_id, 'thumbnail_id', true);

							echo'<img src="'. wp_get_attachment_url($thumbnail) .'" alt="'. $term->name .'">';

							?>

						</figure>

						<h4 class="<?php echo (get_sub_field('enable_highlited', $id) && $count == 1) ? 'heading-2' : 'heading-1'; ?>">
							
							<?php echo $term->name; ?>

						</h4>

						<span class="cat-title size-4 weight-3">
							
							<?php _e('Bekijk categorie', 'betaalbaarshoppen'); ?>

							<div class="btn-arrow">
								
								<span></span>
								<span></span>

							</div>

						</span>

					</a>

				</div>

				<?php echo (get_sub_field('enable_highlited', $id) && $count == 3) ? '</div>' : ''; ?>

			<?php endforeach; ?>

		</div>

	</div>

</section>