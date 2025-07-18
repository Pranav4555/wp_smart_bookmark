<?php
/*
Plugin Name: WP Smart Bookmark Pro
Description: Advanced user bookmark manager with folders, analytics, email digests, and REST API.
Version: 2.0
Author: Pranav Baitule
*/

if (!defined('ABSPATH')) exit;

define('WSBP_DIR', plugin_dir_path(__FILE__));
define('WSBP_URL', plugin_dir_url(__FILE__));

require_once WSBP_DIR . 'includes/hooks.php';
require_once WSBP_DIR . 'includes/bookmark-handler.php';
require_once WSBP_DIR . 'includes/shortcodes.php';
require_once WSBP_DIR . 'includes/folders.php';
require_once WSBP_DIR . 'admin/dashboard.php';
require_once WSBP_DIR . 'api/rest-api.php';

// Assets
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('wsbp-js', WSBP_URL . 'assets/js/bookmark.js', ['jquery'], null, true);
    wp_localize_script('wsbp-js', 'wsbp_ajax', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('wsbp_nonce')
    ]);
});
