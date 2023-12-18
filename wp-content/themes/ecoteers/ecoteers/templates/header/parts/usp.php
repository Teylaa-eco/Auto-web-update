<div class="header__usp hidden-sm pt-5 pb-5 hide-sm">

	<div class="container">

		<div class="row justify-between">

			<div class="display-flex">

				<?php

				foreach (get_field('header', 'option')['usps'] as $usp) :

					echo '<div class="pr-25 size-0">';

					echo '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#38393a" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
						';

					echo $usp['usp'];

					echo '</div>';

				endforeach;

				?>

			</div>

			<div class="reviews">

				<a class="size-0 color-1" href="#" target="_blank">

					<?php _e('4/5 Google Reviews', 'Ecoteers'); ?>

				</a>

			</div>

		</div>

	</div>

</div>