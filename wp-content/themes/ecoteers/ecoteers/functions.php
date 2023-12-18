<?php

// Include backend and frontend functions

require_once('hooks/backend.php');
require_once('hooks/frontend.php');

// Add WooCommerce functions

require_once('hooks/woocommerce/global.php');
require_once('hooks/woocommerce/product.php');
require_once('hooks/woocommerce/archive.php');
require_once('hooks/woocommerce/cart.php');

// Add post types

require_once('hooks/post-types/reviews.php');