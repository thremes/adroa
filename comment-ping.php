<?php
/**
 * Pingback Comment Template
 *
 * The pingback comment template displays an individual pingback comment.
 *
 * @package Adroa
 * @subpackage Template
 * @since 0.1.0
 * @author Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2012, Thiago Senna
 * @link http://thremes.com.br/themes/adroa
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

	global $post, $comment;
?>

	<li id="comment-<?php comment_ID(); ?>" class="<?php hybrid_comment_class(); ?>">

		<?php do_atomic( 'before_comment' ); // adroa_before_comment ?>

		<div class="comment-wrap">

			<?php do_atomic( 'open_comment' ); // adroa_open_comment ?>

			<?php echo apply_atomic_shortcode( 'comment_meta', '<div class="comment-meta">[comment-author] [comment-published] [comment-permalink before="| "] [comment-edit-link before="| "] [comment-reply-link before="| "]</div>' ); ?>

			<?php do_atomic( 'close_comment' ); // adroa_close_comment ?>

		</div><!-- .comment-wrap -->

		<?php do_atomic( 'after_comment' ); // adroa_after_comment ?>

	<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>