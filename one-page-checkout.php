<?php
/*
Plugin Name: One Page Checkout
Description: Adds products to the cart and forwards user to checkout page
Author URI: https://github.com/mybrokengnome
Version: 1.0

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
/**
 * @package One Page Checkout
 * @since 1.0
 * @author Bradley Jackson
 * @copyright Copyright (c) 2017
 * @link https://github.com/mybrokengnome
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
function add_and_include($atts, $content=null)
{ 	
	global $woocommerce;

	$ids =  explode(",", $atts['product_ids']);
	$empty_cart = $atts['empty_cart'];
	
	$checkout_url = $woocommerce->cart->get_checkout_url();

	//if empty cart first
	if($empty_cart === "1")
		$woocommerce->cart->empty_cart(); 

	foreach($ids as $id)
		$woocommerce->cart->add_to_cart($id);
	
	$ReturnString = do_shortcode("[woocommerce_checkout]"); 
	return $content . $ReturnString;
}
add_shortcode('add_and_include', 'add_and_include');

function add_and_forward($atts, $content=null) {
	global $woocommerce;
	$ids =  explode(",", $atts['product_ids']);
	$empty_cart = $atts['empty_cart'];

	$checkout_url = $woocommerce->cart->get_checkout_url();

	//if empty cart first
	if($empty_cart === "1")
		$woocommerce->cart->empty_cart(); 

	foreach($ids as $id)
		$woocommerce->cart->add_to_cart($id);

	wp_redirect( $checkout_url );
} add_shortcode('add_and_forward', 'add_and_forward');