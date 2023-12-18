jQuery(document).ready(function($){

	// AOS init

	AOS.init();

	// Hamburger menu

	$('.hamburger-toggle').on('click', function(){

		$('body').toggleClass('active');

		if ($('body').hasClass('active')) {

			// Disable scrolling

			$('html, body').css('overflow', 'hidden');

		} else {

			// Enable scrolling

			$('html, body').css('overflow', 'visible');

		}

	});

	// Add previous link to product page

	$('.woocommerce-breadcrumb').prepend('<span class="go-back"><a href="'+ document.referrer +'">Ga terug</a></span>');

	// If link contains # scroll to element

	$('a[href*="#"]').on('click', function(e){

		if(!$(this).parent().parent().hasClass('tabs') && !$(this).hasClass('tab-header')) {

			e.preventDefault();

			var $url = $(this).attr('href');

			if($url.length > 1){

				$('html, body').animate({
			        scrollTop: $($url).offset().top - 100
			    }, 1000);

			}

		}

	});

	// Flush url after refresh to prevent multiple times add to cart using url

	history.pushState(null, "", location.href.split("?")[0]);

	// Show sticky add to cart after scrolling past add to cart

	function display_sticky_add_to_cart() {
	    
		if ($('#add-to-cart').length) {

		    var window_top = $(window).scrollTop();
		    var div_top = $('#add-to-cart').offset().top + $('#add-to-cart').height();

		    if (window_top > div_top) {
		            
		    	$('body').addClass('active-sticky-cart');

		    } 
		    
		    //if window top reaches the limit removed class
		    
		    if(window_top < $('#add-to-cart').offset().top + $('#add-to-cart').height()){
		   
		        $('body').removeClass('active-sticky-cart');
		    }

		}

	}

	$(window).scroll(display_sticky_add_to_cart);

	// Close upsell popup

	$('.modal-close').on('click', function(){

		$('body').removeClass('open-module');

	});

	// Display active filter

	var $active = $('.filters').attr('data-filter');

	$('.filters ul li').each(function(){

		if($(this).attr('data-filter') == $active) {

			$(this).addClass('active')

		}

	});

	// Add incremental buttons to input quantity

	$('.woocommerce .quantity').prepend('<div class="qty-increment qty-dec">-</div>');
	$('.woocommerce .quantity').append('<div class="qty-increment qty-inc">+</div>');

	$('.qty-increment').on('click', function() {

		var input = $(this).parent().find('.input-text.qty');

		var $button = $(this);
		var oldValue = input.val();

		if ($button.text() == '+') {

			var newVal = parseFloat(oldValue) + 1;

		} else {

			// Don't allow decrementing below zero

			if (oldValue > 0) {

				var newVal = parseFloat(oldValue) - 1;

			} else {

				newVal = 0;

			}

		}

		input.val(newVal);

		if ($('[name="update_cart"]').length) {

			$('[name="update_cart"]').removeAttr('disabled');
        	$('[name="update_cart"]').trigger('click');

        }

	});

	$('.woocommerce-Tabs-panel.woocommerce-Tabs-panel--description').prepend('<div class="read-more__toggle">Lees meer</div>');

	$(document).on('click', '.read-more__toggle', function() {

		if ($('.woocommerce-Tabs-panel.woocommerce-Tabs-panel--description').hasClass('active')) {

			$(this).text('Lees meer');

		} else {

			$(this).text('Lees minder');

		}
		
		$('.woocommerce-Tabs-panel.woocommerce-Tabs-panel--description').toggleClass('active')

	});

	$('.tab-header').on('click', function(e) {

		e.preventDefault();

		$(this).toggleClass('active');

		var $url = $(this).attr('href');

	});

	// Make menu responsive

	$('.header__menu > .container > ul > li.menu-item-has-children').append('<div class="toggle"><span></span><span></span></div>');

	$(document).on('click', '.header__menu ul > li .toggle', function() {

		$(this).parent().children().closest('ul.sub-menumenu-oddmenu-depth-1').toggleClass('active');
		$(this).parent().children().closest('.toggle').toggleClass('active');

	});

	// Make filters expandable

	$('.filters > li > ul > li').append('<div class="toggle"><span></span><span></span></div>');

	$('.filters > li .toggle').on('click', function(e) {

		e.preventDefault();

		$(this).parent().toggleClass('active');

	});

	// Open filters on mobile

	$('.filters-mobile').on('click', function(e) {

		e.preventDefault();

		$('body').addClass('filter-open')

	});

	$(document).on('click', '.close-filter', function(e) {

		e.preventDefault();

		$('body').removeClass('filter-open')

	});

	// Create carousel
	
	if ($('.flex-control-nav').length) {

		$('.flex-control-nav').addClass('splide');
		$('.flex-control-nav').wrapInner('<div class="splide__track"><div class="splide__list"></div></div>');
		$('.flex-control-nav li').addClass('splide__slide');
		
		var splide = new Splide('.flex-control-nav ', {
			perPage: 5,
			pagination: false,
			gap:'15px',
			perMove: 1,
			focus: 'center',
			drag: true
		});

		splide.mount();

	}

	// Create partner carousel

	if ($('.partners .partner-slider').length) {


		var splide = new Splide('.partners .partner-slider', {
			type: 'loop',
			autoplay: true,
			perPage: 5,
			pagination: true,
			arrows: false,
			perMove: 1,
			drag: true,
			gap:'30px',
		});

		splide.mount();

	}

})