<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package zo
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

<div id="comments" class="comments-area">
	<?php // You can start editing here -- including this comment! ?>
	<?php if ( have_comments() ) : ?>
        <div class="st-comments-wrap clearfix">
            <h4 class="comments-title">
                <span><?php comments_number(__('Comments','fajar'),__('1 Comments','fajar'),__('Comments (%)','fajar')); ?></span>
            </h4>
            <ol class="comment-list">
				<?php wp_list_comments( 'type=comment&callback=zo_comment' ); ?>
			</ol>
			<?php
				$post_trackbacks = get_comments(array('type' => 'trackback','post_id' => $post->ID));
				$post_pingbacks = get_comments(array('type' => 'pingback','post_id' => $post->ID));
			?>
			<?php if($post_trackbacks || $post_pingbacks) : ?>
			<h4 class="comments-title"><?php _e('Pingbacks And Trackbacks', 'fajar');?></h4>
			<ol>
			  <?php foreach ($comments as $comment) : ?>
			  <?php $comment_type = get_comment_type(); ?>
			  <?php if($comment_type != 'comment') { ?>
			  <li><?php comment_author_link() ?></li>
			  <?php } ?>
			  <?php endforeach; ?>
			</ol>
			<?php endif; ?>
			<?php zo_comment_nav(); ?>
        </div>
	<?php endif; // have_comments() ?>

	<?php
	$commenter = wp_get_current_commenter();
	$allowed_html = array(
		"span" => array(),
	);
	$req = get_option( 'require_name__mail' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$args = array(
        'id_form'           => 'commentform',
        'id_submit'         => 'submit',
        'title_reply'       => wp_kses(__( '<span>Post to Reply</span>','fajar'), $allowed_html),
        'title_reply_to'    => __( 'Post to Reply %s','fajar'),
        'cancel_reply_link' => __( 'Cancel Reply','fajar'),
        'label_submit'      => __( 'Submit','fajar'),
        'class_submit'  => 'btn',
        'comment_notes_before' => '',
        'fields' => apply_filters( 'comment_form_default_fields', array(

                'author' =>
                    '<p class="comment-form-author">'.
                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30"' . esc_attr($aria_req) . ' placeholder="'.__('Name','fajar').'"/></p>',

                'email' =>
                    '<p class="comment-form-email">'.
                    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . esc_attr($aria_req) . ' placeholder="'.__('Email','fajar').'"/></p>',

                'url' =>
                    '<p class="comment-form-url">'.
                    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '" size="30"' . esc_attr($aria_req) . ' placeholder="'.__('Website','fajar').'"/></p>',
            )
        ),
        'comment_field' =>  '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.__('Comment','fajar').'" aria-required="true"></textarea></p>',
	);
	comment_form($args);
	?>

</div><!-- #comments -->
