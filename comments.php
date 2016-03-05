<?php
/**
 * Comments
 */
?>

	<?php if ( have_comments() ) : ?>
		<div class="comments" id="comments">
		<h3 class="comments__title">Comments</h3>

		<ol class="comment-list">
				<?php wp_list_comments(); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation-comment" role="navigation">
			<div class="previous"><?php previous_comments_link( __( '&larr; Older Comments', 'simple_blog' ) ); ?></div>
			<div class="next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'simple_blog' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>
</div>
	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed...
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.'); ?></p>
	<?php endif; ?>

	<?php //Comment Form Content Formating
		  $comments_args = array(
        'comment_notes_after' => '',
        'comment_notes_before'=>'',
        'label_submit'=>'add a comment',
				'title_reply'=>'Leave a comment',
        'comment_field' => '<p class="comment-form-message"><label for="message">Message <span class="required">*</span></label><textarea name="comment"></textarea></p>',
        );
        comment_form($comments_args); ?>
