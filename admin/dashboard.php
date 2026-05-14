<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', 'wcd_add_admin_menu');

function wcd_add_admin_menu() {

    add_menu_page(
        'Checkout Diagnostics',
        'Checkout Diagnostics',
        'manage_options',
        'wcd-dashboard',
        'wcd_dashboard_page',
        'dashicons-cart',
        31
    );
}

function wcd_dashboard_page() {

    $woocommerce_active = class_exists('WooCommerce')
        ? 'Active'
        : 'Not Active';

    $ssl_enabled = is_ssl()
        ? 'Enabled'
        : 'Not Enabled';

    $currency = get_woocommerce_currency();

    $guest_checkout = get_option('woocommerce_enable_guest_checkout') === 'yes'
        ? 'Enabled'
        : 'Disabled';

?>

<div class="wrap">

    <h1>WooCommerce Checkout Diagnostics</h1>

    <table class="widefat striped" style="max-width: 800px;">

        <thead>
            <tr>
                <th>Check</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>WooCommerce Status</td>
                <td><?php echo esc_html($woocommerce_active); ?></td>
            </tr>

            <tr>
                <td>SSL</td>
                <td><?php echo esc_html($ssl_enabled); ?></td>
            </tr>

            <tr>
                <td>Store Currency</td>
                <td><?php echo esc_html($currency); ?></td>
            </tr>

            <tr>
                <td>Guest Checkout</td>
                <td><?php echo esc_html($guest_checkout); ?></td>
            </tr>

        </tbody>

    </table>

</div>

<?php
}