jQuery(document).ready(function ($) {
    $('.wsb-btn').click(function () {
        const btn = $(this);
        const post_id = btn.data('post');

        $.post(wsbp_ajax.ajax_url, {
            action: 'wsbp_toggle_bookmark',
            nonce: wsbp_ajax.nonce,
            post_id: post_id
        }, function (res) {
            if (res.success) {
                btn.text(res.data.action === 'added' ? 'Remove Bookmark' : 'Add Bookmark');
            }
        });
    });
});
