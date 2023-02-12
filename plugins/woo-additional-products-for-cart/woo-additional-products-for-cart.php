<?php
/*
 * Plugin Name:       WooCommerce Additional Products For Cart
 * Plugin URI:
 * Description:       Shows products often bought with some another product from the cart
 * Version:           1.0.0
 * Author:            Anton Rybchenko
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

require __DIR__ . '/includes/woo-additional-products-for-cart-functions.php';

if(!defined('ABSPATH')) {
    exit;
}

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	if ( ! function_exists( 'show_woo_additional_products_for_cart' ) ) {

		/**
		 * Output product up sells.
		 *
		 * @param int    $limit (default: -1).
		 * @param int    $columns (default: 4).
		 * @param string $orderby Supported values - rand, title, ID, date, modified, menu_order, price.
		 * @param string $order Sort direction.
		 */
		function show_woo_additional_products_for_cart( $limit = '-1', $columns = 5, $orderby = 'rand', $order = 'desc' ) {
			$cart_products = WC()->cart->get_cart();

			$selected_cart_product_id = null;
			$orders_with_cart_product = [];

			foreach ($cart_products as $cart_product) {
				if($product_orders = retrieve_orders_by_product_id($cart_product['product_id'])) {
					$orders_with_cart_product = $product_orders;
					$selected_cart_product_id = $cart_product['product_id'];
					break;
				}
			}

			$plugin_items = wc_products_array_orderby( array_filter( array_map( 'wc_get_product', retrieve_products_by_order_ids($selected_cart_product_id, $orders_with_cart_product) ), 'wc_products_array_filter_visible' ), $orderby, $order );

			if(!$plugin_items) {
				return;
			}

			wc_get_template(
				$selected_cart_product_id && $orders_with_cart_product ?
					'templates/items-bought-together.php' :
					'templates/most-popular-items.php',
				array(
					'items'        => $plugin_items,
				), '', trailingslashit(__DIR__)
			);
		}
	}

    add_shortcode('additional-cart-products', 'show_woo_additional_products_for_cart');
}
