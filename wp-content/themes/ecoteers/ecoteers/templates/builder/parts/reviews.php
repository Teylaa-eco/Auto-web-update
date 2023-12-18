<?php

$args = array(
	'post_type' => 'reviews',
	'showposts' => -1,
	'post__in' => get_sub_field('reviews', $id),
	'orderby'=> 'date',
	'order' => 'DESC'
);

$query = new WP_Query($args);
	
?>

<section class="reviews has_background">
		
	<div class="container">
		
		<h3 class="heading-1 mb-30 text-center">
			
			<?php echo get_sub_field('title', $id); ?>

		</h3>

		<div class="swiffy-slider slider-item-show3">

		    <ul class="slider-container">
		        
		    	<?php 

		    		if($query->have_posts()):

			    		while($query->have_posts()): 
			    			$query->the_post(); 

			    			echo'<li class="background-0 pt-50 pb-50 pl-40 pr-40">';

			    				echo'<div class="display-flex flex-wrap mb-15">';

			    					for($i = 0; $i < get_field('stars'); $i++):

			    						echo'<div class="pr-5">';

				    						echo'<svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.545" viewBox="0 0 15 14.545">
											  <path id="star-solid" d="M32.46.511a.91.91,0,0,0-1.636,0L29,4.269l-4.079.6a.909.909,0,0,0-.506,1.545l2.96,2.929-.7,4.139A.911.911,0,0,0,28,14.439l3.644-1.946,3.644,1.946a.911.911,0,0,0,1.327-.954l-.7-4.139,2.96-2.929a.909.909,0,0,0-.506-1.545l-4.082-.6Z" transform="translate(-24.144)" fill="'. get_field('styling', 'option')['button_bg_color'] .'"/>
											</svg>
											';

										echo'</div>';

			    					endfor;

			    				echo'</div>';

			    				echo'<div class="content-regular pb-20 mb-20">';

			    					echo get_field('content');

			    				echo'</div>';

			    				echo'<p class="size-1">';

			    					echo get_field('name');

			    				echo'</p>';

			    				echo'<p class="size-0">';

			    					echo get_field('date');

			    				echo'</p>';

			    			echo'</li>';

			    		endwhile;

			    		wp_reset_postdata();

			    	endif;
		    	?>

		    </ul>

		    <div class="slider-indicators slider-indicators-round">

		    	<?php

		    	if($query->have_posts()):

		    		$count = 0;

		    		while($query->have_posts()): 
		    			$query->the_post();

		    			$count++;

		    			if ($count >= 3) {

		    				echo'<button class="'. (($count == 3) ? 'active' : '') .'"></button>';

		    			}

		    		endwhile;

		    		wp_reset_postdata();

		    	endif;

		    	?>

		    </div>
		    
		</div>

	</div>

</section>