<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cuisine
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

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>

		<?php the_comments_navigation(); ?>

		<div class="post_comment">
			<?php
			wp_list_comments( array(
				'style'      => 'div',
				'short_ping' => true,
				'format'	=> 'html5'
			) );
			?>
		</div>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'cuisine' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	$args = array(
  'id_form'           => 'commentform',
  'id_submit'         => 'submit',
  'title_reply'       => __( 'Leave a Reply' ),
  'title_reply_to'    => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Reply' ),
  'label_submit'      => __( 'Post Comment' ),

//display more comment fields with some defaults fields in which.
		'fields'=>$fields,

//Text or HTML to be displayed after the set of comment fields (and before the submit button)
		'comment_notes_after'=>'',

//Text or HTML to be displayed before the set of comment form fields if the user is not logged in.
		'comment_notes_before'=>'',

//The textarea and the label of comment body. Sửa nội dung theo ý bạn.
   'comment_field'=>'<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
		);
	comment_form($args);
	?>
