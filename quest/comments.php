<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Quest
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
$lang = get_bloginfo('language');
?>
<div id="comments" class="clearfix">
	<?php if ( have_comments() ) : ?>
		<div class="post-comments-heading">
			<h3><?php comments_number( __( 'No Comments', 'quest' ),
					__( 'One Comment', 'quest' ),
					__( '% Comments', 'quest' ) )
				?>
			</h3>
		</div>

		<div class="comments-container">
			<ul class="comment-list">
				<?php wp_list_comments( 'callback=quest_comments' ); ?>
			</ul>
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="pagination post-pagination clearfix">
				<?php previous_comments_link( __( 'Older Comments', 'quest' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments', 'quest' ) ); ?>
			</div>
		<?php endif; ?>

	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p>
			<?php __( 'Comments are closed.', 'quest' ) ?>
		</p>
	<?php endif; ?>

	<?php if ( comments_open() ) : ?>
		<?php
		$commenter = wp_get_current_commenter();
		$req       = get_option( 'require_name_email' );
		$aria_req  = ( $req ? " aria-required='true'" : '' );
		$fields    = array(
			'author'  => '<div class="col-md-4"><input type="text" placeholder="' . __( 'Name (required)', 'quest' ) . '" name="author" id="author" ' . $aria_req . '></div>',
			'email'   => '<div class="col-md-4"><input type="text" placeholder="' . __( 'Email Address (required)', 'quest' ) . '" name="email" id="email" ' . $aria_req . '></div>',
			'website' => '<div class="col-md-4"><input type="text" placeholder="' . __( 'Website', 'quest' ) . '" name="url" id="url"></div>',
		);

		$args = array(

			//'<input id="submit" name="submit" type="submit" value="Invia">' // . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
		);

		$comments_args_it = array(
			'fields'        => $fields,
			'comment_field' => '<div class="row"><div class="col-md-12"><textarea name="comment" id="comment" placeholder="' . __( 'Il tuo commento ...', 'quest' ) . '"></textarea></div></div>',
			'id_form'       => 'post-comments-form',

			'title_reply'  => __( ' ' ),
			'label_submit' => __('Invia')
		);

		$comments_args_de = array(
			'fields'        => $fields,
			'comment_field' => '<div class="row"><div class="col-md-12"><textarea name="comment" id="comment" placeholder="' . __( 'Ihre Meinung...', 'quest' ) . '"></textarea></div></div>',
			'id_form'       => 'post-comments-form',

			'title_reply'  => __( ' ' ),
			'label_submit' => __('Senden')
		);

		?>

		<?php  if ( $lang === 'de-DE') { 
			comment_form( $comments_args_de );
		} else {  //  ( $lang === 'it-IT')
			comment_form( $comments_args_it );
		} ?>

	<?php endif; ?>
</div>
