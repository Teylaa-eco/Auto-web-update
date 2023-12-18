<section class="faq">
	
	<div class="container">
		
		<div class="faq-list mb-50">

			<ul class="product-tabs no-list">

				<?php

					if (get_sub_field('faq')) {

						foreach(get_sub_field('faq') as $faq) {

							echo'<li class="tab-header">';

								echo'<div class="tab-title">';

									echo'<span class="tab-toggle"></span>';
									echo'<span class="tab-toggle"></span>';

									echo $faq['question'];

								echo'</div>';

								echo'<div class="tab-body">';

									echo $faq['answer'];

								echo'</div>';

							echo'</li>';

						}

					}

				?>

			</ul>

		</div>

	</div>

</section>