<?php

// Disable gutenberg

add_filter('use_block_editor_for_post', '__return_false', 10);

// Add option page to theme

if(function_exists('acf_add_options_page')){
    
    acf_add_options_page(array(
        'page_title'    => 'Thema instellingen',
        'menu_title'    => 'Thema instellingen',
        'menu_slug'     => 'thema-instellingen',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

// Allow svg upload

function cc_mime_types($mimes) {

  $mimes['svg'] = 'image/svg+xml';
  
  return $mimes;

}

add_filter('upload_mimes', 'cc_mime_types');

// Register menus

register_nav_menus(array(
    'main_menu' => 'Hoofdmenu',
    'top_menu' => 'Topmenu'
));

// Add woocommerce theme support

function add_woocommerce_support() {
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'add_woocommerce_support');

// Remove srcset

function remove_max_srcset_image_width($max_width) {
 
 return false;

}

add_filter('max_srcset_image_width', 'remove_max_srcset_image_width');

function wdo_disable_srcset($sources) {

    return false;

}

add_filter('wp_calculate_image_srcset', 'wdo_disable_srcset');

// Add display swap to all fonts

add_filter( 'generate_google_font_display', function() {
    return 'swap';
} );

// Register sidebar

function ecoteers_widgets_init() {
    
    register_sidebar(array(
        'name' => __('WooCommerce', 'Ecoteers'),
        'id' => 'woocommerce-sidebar',
        'before_widget' => '<aside id="%1$s" class="mb-30 widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="size-4">',
        'after_title' => '</h4>',
    ));

}

add_action('widgets_init', 'ecoteers_widgets_init');

// Custom nav walker

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
 
    function start_lvl(&$output, $depth = 0, $args = array()) {

        $indent = ($depth > 0 ? str_repeat("\t", $depth) : '');
        $display_depth = ($depth + 1);
        $classes = array(
            'sub-menu',
            ($display_depth % 2  ? 'menu-odd' : 'menu-even'),
            ($display_depth >= 2 ? 'sub-sub-menu' : ''),
            'menu-depth-' . $display_depth
        );
        $class_names = implode('', $classes);
 
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }
 
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth ): ''); // code indent
 
        $depth_classes = array(
            ($depth == 0 ? 'main-menu-item' : 'sub-menu-item'),
            ($depth >=2 ? 'sub-sub-menu-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));
 
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

        $mega_menu = (get_field('enable_megamenu', $item)) ? 'mega-menu' : '';
        $highlited_item = (get_field('enable_highlited', $item)) ? 'highlited' : '';
        $column_item = (get_field('enable_column', $item)) ? 'one-column' : '';

        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . ' ' . $mega_menu . ' ' . $highlited_item . ' ' . $column_item . '" itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement">';
 
        $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url) .'"' : '';
        $attributes .= ' class="menu-link ' . ($depth > 0 ? 'sub-menu-link' : 'main-menu-link') . '"';
 
        $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

}

// Add extra seperators for backend menu

function add_extra_seperators() {

    global $menu;   
    $menu[3] = ['', 'read', '', '', 'wp-menu-separator'];

}

add_action('admin_menu', 'add_extra_seperators');

// Reorder menu in backend

function custom_menu_order($menu_ord) {
    
    if (!$menu_ord) return true;

    return array(
        'index.php', // Dashboard
        'edit.php?post_type=page', // Pages
        'edit.php', // Posts
        'upload.php', // Media
        
        'separator1', // First separator

        'wpcf7', // Contact form 7
        'flamingo', // Flamingo
        'edit-comments.php', // Comments

        'separator2', // Second separator

        'woocommerce',
        'edit.php?post_type=product',
        'wc-admin&path=/analytics/overview',
        'woocommerce-marketing',
        'edit.php?post_type=reviews',

        'separator-last', // Second separator

        'themes.php', // Weergave
        'thema-instellingen', // Thema instellingen
        'options-general.php', // Instellingen
        'tools.php', // Gereedschap
        'users.php', // Gebruikers
    );

}

add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');

// Slug length attributes woocommerce

function custom_change_slug_length($maxlength) {
    
    $maxlength = 300;

    return $maxlength;

}

add_filter('wc_attribute_label_max_slug_length', 'custom_change_slug_length');

function custom_track_product_view() {
    
    if(!is_singular('product'))
        return;

    global $post;

    if(empty($_COOKIE['woocommerce_recently_viewed'])) {

        $viewed_products = array();

    } else {
        
        $viewed_products = (array) explode('|', $_COOKIE['woocommerce_recently_viewed']);

    }

    if(!in_array($post->ID, $viewed_products)) {

        $viewed_products[] = $post->ID;

    }

    if(sizeof($viewed_products) > 15) {

        array_shift($viewed_products);

    }

    // Store for session only

    wc_setcookie('woocommerce_recently_viewed', implode('|', $viewed_products));

}

add_action('template_redirect', 'custom_track_product_view', 20);

// Remove sorting

function remove_default_sorting() {

   remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
   remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );

}

add_action('init', 'remove_default_sorting');