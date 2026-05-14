<?php
/**
 * Plugin Name: WooCommerce Checkout Diagnostics
 * Plugin URI: https://github.com/YOUR_USERNAME/woocommerce-checkout-diagnostics
 * Description: Support diagnostics toolkit for WooCommerce checkout troubleshooting.
 * Version: 1.0
 * Author: YOUR NAME
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'admin/dashboard.php';

add_action('admin_enqueue_scripts', 'wcd_admin_styles');

function wcd_admin_styles() {

    wp_enqueue_style(
        'wcd-admin-css',
        plugin_dir_url(__FILE__) . 'assets/admin.css'
    );
}