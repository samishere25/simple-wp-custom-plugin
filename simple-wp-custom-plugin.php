<?php
/*
Plugin Name: Simple WP Custom Plugin
Description: Demonstrates basic WordPress hooks.
Version: 1.0
Author: Samishere25
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'admin_notices', 'swcp_show_admin_notice' );

function swcp_show_admin_notice() {
    echo '<div class="notice notice-success"><p>Custom admin notice loaded.</p></div>';
}
