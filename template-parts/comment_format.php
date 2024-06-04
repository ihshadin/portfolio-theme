<?php

// Comments custom design
function my_custom_comment_format($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <div class="comment-author">
            <?php echo get_avatar($comment, 50); ?>
        </div>
        <div class="comment-body">
            <h4><?php comment_author(); ?></h4>
            <div class="comment-num"><?php echo str_pad($depth, 2, '0', STR_PAD_LEFT); ?>.</div>
            <div class="clearfix"></div>
            <?php comment_text(); ?>
            <?php comment_reply_link(array_merge($args, array('reply_text' => '<i class="fas fa-reply"></i> Reply', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
            <div class="comment-meta"><?php comment_date(); ?></div>
            <div class="comment-body_dec"></div>
        </div>
    </li>
<?php
}

// Comment form custom design
function my_custom_comment_form($args) {

    $args['fields'] = array(
        'author' => '
            <div class="row">
                <div class="col-md-6">
                    <div class="input-wrap">
                        <i class="far fa-user-plus"></i>
                        <input type="text" name="author" id="author" placeholder="Your Name *" required />
                    </div>
                </div>',
        'email' => '
                <div class="col-md-6">
                    <div class="input-wrap">
                        <i class="far fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email Address *" required />
                    </div>
                </div>
            </div>',
    );

    $args['comment_field'] = '
        <div class="input-wrap">
            <i class="far fa-comment-alt"></i>
            <textarea name="comment" id="comment" cols="40" rows="3" placeholder="Your Comment:"></textarea>
        </div>';

    $args['submit_button'] = '
        <button class="btn float-btn color-bg" id="submit">
            <span>Add Comment</span>
        </button>';

    $args['class_form'] = 'add-comment custom-form';
    $args['id_form'] = 'add-comment';
    // $args['title_reply'] = '<div class="pr-subtitle">Leave A Comment</div>';
    $args['title_reply_to'] = '<div class="pr-subtitle">Leave a reply to %s</div>';
    $args['logged_in_as'] = '';
    $args['cancel_reply_link'] = __('Cancel Reply');

    // $args['comment_notes_before'] = '';
    // $args['comment_notes_after'] = '';
    // $args['title_reply_before'] = '<div class="pr-subtitle">';
    // $args['title_reply_after'] = '</div>';

    return $args;
}
add_filter('comment_form_defaults', 'my_custom_comment_form');

function comment_fields_order($fields) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    
    unset($fields['comment']);
    unset($fields['author']);
    unset($fields['email']);

    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['comment'] = $comment_field;

    return $fields;
}
add_filter('comment_form_fields', 'comment_fields_order');