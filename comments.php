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
        'label_submit'=>'Post comment',
				'title_reply'=>'',
				'title_reply_to'=>'',
				'cancel_reply_before'=>'',
				'cancel_reply_after'=>'',
				'cancel_reply_link'=>'',
        'comment_field' => '<p class="comment-form-message"><label for="message">Message*</label><textarea name="comment"></textarea></p>',

        );
        comment_form($comments_args); ?>
