<?php

// Disable emojis

function disable_emojis()
{

    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}

add_action('init', 'disable_emojis');

// Remove default embedded scripts

function remove_scripts(&$scripts)
{
    if (!is_admin()) {
        $scripts->remove('jquery');
    }
}

//add_filter('wp_default_scripts', 'remove_scripts');

// WP head embed

function add_css()
{

    wp_enqueue_style('ecoteers', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all', false);
    wp_enqueue_style('swiffy', 'https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css', array(), '1.6.0', 'all', false);
    wp_enqueue_style('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), '4.1.4', 'all', false);
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all', false);
}

add_action('wp_enqueue_scripts', 'add_css');

// WP footer embed

function add_scripts()
{

    wp_enqueue_script('main-jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), '3.6.4', true);
    wp_enqueue_script('ecoteers', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    wp_enqueue_script('swiffy', 'https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js', array(), '1.6.0', true);
    wp_enqueue_script('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), '4.1.4', true);
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
}

add_action('wp_enqueue_scripts', 'add_scripts');

// Add css to wordpress dashboard

function admin_theme_style()
{

    wp_enqueue_style('custom-dashboard', get_template_directory_uri() . '/assets/css/admin/dashboard.css');
}
add_action('admin_enqueue_scripts', 'admin_theme_style');

// Add website styling

function add_global_style()
{

    get_template_part('styling/styling');
}

add_action('wp_body_open', 'add_global_style');

// Remove unused scripts

function move_jquery_to_footer()
{
    wp_scripts()->add_data('jquery', 'group', 1);
    wp_scripts()->add_data('jquery-core', 'group', 1);
    wp_scripts()->add_data('jquery-migrate', 'group', 1);
}

add_action('wp_enqueue_scripts', 'move_jquery_to_footer');





//On stock notification on the archieve page
function envy_stock_catalog()
{
    global $product;
    if ($product->is_in_stock()) {
        echo '<div class="stock-archieve"><svg class="check-style" xmlns="http://www.w3.org/2000/svg" height="1.1em" viewBox="0 0 448 512" style="fill: #24ad4f">' .
            '<path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>' .
            '</svg>' .
            __(' Op voorraad', 'envy') .
            '</div>';
    } else {
        echo '<div class="stock-archieve" style="margin-bottom: 4.8em;"></div>';
    }
}

add_action('woocommerce_after_shop_loop_item_title', 'envy_stock_catalog');





//display out of stock notification
function ace_grey_out_variations_when_out_of_stock($is_active, $variation)
{
    if (!$variation->is_in_stock()) {
        $is_active = false;
    }

    return $is_active;
}
add_filter('woocommerce_variation_is_active', 'ace_grey_out_variations_when_out_of_stock', 10, 2);
