<?php

if (get_field('blocks')) {

	foreach(get_field('blocks') as $block) {

		// Get content layout

		if ($block['acf_fc_layout'] == 'content') {

			echo'<div class="content-regular mb-50">';

				echo $block['content'];

			echo'</div>';

		}

		// Get FAQ layout

		if ($block['acf_fc_layout'] == 'faq') {

			echo'<div class="faq-list mb-50">';

				echo'<ul class="product-tabs no-list">';

					if ($block['faq']) {

						foreach($block['faq'] as $faq) {

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

				echo'</ul>';

			echo'</div>';

		}

	}

}

?>