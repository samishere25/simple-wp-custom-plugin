<?php
/*
Plugin Name: Simple WP Custom Plugin
Description: Demonstrates basic WordPress hooks and input sanitization.
Version: 1.0
Author: Samishere25
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Display a custom admin notice
add_action( 'admin_notices', 'swcp_show_admin_notice' );

function swcp_show_admin_notice() {
    if ( isset( $_GET['swcp_message'] ) ) {
        $message = sanitize_text_field( $_GET['swcp_message'] );
        echo '<div class="notice notice-success is-dismissible"><p>' . esc_html( $message ) . '</p></div>';
    }
}
