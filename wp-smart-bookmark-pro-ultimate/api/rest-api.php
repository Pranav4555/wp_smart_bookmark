<?php
add_action('rest_api_init', function () {
    register_rest_route('wsbp/v1', '/bookmarks', [
        'methods' => 'GET',
        'permission_callback' => 'is_user_logged_in',
        'callback' => function () {
            $user_id = get_current_user_id();
            return get_user_meta($user_id, 'wsbp_bookmarks', true);
        }
    ]);
});
