<?php

function retrieve_orders_by_product_id(int $product_id): array {
	global $wpdb;
	$order_status = ['wc-completed', 'wc-processing', 'wc-on-hold'];

	$orders = $wpdb->get_col("
				SELECT order_items.order_id
		        FROM {$wpdb->prefix}woocommerce_order_items as order_items
		        LEFT JOIN {$wpdb->prefix}woocommerce_order_itemmeta as order_item_meta ON order_items.order_item_id = order_item_meta.order_item_id
		        LEFT JOIN {$wpdb->posts} AS posts ON order_items.order_id = posts.ID
		        WHERE posts.post_type = 'shop_order'
		        AND posts.post_status IN ( '" . implode( "','", $order_status ) . "' )
		        AND order_items.order_item_type = 'line_item'
		        AND order_item_meta.meta_key = '_product_id'
		        AND order_item_meta.meta_value = '".$product_id."'
				");

	return $orders;
}

function retrieve_products_by_order_ids(?int $main_product_id = null, ?array $order_ids = null): array {
	global $wpdb;
	$query = "SELECT order_item_meta.meta_value
		    	FROM {$wpdb->prefix}woocommerce_order_items as order_items
		        LEFT JOIN {$wpdb->prefix}woocommerce_order_itemmeta as order_item_meta ON order_items.order_item_id = order_item_meta.order_item_id
		        LEFT JOIN {$wpdb->posts} AS posts ON order_items.order_id = posts.ID
		        WHERE order_item_meta.meta_key = '_product_id'";

	if($main_product_id && $order_ids) {
		$query .= "AND order_item_meta.meta_value != '".$main_product_id."'
		        AND order_items.order_id IN ( '" . implode( "','", $order_ids) . "' )";
	}

	$query .= "GROUP BY order_item_meta.meta_value
		        ORDER BY COUNT(*) DESC LIMIT 5";

	return $wpdb->get_col($query);
}
