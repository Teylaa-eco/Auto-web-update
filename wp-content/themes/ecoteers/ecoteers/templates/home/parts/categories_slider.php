<section class="categories">
	
	<div class="container mb-50">

		<h2 class="size-4 mb-15">
			
			<?php echo get_field('categories')['title_categories']; ?>

		</h2>
		
		<div class="swiffy-slider slider-item-show5 slider-nav-page slider-nav-noloop">
			
			<ul class="slider-container">
		        
				<?php

				if(get_field('categories')['categories']):

					foreach(get_field('categories')['categories'] as $cat):

						$term = get_term($cat);

				?>

			        <li>
			        	
			        	<a class="display-flex align-center" href="<?php echo get_term_link($term->term_id); ?>">

				        	<figure class="blk-4 no-gutter pt-30 pb-30">
				        		
				        		<?php echo wp_get_attachment_image(get_field('image', 'product_cat_' . $term->term_id), 'full'); ?>

				        	</figure>

				        	<span class="blk-8 display-inline-block size-0 weight-3 pt-30 pb-30 pl-20 pr-15 color-1">
				        		
				        		<?php echo $term->name; ?>

				        	</span>

				        </a>

			        </li>

			    <?php

					endforeach;

				else:

					_e('Je hebt nog niet eerder producten bekeken.', 'betaalbaarshoppen');

				endif;

				?>

		    </ul>

		    <button type="button" class="slider-nav" aria-label="Ga naar links"></button>
    		<button type="button" class="slider-nav slider-nav-next" aria-label="Ga naar rechts"></button>

		</div>

	</div>

</section>