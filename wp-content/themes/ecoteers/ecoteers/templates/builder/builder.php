<?php

$id = get_queried_object();

if(have_rows('blocks', $id)):

	// Loop

	while(have_rows('blocks', $id)):

		the_row();

		// Hero

		if(get_row_layout() == 'hero'):

			get_template_part('templates/builder/parts/hero');

		endif;

		// Title

		if(get_row_layout() == 'title'):

			get_template_part('templates/builder/parts/title');

		endif;

		// Content

		if(get_row_layout() == 'content'):

			get_template_part('templates/builder/parts/content');

		endif;

		// Content 1/2

		if(get_row_layout() == 'content_1_2'):

			get_template_part('templates/builder/parts/content_1_2');

		endif;

		// Content + image

		if(get_row_layout() == 'content_image'):

			get_template_part('templates/builder/parts/content_image');

		endif;

		// Image

		if(get_row_layout() == 'image'):

			get_template_part('templates/builder/parts/image');

		endif;

		// UPS's

		if(get_row_layout() == 'usps'):

			get_template_part('templates/builder/parts/usps');

		endif;

		// CTA

		if(get_row_layout() == 'cta'):

			get_template_part('templates/builder/parts/cta');

		endif;

		// Reviews

		if(get_row_layout() == 'reviews'):

			get_template_part('templates/builder/parts/reviews');

		endif;

		// Products

		if(get_row_layout() == 'products'):

			get_template_part('templates/builder/parts/products');

		endif;

		// Product categories

		if(get_row_layout() == 'product_categories'):

			get_template_part('templates/builder/parts/product_categories');

		endif;

		// Spacer

		if(get_row_layout() == 'spacer'):

			get_template_part('templates/builder/parts/spacer');

		endif;

		// Faq

		if(get_row_layout() == 'faq'):

			get_template_part('templates/builder/parts/faq');

		endif;

	endwhile;

endif;

?>