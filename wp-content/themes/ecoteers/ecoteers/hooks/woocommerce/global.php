<?php

// Remove currency symbol in shop

function remove_currency_symbol($currency_symbol) {
  
  $currency_symbol = '';
 
  return $currency_symbol;

}

add_filter('woocommerce_currency_symbol', 'remove_currency_symbol');