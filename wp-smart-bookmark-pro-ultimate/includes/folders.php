<?php
// Create bookmark folders using user_meta
function wsbp_get_folders($user_id) {
    $folders = get_user_meta($user_id, 'wsbp_folders', true);
    return is_array($folders) ? $folders : [];
}

// Example usage or admin function
function wsbp_add_folder($user_id, $folder_name) {
    $folders = wsbp_get_folders($user_id);
    $folders[$folder_name] = [];
    update_user_meta($user_id, 'wsbp_folders', $folders);
}
