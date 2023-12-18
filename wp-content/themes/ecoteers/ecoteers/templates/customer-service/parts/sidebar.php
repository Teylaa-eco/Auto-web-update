<ul class="customer-service-list no-list">
	
	<?php

	if (get_field('customer-service', 'option')['page-group']) {

		foreach (get_field('customer-service', 'option')['page-group'] as $page) {

			echo'<li class="mb-15">';

				echo'<strong>';

					echo $page['group-title'];

				echo'</strong>';

				foreach ($page['pages'] as $value) {

					echo'<a class="no-decoration color-1 display-block" href="'. $value['page']['url'] .'" target="'. (($value['page']['targer']) ? '_blank' : '_self') .'">';

						echo $value['page']['title'];

					echo'</a>';

				}

			echo'</li>';

		}

	}

	?>

</ul>