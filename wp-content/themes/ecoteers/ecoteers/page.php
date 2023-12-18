<?php

	get_header();

	if(is_cart() || is_checkout()):

		echo'<section class="cart">';

			echo'<div class="container mt-75 mb-75">';

				if(have_posts()):

					while(have_posts()):
						the_post();

						the_content();

					endwhile;

				endif;

			echo'</div>';

		echo'</section>';

		if(is_cart()):

			get_template_part('templates/cart/reviews');

		endif;

	else:

		get_template_part('templates/builder/builder');

	endif;

	get_footer();

?>