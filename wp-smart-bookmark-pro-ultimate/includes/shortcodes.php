<?php
add_shortcode('wsbp_bookmarks', function () {
    if (!is_user_logged_in()) return 'Please log in to see your bookmarks.';

    $user_id = get_current_user_id();
    $bookmarks = get_user_meta($user_id, 'wsbp_bookmarks', true) ?: [];

    if (empty($bookmarks)) return '<p>No bookmarks yet.</p>';

    $output = '<ul class="wsbp-list">';
    foreach ($bookmarks as $id) {
        $title = get_the_title($id);
        $link = get_permalink($id);
        $output .= "<li><a href='{$link}'>{$title}</a></li>";
    }
    return $output . '</ul>';
});
