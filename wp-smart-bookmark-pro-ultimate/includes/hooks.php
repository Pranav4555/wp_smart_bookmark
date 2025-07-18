<?php
register_activation_hook(__FILE__, 'wsbp_on_activate');
register_uninstall_hook(__FILE__, 'wsbp_on_uninstall');

function wsbp_on_activate() {
    // Create user meta key if needed
}

function wsbp_on_uninstall() {
    global $wpdb;
    $wpdb->query("DELETE FROM {$wpdb->usermeta} WHERE meta_key = 'wsbp_bookmarks'");
}
