<?php
if (!defined('WP_UNINSTALL_PLUGIN')) exit;

global $wpdb;
$wpdb->query("DELETE FROM {$wpdb->usermeta} WHERE meta_key IN ('wsbp_bookmarks', 'wsbp_folders')");
