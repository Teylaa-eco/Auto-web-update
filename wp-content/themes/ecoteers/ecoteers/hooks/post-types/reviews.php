<?php

// Reviews posstype

function reviews_register_post_type() {

	register_post_type('reviews', array(
	    'labels' => array(
	        'name' => 'Reviews',
	        'singular_name' => 'Reviews',
	        'add_new' => 'Nieuwe toevoegen',
	        'edit_item' => 'Bewerken',
	        'new_item' => 'Nieuw',
	        'view_item' => 'Bekijk',
	        'search_items' => "Zoek",
	        'not_found' => 'Niets gevonden',
	        'not_found_in_trash' => 'Prullenbak is leeg'
	    ),
	    'menu_icon' => 'dashicons-format-quote',
	    'public' => false,
	    'show_ui' => true,
	    'has_archive' => false,
	    'supports' => array(
	        'title',
	        'thumbnail'
	    ),
	));

}

add_action('init', 'reviews_register_post_type');