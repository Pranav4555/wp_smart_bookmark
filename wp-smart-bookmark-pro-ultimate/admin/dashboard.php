<?php
add_action('admin_menu', function () {
    add_menu_page('Bookmark Analytics', 'Bookmarks', 'manage_options', 'wsbp-analytics', 'wsbp_render_dashboard');
});

function wsbp_render_dashboard() {
    $users = get_users();
    $data = [];

    foreach ($users as $user) {
        $bookmarks = get_user_meta($user->ID, 'wsbp_bookmarks', true);
        $data[] = [
            'user' => $user->user_login,
            'count' => is_array($bookmarks) ? count($bookmarks) : 0,
        ];
    }

    echo '<h2>Bookmark Analytics</h2><table class="widefat"><thead><tr><th>User</th><th>Bookmarks</th></tr></thead><tbody>';
    foreach ($data as $row) {
        echo "<tr><td>{$row['user']}</td><td>{$row['count']}</td></tr>";
    }
    echo '</tbody></table>';
}
