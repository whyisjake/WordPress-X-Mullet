<?php
/**
 * Plugin Name: WP X-Mullet
 * Version: 0.1-alpha
 * Description: Add X-Mullet headers to your WordPress website
 * Author: Jake Spurlock
 * Author URI: http://jakespurlock.com
 * Text Domain: wp-mullet
 * @package WP X-Mullet
 */
add_filter( 'wp_headers', 'mullet_add_headers' );

function mullet_add_headers( $headers ) {
	$headers['X-Mullet'] = apply_filters( 'mullet_headers', 'WordPress' );
	return $headers;
}