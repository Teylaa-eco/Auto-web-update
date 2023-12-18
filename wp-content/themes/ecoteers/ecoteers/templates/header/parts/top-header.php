<div class="container">

	<div class="row align-center pt-15 pb-15">

		<div class="header__logo-holder display-flex">
			
			<a aria-label="Logo" class="header__logo display-block mb-sm-10 gutter" href="<?php echo get_bloginfo('url'); ?>">

				<?php

				if (get_field('header', 'option')['logo']) {

					echo wp_get_attachment_image(get_field('header', 'option')['logo'], 'full');

				} else {

					echo '<svg xmlns="http://www.w3.org/2000/svg" width="265" height="116" viewBox="0 0 265 116">
					  <g id="Group_1" data-name="Group 1" transform="translate(-1082 -579)">
					    <text id="B_taalbaar" data-name="B taalbaar" transform="translate(1083 621)" fill="#000" font-size="43" font-family="Merriweather-Bold, Merriweather" font-weight="700" letter-spacing="0.12em"><tspan x="0" y="0">B taalbaar</tspan></text>
					    <text id="Shoppen" transform="translate(1082 679)" fill="#000" font-size="60" font-family="Merriweather-Bold, Merriweather" font-weight="700"><tspan x="0" y="0">Shoppen</tspan></text>
					    <path id="euro-sign-solid" d="M2.743,43.863c-.006.154-.006.3-.006.456v.913c0,.154,0,.3.006.456H1.825a1.825,1.825,0,0,0,0,3.65H3.439a12.323,12.323,0,0,0,11.618,8.213h1.369a1.825,1.825,0,1,0,0-3.65H15.057A8.673,8.673,0,0,1,7.42,49.338H14.6a1.825,1.825,0,0,0,0-3.65H6.4c-.006-.148-.011-.3-.011-.456v-.913c0-.154.006-.308.011-.456h8.2a1.825,1.825,0,0,0,0-3.65H7.42a8.673,8.673,0,0,1,7.637-4.563h1.369a1.825,1.825,0,1,0,0-3.65H15.057A12.323,12.323,0,0,0,3.439,40.214H1.825a1.825,1.825,0,0,0,0,3.65Z" transform="translate(1114 563.577)" fill="#000"></path>
					  </g>
					</svg>';
				}

				?>

			</a>

		</div>

		<div class="topbar__meta">
				
			<ul class="no-list display-flex align-center justify-end width-100">

				<?php

				for ($i = 0; $i < 5; $i++) {

					echo'<li class="display-flex align-center justify-center '. (($i < 4) ? 'highlighted' : '') .'">';

						echo'<svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#fff" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>';

					echo'</li>';

				}

				?>

				<span class="pl-20 size-1">
					
					<strong>
						
						<?php _e('8', 'ecoteers'); ?>

					</strong>

					<?php _e('/10 240 reviews', 'ecoteers'); ?>

				</span>

			</ul>

		</div>

	</div>

</div>