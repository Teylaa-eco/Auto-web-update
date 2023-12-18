<?php

echo'<style>';

	// Backgrounds

	echo'.background-2{background:'. get_field('styling', 'option')['primary_color'] .';}';
	echo'.background-3{background:'. get_field('styling', 'option')['secundairy_color'] .';}';
	echo'.background-4{background:'. get_field('styling', 'option')['button_bg_color'] .';}';

	// Header usps

	echo'.header__usp{background:'. get_field('styling', 'option')['usps_background_color'] .';}';
	echo'.header__usp,.header__menu ul li.mega-menu ul li.text-link a{color:'. get_field('styling', 'option')['usps_text_color'] .';font-weight:600;}';

	// Menu

	echo'.header__menu{background:'. get_field('styling', 'option')['primary_color'] .';}';
	echo'.header__menu ul li a{color:'. get_field('styling', 'option')['menu_text_color'] .';}';
	echo'.header__menu ul li.mega-menu ul a{color:'. get_field('styling', 'option')['primary_color'] .';}';
	echo'.header__menu ul li.highlited > a{font-weight:600;color:'. get_field('styling', 'option')['button_bg_color'] .'!important;}';
	echo'.header__menu ul li a:hover{color:'. get_field('styling', 'option')['menu_text_color_hover'] .'!important;}';

	// Hamburger toggle

	echo'.hamburger-toggle span{background:'. get_field('styling', 'option')['primary_color'] .';}';

	// Content

	echo'html,body,.wc-block-product-categories a,.woocommerce-cart-form__cart-item.cart_item li.product-name a,.filters ul li a{color:'. get_field('styling', 'option')['text_color'] .';}';
	echo'.content-regular a{color:'. get_field('styling', 'option')['button_bg_color'] .'; text-decoration:none;}';

	// Buttons

	echo'.single-product.woocommerce div.product form.cart .button,.woocommerce #review_form #respond .form-submit input, .btn--0,.woocommerce ul.products li.product .button, [type="submit"],.btn,.cart-total,.woocommerce .cart .button,.woocommerce .cart input.button,#add_payment_method .wc-proceed-to-checkout a.checkout-button,.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,.woocommerce .button.button{background-color:'. get_field('styling', 'option')['button_bg_color'] .' !important;color:'. get_field('styling', 'option')['button_text_color'] .'!important;}';
	echo'.filters .close{background:'. get_field('styling', 'option')['button_bg_color'] .';}';
	echo'.woocommerce ul.products li.product .button svg path{fill:'. get_field('styling', 'option')['button_text_color'] .';}';
	echo'.single-product.woocommerce div.product form.cart .button:hover,.woocommerce #review_form #respond .form-submit input:hover, .btn--0:hover,.woocommerce ul.products li.product .button:hover, [type="submit"]:hover,.btn:hover,.woocommerce .cart .button:hover,.woocommerce .cart input.button:hover,#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover,.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,.woocommerce .button.button:hover{background:'. get_field('styling', 'option')['button_bg_color_hover'] .'!important;color:'. get_field('styling', 'option')['button_bg_text_hover'] .'!important;}';
	echo'.wc-block-price-filter__range-input-progress{background:'. get_field('styling', 'option')['button_bg_color'] .';}';
	echo'.content-regular a, .modal-close{color:'. get_field('styling', 'option')['link_color'] .';}';
	echo'.woocommerce div.product .woocommerce-tabs ul.tabs li:before{background: '. get_field('styling', 'option')['button_bg_color'] .' !important;}';

	// Pagenavi

	echo'.page-numbers a{color:'. get_field('styling', 'option')['button_bg_color'] .'; text-decoration:none;}';
	echo'.page-numbers span{background:'. get_field('styling', 'option')['button_bg_color'] .'!important;color:'. get_field('styling', 'option')['button_text_color'] .'!important;}';
	echo'.page-numbers a:hover{background:'. get_field('styling', 'option')['button_bg_color_hover'] .'!important;color:'. get_field('styling', 'option')['button_bg_text_hover'] .'!important;}';
	echo'.woocommerce nav.woocommerce-pagination ul li{border:1px solid '. get_field('styling', 'option')['button_bg_color'] .';margin: 0 5px;}';

	// Single product

	echo'.single-product .badges, .woocommerce ul.products li.product .onsale{background:'. get_field('styling', 'option')['button_bg_color'] .';color:'. get_field('styling', 'option')['button_text_color'] .';}';
	echo'.woocommerce div.product p.price del,.woocommerce div.product p.price ins,.woocommerce ul.products li.product .price,.woocommerce ul.products li.product .price del,.woocommerce ul.products li.product .price ins,.woocommerce div.product p.price,.woocommerce div.product span.price{color:'. get_field('styling', 'option')['text_color'] .';}';
	echo'.single-product.woocommerce .quantity .qty{border: 1px solid '. get_field('styling', 'option')['text_color'] .';}';
	echo'.product__nav li a{color:'. get_field('styling', 'option')['button_bg_color'] .';}';
	echo'.woocommerce p.stars a{color:'. get_field('styling', 'option')['button_bg_color'] .';}';
	echo'.woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h3{color:'. get_field('styling', 'option')['button_bg_color'] .';}';
	echo'.woocommerce .star-rating span{color:'. get_field('styling', 'option')['button_bg_color'] .';}';
	echo'.woocommerce .woocommerce-review-link{text-decoration:none;font-size:14px;color:'. get_field('styling', 'option')['text_color'] .';}';
	echo'.woocommerce div.product .stock{color:'. get_field('styling', 'option')['button_bg_color'] .';}';

	// Cart

	echo'input[type="text"],input[type="email"],input[type="tel"],input[type="number"],select,textarea{background:#fff;padding:10px!important;}';

	echo'select{padding:10px 25px 10px 10px!important;}';

	// USPs

	echo'.usps svg path{fill:'. get_field('styling', 'option')['button_bg_color'] .';}';

	// Loop items (woocommerce)

	echo'.woocommerce.products .product .stock-status{color:'. get_field('styling', 'option')['button_bg_color'] .';}';
	echo'.woocommerce.products .product .stock-status svg path{fill:'. get_field('styling', 'option')['button_bg_color'] .';}';

	// Loop items (buider)

	echo'.woocommerce.products .product .sale-badge{background:'. get_field('styling', 'option')['button_bg_color'] .';color:'. get_field('styling', 'option')['button_text_color'] .';}';

	// Reviews

	echo'.slider-indicators>*{background-color:'. get_field('styling', 'option')['button_bg_color'] .';}';

	// Filters

	echo'.filters ul > li.active > a{color:'. get_field('styling', 'option')['button_bg_color'] .';}';

echo'</style>';