<?php
add_action('wp_ajax_wsbp_toggle_bookmark', function () {
    check_ajax_referer('wsbp_nonce');

    $post_id = intval($_POST['post_id']);
    $user_id = get_current_user_id();

    if (!$user_id || !get_post($post_id)) wp_send_json_error();

    $bookmarks = get_user_meta($user_id, 'wsbp_bookmarks', true);
    $bookmarks = is_array($bookmarks) ? $bookmarks : [];

    if (in_array($post_id, $bookmarks)) {
        $bookmarks = array_diff($bookmarks, [$post_id]);
        $action = 'removed';
    } else {
        $bookmarks[] = $post_id;
        $action = 'added';
    }

    update_user_meta($user_id, 'wsbp_bookmarks', array_values($bookmarks));
    wp_send_json_success(['action' => $action]);
});
