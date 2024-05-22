<?php

function my_custom_comment_format($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <!-- <li <?php //comment_class(); ?> id="comment-<?php //comment_ID(); ?>"> -->
    <li <?php comment_class(); ?>>
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