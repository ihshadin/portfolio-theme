<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shadin
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="fl-wrap content-box">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<div class="pr-subtitle">
			<?php 
			$shadin_comment_count = get_comments_number();
			if ( '1' === $shadin_comment_count ) {
				echo esc_html('Comment', 'shadin');
			} else {
				echo esc_html('Comments', 'shadin');
			}
			?>
		</div>
		<div id="comments" class="single-post-comm fl-wrap">
			<?php if (have_comments()) : ?>
				<ul class="commentlist clearafix">
					<?php
					wp_list_comments(array(
						'style'      => 'ul',
						'short_ping' => true,
						'avatar_size' => 50,
						'callback'   => 'my_custom_comment_format',
					));
					?>
				</ul>
				<?php the_comments_navigation(); ?>
			<?php endif; ?>

			<?php
			if (!comments_open() && get_comments_number()) : ?>
				<p class="no-comments"><?php _e('Comments are closed.', 'shadin'); ?></p>
			<?php endif; ?>
		</div>
	<?php
	endif; 
	?>
</div>
<div id="addcom" class="fl-wrap">
    <div class="comment-reply-form fl-wrap">
        <?php comment_form(); ?>
    </div>
</div>
